<?php
     include("./connect.php");
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $Idcardserialno = $_POST['Idnumber'];
        $constituency = $_POST['constituency'];
        $county = $_POST['county'];
        $ward = $_POST['ward'];
        $Polling_station = $_POST['Polling_station'];
        $role = $_POST['role'];

      

       
        $query = "INSERT INTO voter_details (name, username,password,Idnumber, constituency, county, ward,Polling_station,role,status,votes)VALUES('$name','$username','$password','$Idcardserialno','$constituency','$county','$ward','$Polling_station','$role',0,0)";
        $result = mysqli_query($conn,$query);
        if($result){
          echo "<script>alert('Registration successful')</script>";
          header('location:login.php');
    
        }
        else{
            echo "Unsuccessful: " . mysqli_error($conn);
            
     }
    }
    
    
    ?>