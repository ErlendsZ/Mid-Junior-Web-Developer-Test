<?php

namespace Backend;

include 'C:\xampp\htdocs\junior_test\Backend\DataBase\DatabaseHandler.php';

/*
 * Sends received email to the database
 */
function saveEmail($email)
{
    $database = new DatabaseHandler;
    if (isset($_POST['email']))
    {
        $database->insertEmail($email);
        // After insertion return to the success page
        header('Location: ../junior_test/success.php');
    }

}





