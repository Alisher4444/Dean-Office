<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
  <?php
    include 'table_page.php';
    include 'dbconnect.php';

    $query = "SELECT * FROM users";
    $run = mysql_query($query);

    while($row=mysql_fetch_array($run)) :

  ?>

<table>
  <tr>
    <th><?php $uname ?></th>
    <th><?php $email ?></th>
    <th><?php $fname ?></th>
    <th><?php $sname ?></th>
    <th><?php $pin ?></th>
    <th><?php $uname ?></th>
  </tr>
</table>
<?php
  endwhile;
?>
</body>
</html>
