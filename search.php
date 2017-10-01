<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEARCH</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="create.php">Create </a></li>
        <li><a href="search.php">Search </a></li>
    </ul>
    <div class="clear"></div>
</div>

<div>
    <form action="search.php" method="get">
    <fieldset>
        <input type="text" name="Search" class="search" placeholder="Search by Name or SSN">
        <input type="Submit" name="SearchButton" value="Search"></input>
    
    </fieldset>
    </form>
</div>

<div>
<?php    
    if(isset($_GET["SearchButton"])){
        include("connection.php");
        // $pdo = new PDO('mysql:host=localhost;dbname=phpcrud', 'user', 'password');
        // $select = "SELECT * FROM emp_record";
        $search = $_GET["Search"];
        $query = "SELECT * FROM emp_record WHERE name = '$search' OR ssn = '$search'";
        $execute = $pdo->query($query);
        
        foreach ($execute as $row) {
            $Id = $row['id'];
            $Name = $row['name'];
            $SSN = $row['ssn'];
            $Dept = $row['dept'];
            $Salary = $row['salary'];
            $HomeAddress = $row['homeadress'];
?>

        <table width="66%" border="5" align="center">
        <caption>Search Results</caption>
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
        <tr>
                <td><?php echo $Id; ?></td>
                <td><a href="read.php?show=<?php echo $Id; ?>"><?php echo $Name; ?></a></td>
                <td><?php echo $SSN; ?></td>
                <td><?php echo $Dept; ?></td>
                <td><?php echo $Salary; ?></td>
                <td><?php echo $HomeAddress; ?></td>
                <td><a href="update.php?update=<?php echo $Id; ?>">Update</a></td>
                <td><a href="delete.php?delete=<?php echo $Id; ?>">Delete</a></td>
        </tr>
      
<?php
    }
} 
?>
    </table>
</div>    

</body>
</html>

