<?php

namespace Dive\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class VideoStatController extends BaseController
{

	
 /**
     * @Route("/HOIchangeVideoStat")
     */
    public function changeVideoStat()
    {
        $videoName = $this->getRequest()->get('videoName',0);
        $service = $this->getRequest()->get('service',0);
        $changeAmount = $this->getRequest()->get('amount',0);
        switch($service){
                case 'click':
                $service = 't_clicked'; break;
                case 'twitter':
                $service = 't_shared_twitter'; break;
                case 'pinterest':
                $service = 't_pinned_pinterest'; break;
        }
        $em = $this->getDoctrine()->getManager();
        $repository = $this ->getRepo('videoFragments');
        $query = $repository->createQueryBuilder();
        $query
          ->select(":service")
          ->where("p.name = :videoName")
          ->setParameter('videoName',$videoName)
          ->setParameter('service',$service)
          ->getQuery();

        $queryResult = $query->getResult();
        $result = array(
	 'success'=>true,
            'data'=>$queryResult
            );
        return $this->getJSONResponse($result);
     }

}
