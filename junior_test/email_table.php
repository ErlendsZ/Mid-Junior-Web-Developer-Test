
<?php
include 'C:\xampp\htdocs\junior_test\Backend\FunctionHandler.php';
require('C:\xampp\htdocs\junior_test\Backend\deleteData.php');
use function Backend\displayEmails;

echo 
"
<style>
table, th, td 
{
  border: 1px solid black;
}
</style>
";


echo 
"
<table>
  <tr>
    <th>ID</th>
    <th>E-mail </th>
  </tr>
";
echo 
'
<h1 >Delete data from database </h1>
<form action="Backend/deleteData.php" method="post">
  <input type="text" name="id" />
  <input type="submit" name="delete" value="Delete by id" />
';







displayEmails();


echo "</table>";
 


  

?>