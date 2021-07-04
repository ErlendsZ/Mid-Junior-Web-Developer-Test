<?php

namespace Backend;

include 'C:\xampp\htdocs\junior_test\Backend\DataBase\DatabaseHandler.php';


/*
 * Sends received id to the database
 */
function deleteData($id)
{
    $database = new DatabaseHandler;
        if (isset($_POST['email']))
        {
            $database->deleteData($id);
            // After insertion return to the main page
            header('Location: ../junior_test/email_table.php');
        }

}

deleteData();

