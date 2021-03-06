<?php

namespace AppBundle\Entity;

use AppBundle\Entity\EntityTrait\DateTimeControlTrait;
use \Doctrine\Common\Collections\Collection;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Image
 */
class Image
{
    use DateTimeControlTrait;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $link;

    /**
     * @var \DateTime
     */
    private $dateCreate;

    /**
     * @var \DateTime
     */
    private $dateUpdate;

    /**
     * @var Collection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new ArrayCollection();
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
     * Set link
     *
     * @param string $link
     *
     * @return Image
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Image
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     *
     * @return Image
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * Add tag
     *
     * @param \AppBundle\Entity\Tag $tag
     *
     * @return Image
     */
    public function addTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \AppBundle\Entity\Tag $tag
     */
    public function removeTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return Collection
     */
    public function getTags()
    {
        return $this->tags;
    }
}
