
<?php
include 'C:\xampp\htdocs\junior_test\Backend\FunctionHandler.php';

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








displayEmails();


echo "</table>";



?>