<?php 

include "connect.php";
include("./registered_voters.php");

    if (isset($_POST['update'])) {
		$user_id = $_POST['id'];

        $name = $_POST['name'];

        $username = $_POST['username'];

        $password = $_POST['password'];

        $idnumber = $_POST['Idnumber'];

        $constitency= $_POST['constituency'];

        $county = $_POST['county']; 
        $ward = $_POST['ward']; 
        $polling_station= $_POST['polling_station']; 
        $role = $_POST['role']; 

        $sql = "UPDATE `voter_details` SET `name`='$name',`username`='$username',`password`='$password',`Idnumber`='$idnumber',`constituency`='$constituency',county = '$county', polling_station ='$polling_station',ward='$ward',role = '$role' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `voter_details` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];
			 $username = $row['username'];
			$password = $row['password'];
			$idnumber = $row['Idnumberr'];
			$constitency = $row['constituency'];
			$county = $row['county'];
			$ward = $row['ward'];
			$polling_station = $row['polling_station'];
			$role = $row['role'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Full name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

            <br>

            username:<br>

            <input type="text" name="username" value="<?php echo $username; ?>">

            <br>

            Id number:<br>

            <input type="number" name="Idnumber" value="<?php echo $idnumber; ?>">

            <br>

            Password:<br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br>

           

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: admin.php');

    } 

}

?> 