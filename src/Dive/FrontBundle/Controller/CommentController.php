<?php

namespace Dive\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Dive\FrontBundle\Entity\User;
use Dive\FrontBundle\Entity\Comment;
use Dive\FrontBundle\Entity\DiveEntity;


/**
 * @Route("/comment")
 */


class CommentController extends BaseController
{

	public function checkIfAlreadyLikedComment($ip,$comment_id){

	$em = $this->getDoctrine()->getEntityManager();
   	$conn = $em->getConnection();
	$sql = $conn->prepare("select comments_liked from commentLikers where ip=:ip");
	//$sql->bindValue("service",$service);
	$sql->bindValue('ip',$ip);
	$sql->execute();
	$queryResult = $sql->fetchAll();
	if(count($queryResult) == 0){
		$sql = $conn->prepare("insert into  commentLikers values(':ip',:comment_id)");
		$sql->bindValue('ip',$ip);
		$sql->bindValue('comment_id',$comment_id);
		$sql->execute();
		$queryResult = $sql->fetchAll();
        	$result = array(
       			'success'=>true,
         		'data'=>'Inserted into commentLikers'
        	);
	}
	//else: de persoon bestaat al in de DB, en heeft de huidige comment nog niet geliket, of al wel geliket.
	else{
		//if($queryResult[0]['comment_id'])
	}
        $result = array(
         'success'=>true,
         'data'=>$queryResult
        );
        return $this->getJSONResponse($result);
     }

	


      /**
     * @Route("/incrementVoteCount")
     * @Method({"POST"})
     */
     public function incrementVoteCountByOne(){
	$comment_id = $this->getRequest()->get('id',0);
	$this->checkIfAlreadyLikedComment($_SERVER['REMOTE_ADDR'],$comment_id);
	$target_comment = $this->getRepo('Comment')->find((int)$comment_id);
	$target_comment->incrementVoteCount();
	$manager = $this->getDoctrine()->getManager();
	$manager->flush();
	$result = array(
            'success'=>true,
            'data'=> $target_comment->getVoteCount()
            );
	return $this->getJSONResponse($result);
     }
      /**
     * @Route("/decrementVoteCount")
     * @Method({"POST"})
     */
     public function decrementVoteCountByOne(){
        $comment_id = $this->getRequest()->get('id',0);
        $target_comment = $this->getRepo('Comment')->find((int)$comment_id);
        $target_comment->decrementVoteCount();
        $manager = $this->getDoctrine()->getManager();
        $manager->flush();
        $result = array(
            'success'=>true,
            'data'=> $target_comment->getVoteCount()
            );
        return $this->getJSONResponse($result);
     }


     /**
     * @Route("/add")
     * @Method({"POST"})
     */
     public function addAction()
     {
        $uid = $this->getRequest()->get('uid',0);
	$type = $this->getRequest()->get('type',0);
        $user = $this->getUser();
        if (false && !$user){
            return $this->getJSONError('No user logged in');
        } else {
         $entity = $this->getRepo('DiveEntity')->findOneBy(array('uid'=>$uid));
         $manager = $this->getDoctrine()->getManager();
         if (!$entity){
            $entity = new DiveEntity();
            $entity->setUID($uid);
            $manager->persist($entity);
        }
        $request = $this->getRequest();
        $comment = new Comment();
        $comment->setEntity($entity);
        $body = $request->get('body');
        if (!$body){
            return $this->getJSONError('Empty comment given');
        }
        $comment->setVoteCount(0);
	$comment->setType($type);
	$comment->setUID($uid);
	$comment->setBody($body);
        $comment->setOwner($user);

        $manager->persist($comment);
        $manager->flush();

        $result = array(
            'success'=>true,
            'data'=> $comment->jsonSerialize()
            );

    }
    return $this->getJSONResponse($result);
}
}
