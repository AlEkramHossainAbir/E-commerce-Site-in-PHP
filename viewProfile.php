<?php 
include "dbconnection.php";
    include "navHeader.php";
    $username = $_SESSION['username'];

    // if(!isset( $_SESSION['username'])){
    //     header('Location : /Project480/header.php');
    // }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Hello <?= $username; ?>, Your Profile </h1>
<?php

 
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
    $query = "SELECT * FROM `user` WHERE username = '$username'";
if($result = mysqli_query($conn, $query)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                
               
                echo "<th>User Name</th>";
                echo "<th>Email</th>";
                echo "<th>Password</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['pass'] . "</td>";
        
            echo "</tr>";
        }
        echo "</table>";
    
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}

?>

</body>
</html>