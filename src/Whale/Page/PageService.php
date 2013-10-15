<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace Whale\Page;

use Doctrine\DBAL\Connection;

class PageService {

    /** @var  Connection */
    protected $_db;

    /** @var string table name */
    protected $_name = 'page';

    protected $_serviceName = 'page';

    /** @var string table sequence */
    protected $_seq = 'page_id_seq';

    /**
     * @param Connection $db
     * @param array $options
     */
    public function __construct($db, $options = array()) {
        $this->setDb($db);
        if (array_key_exists('name', $options)) $this->setName($options['name']);
        if (array_key_exists('seq', $options)) $this->setSeq($options['seq']);
    }

    /**
     * @return PageEntity[]
     */
    public function fetchAll() {
        $qb = $this->getQuery();
        return $this->fetchQuery($qb);
    }

    /**
     * @param \Doctrine\DBAL\Query\QueryBuilder $qb
     * @return array
     */
    public function fetchQuery($qb) {
        $pagesData = $this->getDb()->executeQuery($qb)->fetchAll();
        $pages = array();
        foreach ($pagesData as $pageData) {
            $pages[] = $this->_createEntity($pageData);
        }
        return $pages;
    }

    /**
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    public function getQuery() {
        $qb = $this->getDb()->createQueryBuilder();
        $qb->select("array_to_string(array_agg(a.page_url ORDER BY a.path), '/') AS url, p.*")
            ->from($this->getName(), 'p')
            ->innerJoin('p', 'page', 'a', 'a.path @> p.path')
            ->groupBy(array('p.id', 'p.path', 'p.page_url'))
            ->orderBy('"order"');
        return $qb;
    }

    /**
     * @param int $id
     * @return bool|PageEntity
     */
    public function fetch($id) {
        $qb = $this->getQuery();
        $qb->add('where', 'p.id = :id');
        $pageData = $this->getDb()->executeQuery($qb, array('id' => $id))->fetch();;
        return ($pageData === false) ? false : $this->_createEntity($pageData);
    }

    /**
     * @param $data
     * @return PageEntity
     */
    protected function _createEntity($data) {
        return new PageEntity($data);
    }

    /**
     * @param PageEntity $page
     */
    public function insert($page) {
        $data = array();
        $types = array();

        foreach($page->raw() as $fieldName => $field) {
            $data[$fieldName] = $field['value'];
            $types[$fieldName] = $field['type'];
        }

        $this->getDb()->insert($this->getName(), $data, $types);
        $page->setId($this->_db->lastInsertId($this->getSeq()));
    }

    /**
     * @param PageEntity $page
     */
    public function update($page) {
        $data = array();
        $types = array();

        foreach($page->raw() as $fieldName => $field) {
            $data[$fieldName] = $field['value'];
            $types[$fieldName] = $field['type'];
        }
        $this->getDb()->update($this->getName(), $data, array('id' => $page->getId()), $types);
    }

    /**
     * @param PageEntity $page
     */
    public function save($page) {
        null === $page->getId() ? $this->insert($page) : $this->update($page);
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $seq table sequence
     */
    public function setSeq($seq)
    {
        $this->_seq = $seq;
    }

    /**
     * @return string table sequence
     */
    public function getSeq()
    {
        return $this->_seq;
    }

    /**
     * @param Connection $db
     */
    public function setDb($db)
    {
        $this->_db = $db;
    }

    /**
     * @return Connection
     */
    public function getDb()
    {
        return $this->_db;
    }

    public function getForm()
    {
        return new PageForm($this);
    }

    /**
     * @param array $params
     * @return PageEntity
     */
    public function getEntity($params = array())
    {
        return new PageEntity($params);
    }

    /**
     * @param string $serviceName
     */
    public function setServiceName($serviceName)
    {
        $this->_serviceName = $serviceName;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->_serviceName;
    }

}