<?php

namespace Dive\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dive\FrontBundle\Entity\CommentRepository")
 */
class Comment implements \jsonSerializable
{
    use ORMBehaviors\Timestampable\Timestampable;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=4096)
     */
    private $body;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
     */
    private $owner;

    /**
     * @ORM\ManyToOne(targetEntity="DiveEntity", inversedBy="comments")
     */
    private $entity;

    
   /**
     * @var integer
     *
     * @ORM\Column(name="voteCount", type="integer")
     */
    private $voteCount;
    

     /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=4096)
     */
    private $uid;


    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=4096)
     */
    private $type;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function jsonSerialize() {
        $result = array(
            'id'=>$this->id,
            'body'=>$this->body,
            'owner'=> $this->owner ? $this->owner->jsonSerialize() : array('id'=>0,'username'=>'Anonymous'),
            'entity'=>$this->getEntity()->getId(),
            'entity_uid'=>$this->getEntity()->getUID(),
            'created_at'=>$this->createdAt,
	    'voteCount'=>$this->voteCount
            );
        return $result;
    }

     /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Comment
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    public function getVoteCount(){
	return $this->voteCount;
    }
	
    public function setVoteCount($amountOfVotes){
        $this->voteCount = $amountOfVotes;
	return $this;
    }
    
    public function incrementVoteCount(){
   	$this->voteCount = $this->voteCount+1;
	return $this;
    }
    public function decrementVoteCount(){
        $this->voteCount = $this->voteCount-1;
        return $this;
    }

    public function getUID(){
        return $this->uid;
    }

    public function setUID($uid){
        $this->uid = $uid;
        return $this;
    }

  public function getType(){
        return $this->uid;
    }

    public function setType($type){
        $this->type = $type;
        return $this;
    }


    /**
     * Set owner
     *
     * @param \Dive\FrontBundle\Entity\User $owner
     * @return Comment
     */
    public function setOwner(\Dive\FrontBundle\Entity\User $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \Dive\FrontBundle\Entity\User 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set entity
     *
     * @param \Dive\FrontBundle\Entity\DiveEntity $entity
     * @return DiveEntity
     */
    public function setEntity(\Dive\FrontBundle\Entity\DiveEntity $entity = null)
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Get entity
     *
     * @return \Dive\FrontBundle\Entity\DiveEntity 
     */
    public function getEntity()
    {
        return $this->entity;
    }
 
}
