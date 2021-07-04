<?php

namespace Backend;

include 'C:\xampp\htdocs\junior_test\Backend\DataBase\DatabaseHandler.php';

/*
 * Acquires all Emails from database and displays them
 */
function displayEmails()
{
    $database = new DatabaseHandler();
    $emails = $database->selectEmails();
    if (isset($emails)) {
        foreach ($emails as $email)
        {
            echo "<tr>
        <td>" . $email['ID'] . "</td>
        <td>" . $email['Email'] . "</td>
        </tr>";

        }
    } else
    {
        echo "<tr>
            <td> - </td>
            <td> - </td>
            </tr>";
    }

}
