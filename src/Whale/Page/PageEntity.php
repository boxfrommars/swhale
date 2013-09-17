<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

/*
  "id" BIGSERIAL NOT NULL,
  "is_published" BOOL DEFAULT 'f',

  "title" VARCHAR(255) NOT NULL,
  "content" TEXT,

  "page_url" VARCHAR(255),
  "page_title" VARCHAR (255),
  "page_description" TEXT,
  "page_keywords" TEXT,
  "order" INT DEFAULT 0,

  "name" VARCHAR(255) UNIQUE,

  "id_parent" BIGINT REFERENCES "page" ("id")  ON DELETE CASCADE,
  "path" LTREE UNIQUE,
  "entity" VARCHAR(255),

  "created_at" TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NOW(),
  "updated_at" TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NOW(),
*/
namespace Whale\Page;

use Doctrine\DBAL\Types\BooleanType;
use Whale\System;

class PageEntity
{
    /** @var int */
    protected $_id;
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


    public function __construct($data = array()){
        foreach ($data as $name => $value) {
            $method = 'set' . System::toCamelCase($name);
            $this->$method($value);
        }
    }

    public function raw(){
        $raw = array();
        foreach ($this->getDbFields() as $field) {
            if (!is_array($field)) {
                $field = array(
                    'name' => $field,
                    'type' => \PDO::PARAM_STR,
                );
            }

            $method = 'get' . System::toCamelCase($field['name']);

            $raw[$field['name']] = array(
                'value' => $this->$method(),
                'type' => $field['type']
            );
        }
        return $raw;
    }

    /**
     * @param array $dbFields
     */
    public function setDbFields($dbFields)
    {
        $this->_dbFields = $dbFields;
    }

    /**
     * @return array
     */
    public function getDbFields()
    {
        return $this->_dbFields;
    }

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
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->_id = $id;
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