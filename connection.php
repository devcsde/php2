
    <?php

    $pdo = new PDO('mysql:host=localhost;dbname=phpcrud', 'user', 'password');
    $select = "SELECT * FROM emp_record";
   
    ?>


<!--  
// ==========================

// if(pdo){
    //     echo "DB connected <br>";
    //     $sql = "SELECT * FROM emp_record";
    //     if (sql) {
    //          foreach ($pdo->query($sql) as $row) {
    //    echo $row['name']."<br />";
    //    echo $row['ssn']."<br />";
    //    echo $row['dept']."<br />";
    //    echo $row['salary']."<br />";
    //          }
    //     } else {
    //         echo "SQL Error <br />";
    //         echo $statement->queryString."<br />";
    //         echo $statement->errorInfo()[2];
    //     }
    // } else {
    //     echo "SQL Error <br />";
    //     echo $statement->queryString."<br />";
    //     echo $statement->errorInfo()[2];
    // }

    // $sql = "SELECT * FROM emp_record";
    // foreach ($pdo->query($sql) as $row) {
    //    echo $row['name']."<br />";
    //    echo $row['ssn']."<br />";
    //    echo $row['dept']."<br /><br />";
    //    echo $row['salary']."<br /><br />";
    // }

     if ($select) {
        foreach ($pdo->query($select) as $row) {
        echo $row['name']."<br />";
        echo $row['ssn']."<br />";
        echo $row['dept']."<br />";
        echo $row['salary']."<br />";
        } 
    }   else {
        echo "SQL Error <br />";
        echo $select->queryString."<br />";
        echo $select->errorInfo()[2];
    }





-->