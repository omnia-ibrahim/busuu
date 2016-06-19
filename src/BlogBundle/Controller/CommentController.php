<?php
namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Response;

class CommentController
{
    /**
     * @Route("/api/comment/{id}/plus")
     * @Method("POST")
     */
    public function addAction($id)
    {
      $request = $this->get('request');
      // Here we will update database with plus one to the comment id passed with the request
      return new Response('Thumbs Up!');
    }
    /**
     * @Route("/api/comment/{id}/minus")
     * @Method("POST")
     */
    public function minusAction($id)
    {
      $request = $this->get('request');
      // Here we will update database with minus one to the comment id passed with the request
      return new Response('Thumbs Down!');
    }
    /**
     * @Route("/api/comment/{id}/total")
     * @Method("GET")
     */
    public function totalAction($id)
    {
        $request = $this->get('request');
      // Here we will get the total number of votes for a certain comment ID
      return new Response('Total:' . $total);
    }
}