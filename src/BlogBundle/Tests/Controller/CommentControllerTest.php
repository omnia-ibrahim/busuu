<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains('Hello Busuu', $client->getResponse()->getContent());
    }
    public function testApi() 
    {
       // Assert that the "Content-Type" header is "application/json"
       $this->assertTrue(
       $client->getResponse()->headers->contains(
        'Content-Type',
        'application/json'
           )
      );
    }
}
