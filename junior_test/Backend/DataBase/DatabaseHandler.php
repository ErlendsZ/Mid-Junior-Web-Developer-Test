<?php

namespace Backend;

use Database;

require('C:\xampp\htdocs\junior_test\Backend\DataBase\Database.php');
require('C:\xampp\htdocs\junior_test\Backend\Filters\Email.php');


class DatabaseHandler extends Database
{
    /*
     * Inserts new E-Mail record with prepared statements
     */
    public function insertEmail(string $email)
    {
            // Create connection and initialize database/table if necessary
            $connection = $this->getConnection();
            $this->initializeDatabase();
            $this->createTable();
            // Insert provided email
            if ($stmt = $connection->prepare('INSERT INTO emails (Email) VALUES (?)') or die(mysqli_error($connection)))
            {
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $stmt->store_result();
                $stmt->close();
            }

    }


    /*
     * Acquires all Emails from the database
     */
    public function selectEmails(): ?array
    {
        $connection = $this->getConnection();
        $this->initializeDatabase();
        $this->createTable();
        $emails = [];
        $result = $connection->query('SELECT * FROM emails');
        // Check if returned results are not empty
        if (isset($result->num_rows) && $result->num_rows > 0)
        {
            $counter = 0;
            while ($row = $result->fetch_assoc())
            {
                $emails[$counter] = $row;
                $counter++;
            }
        }
        else
        {
            return null;
        }
        return $emails;
    }
}
