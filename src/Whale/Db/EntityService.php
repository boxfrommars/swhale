<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace Whale\Db;

use Doctrine\DBAL\Connection;

class EntityService {
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
     * @param Entity $entity
     */
    public function insert($entity) {
        $data = array();
        $types = array();

        foreach($entity->raw() as $fieldName => $field) {
            $data[$fieldName] = $field['value'];
            $types[$fieldName] = $field['type'];
        }

        $this->getDb()->insert($this->getName(), $data, $types);
        $entity->setId($this->_db->lastInsertId($this->getSeq()));
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