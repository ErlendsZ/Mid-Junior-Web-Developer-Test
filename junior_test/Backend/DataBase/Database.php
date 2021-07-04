<?php

class Database
{

    public static $connection;
    public static $database;

    /*
     * Checks if connection to the MySQLi is already set, otherwise create a new connection
     * and returns connection.
     */
    public function getConnection()
    {
        if (!isset(self::$connection))
        {
            // Acquire connection information from .ini file
            $config = parse_ini_file('C:\xampp\htdocs\junior_test\Backend\Config\config.ini');
            self::$database = $config['dbname'];
            // Create connection
            self::$connection = new mysqli('localhost', $config['username'], $config['password']);
        }

        if (self::$connection === false)
        {
            return false;
        }

        return self::$connection;
    }

    /*
     * Checks if database is selected, otherwise create one based on defined name
     * in .ini file
     */
    public function initializeDatabase()
    {
        // Create a new connection
        $connection = $this->getConnection();

        // If not successful then return error
        if ($connection->connect_error) {
            die("Error connecting to the database");
        }
        // Select database
        $selectedDatabase = $connection->select_db(self::$database);
        $requiredDatabase = self::$database;
        // Create database if it doesn't exist
        if (!$selectedDatabase)
        {
            if (!$connection->query("CREATE DATABASE `$requiredDatabase`"))
            {
                die('Error creating database: ' . mysqli_error($connection));
            }
        }
    }

    /*
     * Creates database table if it doesn't exist
     */
    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS emails (
            ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Email VARCHAR(30) NOT NULL)";

        $connection = $this->getConnection();

        if ($connection->connect_error)
        {
            die("Error creating table");
        }

        if (!$connection->query($sql) === true)
        {
            echo "Table creation unsuccessful";
        }
    }
}
