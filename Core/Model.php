<?php
namespace Task1\Core;
use PDO;
use App\Config;
/**
 * Base model
 *
 * PHP version 7.0
 */
abstract class Model
{
    protected $tableName = '';
    protected $db = null;
    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected function getDB()
    {

        if ($this->db === null) {
            $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
            $this->db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);
            // Throw an Exception when an error occurs
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

    }
}
