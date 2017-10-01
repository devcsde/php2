<?php

if(isset($_POST["Submit"])) {
    $Name = $_POST["Name"];
    $SSN = $_POST["SSN"];
    $Dept = $_POST["Dept"];
    $Salary = $_POST["Salary"];
    $HomeAddress = $_POST["HomeAddress"];;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>READ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <table width="66%" border="5" align="center">
      <caption class="caption">Employees records</caption>
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>SSN</th>
          <th>Department</th>
          <th>Salary</th>
          <th>Home Address</th>
          <th>Update</th>
          <th>Delete</th>
      </tr>
        <?php
        include("connection.php");
        $query = "SELECT * FROM emp_record";
        $execute = $pdo->query($query);
        if ($execute) {
            foreach ($pdo->query($query) as $row) {
            $Id = $row['id'];
            $Name = $row['name'];
            $SSN = $row['ssn'];
            $Dept = $row['dept'];
            $Salary = $row['salary'];
            $HomeAddress = $row['homeadress'];
        ?>
      <tr>
            <td><?php echo $Id; ?></td>
            <td><?php echo $Name; ?></td>
            <td><?php echo $SSN; ?></td>
            <td><?php echo $Dept; ?></td>
            <td><?php echo $Salary; ?></td>
            <td><?php echo $HomeAddress; ?></td>
            <td><a href="update.php?id=<?php echo $Id; ?>">Update</a></td>
            <td><a href="delete.php?delete=<?php echo $Id; ?>">Delete</a></td>
      </tr>
        <?php
            }
        } else {
            echo "SQL Error <br />";
            echo $statement->queryString."<br />";
            echo $statement->errorInfo()[2];
        }
        ?>
  </table>
</body>
</html>