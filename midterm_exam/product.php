<?php
require "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
  <table>
    <tr>
      <th>Product name</th>
      <th>Units in stock</th>
    </tr>
    <?php
  $sql = "select ProductName, UnitsInStock from products where CategoryID=1"  
  $result = $conn->query($sql);
  while($sow = $result->fclose_assoc()) {
    echo "<tr>
    <td>{$row['ProductName']}</td>
    <td>{$row['UnisInStock']}</td>
    </tr>";
  }
?>  
    <!-- add table rows hear ex.
    <tr>
      <td>{$row['ProductName']}</td>
      <td>39</td>
    </tr>
    -->    
  </table>
</body>
</html>