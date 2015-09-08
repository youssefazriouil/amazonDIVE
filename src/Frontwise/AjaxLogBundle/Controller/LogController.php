<?php

namespace Frontwise\AjaxLogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Frontwise\AjaxLogBundle\Entity\AjaxLog;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/ajaxlog")
 */

class LogController extends Controller
{
    
     /**
     * @Route("/loadActivity")
     * @Method({"GET"})
     */
    public function loadActivity()
    {
	//$em = $this->getDoctrine()->getManager();
	//$repo = $this->getRepo('AjaxLog');
	$repo = $this->getDoctrine()->getRepository('Frontwise\AjaxLogBundle\Entity\AjaxLog');
	$columns = array('r.id','r.action','r.user','r.details');
	$query = $repo->createQueryBuilder('r')
			->select($columns)
			->orderBy('r.id','DESC')
			->setMaxResults(6)
			->getQuery();
    $activities = $query->getResult(); 
   if($activities){
    	$result = array(
            'success'=>true,
            'data'=> $activities
            );
    }
    else{
	 $activities = "error";
   }
   $response = new JsonResponse();
   $response->setData($result);
   return $response;

   }




     /**
     * @Route("/{level}")
     * @Method({"POST"})
     */
    public function createAction($level = 'info')
    {
        // save session
        $this->get('session')->save();
    	// get request
    	$request = $this->getRequest();
    	// get current user
    	$user = $this->getUser();
    	// create new log
    	$log = new AjaxLog();
    	if ($log->isValidLevel($level) === false){
    		return new Response('Unknown level');
    	}
    	// set log content
    	$log->setLevel($level)
    	->setIp($request->getClientIp())
    	->setUser(is_object($user) ? $user->getId() . $user->getUsername() : '')
    	->setBrowser($this->getRequest()->headers->get('User-Agent'))
    	->setReferer($request->get('referer',$this->getRequest()->headers->get('referer') ? $this->getRequest()->headers->get('referer') : ''))
    	->setAction($request->get('action',''))
    	->setDetails($request->get('details',''))
    	;
    	// store log to DB
    	$manager = $this->getDoctrine()->getManager();
    	$manager->persist($log);
    	$manager->flush();
    	return new Response('ok');
    }

    // get current user (if any)

    public function getUser(){
    	if ($this->get('security.context') && $this->get('security.context')->getToken() && $this->get('security.context')->getToken()->getUser()) {
    		return $this->get('security.context')->getToken()->getUser();
    	}
    	return null;
    }

}
