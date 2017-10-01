<?php
$updateid = $_GET["update"];
include("connection.php");
$query = "SELECT * FROM emp_record WHERE id = '$updateid'";
$update = $pdo->query($query);

foreach ($update as $row) {
        $Id = $row['id'];
        $Name = $row['name'];
        $SSN = $row['ssn'];
        $Dept = $row['dept'];
        $Salary = $row['salary'];
        $HomeAddress = $row['homeadress'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="update.php?Uid=<?php echo $Id; ?>" method="post">
        <fieldset>
        <span class="fieldInfo">ID:</span><br>
            <input type="text" name="Name" value="<?php echo $Name; ?>"><br>
            <span class="fieldInfo">Social Security No.:</span><br>
            <input type="text" name="SSN" value="<?php echo $SSN; ?>"><br>
            <span class="fieldInfo">Department:</span><br>
            <input type="text" name="Dept" value="<?php echo $Dept; ?>"><br>
            <span class="fieldInfo">Salary:</span><br>
            <input type="number" name="Salary" value="<?php echo $Salary; ?>"><br>
            <span class="fieldInfo">Home address:</span><br>
            <textarea name="HomeAddress" id="form_adress" cols="30" rows="5"><?php echo $HomeAddress; ?></textarea><br>
            <input type="submit" name="Submit"></input>
        </fieldset>
</form>
</body>
</html>
<?php
if(isset($_POST["Submit"])) {
    if(!empty($_POST["Name"]) && !empty($_POST["SSN"])){
        $Uid = $_GET["Uid"];
        $Name = $_POST["Name"];
        $SSN = $_POST["SSN"];
        $Dept = $_POST["Dept"];
        $Salary = $_POST["Salary"];
        $HomeAddress = $_POST["HomeAddress"];
        include("connection.php");
        $query = "UPDATE emp_record SET name = '$Name', ssn = '$SSN', dept = '$Dept', salary = '$Salary', homeadress = '$HomeAddress'
                  WHERE id = '$Uid'";
        $execute = $pdo->query($query);
        if($execute) {
            function redirect_to($newLocation){
                header("Location:".$newLocation);
                exit;
            }
            redirect_to("read.php?Updated=Record has been updated succesfully");
        }
    } else {
        echo "<span class='fieldInfoHeading'>Name and SSN fields cannot be empty.</span>";
    }
}
?>