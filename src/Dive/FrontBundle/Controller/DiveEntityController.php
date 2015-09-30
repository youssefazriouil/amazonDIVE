<?php

namespace Dive\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Dive\FrontBundle\Entity\Collection;
use Dive\FrontBundle\Entity\DiveEntity;
use Dive\FrontBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/entity")
 */


class DiveEntityController extends BaseController
{


     /**
     * @Route("/mostPopular")
     */
    public function returnMostPopularEntity()
    {
        $entityAmount = $this->getRequest()->get('amount',0);
        $em = $this->getDoctrine()->getManager();
	$repository = $this ->getRepo('Comment');
	//$query = $em->createQuery("select r from Comment r where r.type='fictionalPerson' order by r.votecount desc limit 1");
	$query = $repository->createQueryBuilder('p')
    	 // ->where("p.type = :entityType")
    	  ->orderBy('p.voteCount', 'DESC')
	  ->setMaxResults($entityAmount)
	  //->setParameter('entityType',$entityType)
    	  ->getQuery();

	$queryResult = $query->getResult();
	$result = array(
            'success'=>true,
            'data'=>$queryResult
            );
        return $this->getJSONResponse($result);
     }



    /**
     * @Route("/count")
     */
    public function countAction()
    {
        $uids = $this->getRequest()->get('uids',0);
        $uids = explode(',',$uids);
        $entities = $this->getRepo('DiveEntity')->findBy(array('uid'=>$uids));
        $user = $this->getUser();
        $data = array();
        foreach($entities as $e){
            $subData = array();
            $subData['comments'] = array('count' => count($e->getComments()) );
            $countOwner =0;
            if ($user){
                foreach($e->getComments() as $c){
                    if ($c->getOwner() == $user){
                        $countOwner++;
                    }
                }
            }
            $subData['comments']['owner'] = $countOwner;
            $collections = $e->getCollections();
            $count = 0;
            $countOwner = 0;
            foreach($collections as $c){
                if ($c->getPublic() || $c->getOwner() == $user){
                    $count++;
                    if ($c->getOwner() == $user){
                        $countOwner++;
                    }
                }
            }
            $subData['collections'] = array(
                'count'=>$count,
                'owner'=>$countOwner
                );

            $data[$e->getUid()]= $subData;
        }
        $result = array(
            'success'=>true,
            'results'=> count($data),
            'data'=>$data
            );
        return $this->getJSONResponse($result);
    }

    /**
     * @Route("/getDesc")
     */
     public function getDescription(){
	$title = $this->getRequest()->get('title',0);
	//get search suggestions
	$data = file_get_contents('http://gameofthrones.wikia.com/api/v1/Search/List/?query='.$title.'&limit=5');
	$data = json_decode($data,true);
	$entity_id = $data['items'][0]['id'];
        $data = file_get_contents('http://gameofthrones.wikia.com/api/v1/Articles/AsSimpleJson/?id='.$entity_id);
        $data = json_decode($data,true);
	$result = array(
            'success'=>true,
	    'entity_id'=>$entity_id,
            'data'=> $data['sections'][0]['content'][0]
            );
        return $this->getJSONResponse($result);
	}

     /**
     * @Route("/comments")
     */
     public function commentsAction()
     {
        $uid = $this->getRequest()->get('uid',0);

        $entity = $this->getRepo('DiveEntity')->findOneBy(array('uid'=>$uid));

        if (!$entity){
            $result = array(
                'success'=>false,
                'error'=> 'Entity not found with UID ' . $uid
                );
        } else {
            $user = $this->getUser();
            $countOwner = 0;
            $comments = $entity->getComments();
            $data = array();
            foreach($comments as $c){
                $data[] = $c->jsonSerialize();
                if ($user && $c->getOwner() == $user){
                    $countOwner++;
                }
            }
            $result = array(
                'success'=>true,
                'owner' =>$countOwner,
                'results'=> count($data),
                'data'=>$data
                );
        }
        return $this->getJSONResponse($result);
    }

    /**
     * @Route("/comments/multiple/")
     */
    public function multipleCommentsAction()
    {
        $uids = $this->getRequest()->get('uids',0);

        $uids = explode(',',$uids);
        $entities = $this->getRepo('DiveEntity')->findBy(array('uid'=>$uids));

        if (!$entities){
            $result = array(
                'success'=>false,
                'error'=> 'Entities not found with UIDS ' . implode(',',$uids)
                );
        } else {
            $user = $this->getUser();
            $data = array();
            foreach($entities as $e){
                $subData = array();
                $comments = $e->getComments();
                foreach($comments as $c){
                    $subData[] = $c->jsonSerialize();
                }
                $data[$e->getUid()] = $subData;
            }
            $result = array(
                'success'=>true,
                'results'=> count($data),
                'data'=>$data
                );
        }
        return $this->getJSONResponse($result);
    }


     /**
     * @Route("/collections")
     */
     public function collectionsAction()
     {
        $uid = $this->getRequest()->get('uid',0);

        $entity = $this->getRepo('DiveEntity')->findOneBy(array('uid'=>$uid));

        if (!$entity){
            $result = array(
                'success'=>false,
                'error'=> 'Entity not found with UID ' . $uid
                );
        } else {
            $user = $this->getUser();
            $countOwner = 0;
            $collections = $entity->getCollections();
            $data = array();
            foreach($collections as $c){
                if ($c->getPublic() || $c->getOwner() == $user){
                    $data[] = $c->jsonSerialize();
                    if ($user && $c->getOwner() == $user){
                        $countOwner++;
                    }
                }
            }
            $result = array(
                'success'=>true,
                'owner' =>$countOwner,
                'results'=> count($data),
                'data'=>$data
                );
        }
        return $this->getJSONResponse($result);
    }

    /**
     * @Route("/getVideoStat")
     */
    public function getVideoStat()
    {
        $videoUrl = $this->getRequest()->get('videoUrl',0);
        $service = $this->getRequest()->get('service',0);
        switch($service){
                case 'click':
                $service = "t_clicked"; break;
                case 'twitter':
                $service = "t_shared_twitter"; break;
                case 'pinterest':
                $service = "t_pinned_pinterest"; break;
        }

	$em = $this->getDoctrine()->getEntityManager();
   	$conn = $em->getConnection();
	//$query = "select ".$service." from videoFragments where videoUrl='".$videoUrl."'";
	$sql = $conn->prepare("select ".$service." from videoFragments where videoUrl=:videoUrl");
	//$sql->bindValue("service",$service);
	$sql->bindValue('videoUrl',$videoUrl);
	$sql->execute();
	$queryResult = $sql->fetchAll();

        $result = array(
         'success'=>true,
         'data'=>$queryResult
        );
        return $this->getJSONResponse($result);
     }


    /**
     * @Route("/getAllVideoStat")
     */
    public function getAllVideoStat()
    {
        $videoUrl = $this->getRequest()->get('videoUrl',0);

        $em = $this->getDoctrine()->getEntityManager();
        $conn = $em->getConnection();
        $sql = $conn->prepare("select t_clicked,t_shared_twitter, t_pinned_pinterest from videoFragments where videoUrl=:videoUrl");
        $sql->bindValue('videoUrl',$videoUrl);
        $sql->execute();
        $queryResult = $sql->fetchAll();

	$result = array(
         'success'=>true,
         'data'=>$queryResult
        );
        return $this->getJSONResponse($result);
    }



     /**
     * @Route("/incrementVideoStat")
     */
    public function incrementVideoStat()
    {
        $videoUrl = $this->getRequest()->get('videoUrl',0);
        $service = $this->getRequest()->get('service',0);
        switch($service){
                case 'click':
                $service = "t_clicked"; break;
                case 'twitter':
                $service = "t_shared_twitter"; break;
                case 'pinterest':
                $service = "t_pinned_pinterest"; break;
        }

        $em = $this->getDoctrine()->getEntityManager();
        $conn = $em->getConnection();
        $sql = $conn->prepare("UPDATE videoFragments SET ".$service." =  ".$service." + 1 where videoUrl=:videoUrl");
        //$sql->bindValue("service",$service);
        $sql->bindValue('videoUrl',$videoUrl);
        $sql->execute();

	$result = array(
         'success'=>true,
         'data'=>$service." is incremented by 1"
        );
        return $this->getJSONResponse($result);

    }


}
