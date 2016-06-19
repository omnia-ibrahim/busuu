<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="BlogBundle\Entity\Repository\CommentRepository")
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks
 */
class Comment
{

     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $user;

    /**
     * @ORM\Column(type="text")
     */
    protected $comment;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    
    /**
     * @ORM\Column(type="integer")
     */
    protected $votes;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    public function __construct()
    {
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }    
}
