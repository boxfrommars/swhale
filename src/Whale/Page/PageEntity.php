<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace Whale\Page;

use Whale\Db\Entity;

class PageEntity extends Entity
{
    /** @var int */
    protected $_order;

    /** @var string */
    protected $_title;
    /** @var string */
    protected $_content;
    /** @var bool */
    protected $_isPublished;

    /** @var int */
    protected $_idParent;
    /** @var string */
    protected $_name;
    /** @var string */
    protected $_path;
    /** @var string */
    protected $_entity;
    /** @var string */
    protected $_url;

    /** @var string */
    protected $_pageUrl;
    /** @var string */
    protected $_pageTitle;
    /** @var string */
    protected $_pageDescription;
    /** @var string */
    protected $_pageKeywords;

    /** @var string */
    protected $_createdAt;
    /** @var string */
    protected $_updatedAt;

    protected $_dbFields = array(
        array(
            'name' => '"order"', // sic!
            'type' => \PDO::PARAM_INT
        ),

        'title',
        'content',
        array(
            'name' => 'is_published',
            'type' => \PDO::PARAM_BOOL
        ),

        'id_parent',
        'name',
        'path',
        'entity',

        'page_url',
        'page_title',
        'page_description',
        'page_keywords',

        'created_at',
        'updated_at'
    );

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->_content = $content;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->_createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->_createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->_entity;
    }

    /**
     * @param string $entity
     */
    public function setEntity($entity)
    {
        $this->_entity = $entity;
    }

    /**
     * @return int
     */
    public function getIdParent()
    {
        return $this->_idParent;
    }

    /**
     * @param int $idParent
     */
    public function setIdParent($idParent)
    {
        $this->_idParent = $idParent;
    }

    /**
     * @return boolean
     */
    public function getIsPublished()
    {
        return $this->_isPublished;
    }

    /**
     * @param boolean $isPublished
     */
    public function setIsPublished($isPublished)
    {
        $this->_isPublished = (bool) $isPublished;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->_order;
    }

    /**
     * @param int $order
     */
    public function setOrder($order)
    {
        $this->_order = $order;
    }

    /**
     * @return string
     */
    public function getPageDescription()
    {
        return $this->_pageDescription;
    }

    /**
     * @param string $pageDescription
     */
    public function setPageDescription($pageDescription)
    {
        $this->_pageDescription = $pageDescription;
    }

    /**
     * @return string
     */
    public function getPageKeywords()
    {
        return $this->_pageKeywords;
    }

    /**
     * @param string $pageKeywords
     */
    public function setPageKeywords($pageKeywords)
    {
        $this->_pageKeywords = $pageKeywords;
    }

    /**
     * @return string
     */
    public function getPageTitle()
    {
        return $this->_pageTitle;
    }

    /**
     * @param string $pageTitle
     */
    public function setPageTitle($pageTitle)
    {
        $this->_pageTitle = $pageTitle;
    }

    /**
     * @return string
     */
    public function getPageUrl()
    {
        return $this->_pageUrl;
    }

    /**
     * @param string $pageUrl
     */
    public function setPageUrl($pageUrl)
    {
        $this->_pageUrl = $pageUrl;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->_path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->_path = $path;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->_updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->_updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->_url = $url;
    }
} 