<?php
namespace Dive\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dive\FrontBundle\Entity\User;


class UserLoggedInController extends BaseController
{
    //if user is not logged in, render new user template, else standard template 
    public function serveCorrectPage()
     {
        $user = $this->getUser();
        if (false && !$user){
            return $this->getJSONError('No user logged in');
        } else {
        }
    return $this->getJSONResponse($result);
}
}
