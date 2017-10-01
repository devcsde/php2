<?php

if(isset($_POST["Submit"])) {
    if(!empty($_POST["Name"]) && !empty($_POST["SSN"])){
        $Name = $_POST["Name"];
        $SSN = $_POST["SSN"];
        $Dept = $_POST["Dept"];
        $Salary = $_POST["Salary"];
        $HomeAddress = $_POST["HomeAddress"];
        include("connection.php");
        $query = "INSERT INTO emp_record(name, ssn, dept, salary, homeadress) 
            VALUES('$Name', '$SSN', '$Dept', '$Salary', '$HomeAddress')";
        $execute = $pdo->query($query);

        if($execute) {
            echo "<span class='success'>Record has been added</span>";
        }
    } else {
        echo "<span class='fieldInfoHeading'>Name and SSN fields cannot be empty.</span>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="create.php" method="post">
        <fieldset>
            <span class="fieldInfo">Name:</span><br>
            <input type="text" name="Name"><br>
            <span class="fieldInfo">Social Security No.:</span><br>
            <input type="text" name="SSN"><br>
            <span class="fieldInfo">Department:</span><br>
            <input type="text" name="Dept"><br>
            <span class="fieldInfo">Salary:</span><br>
            <input type="number" name="Salary"><br>
            <span class="fieldInfo">Home address:</span><br>
            <textarea name="HomeAddress" id="form_adress" cols="30" rows="5"></textarea><br>
            <input type="submit" name="Submit"></input>
        </fieldset>
    </form>
</body>
</html>