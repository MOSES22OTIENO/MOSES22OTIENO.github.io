<?php 

include "connect.php";

    if (isset($_POST['update'])) {
      // update data to database


        $name = $_POST['name'];

        $username = $_POST['username'];

        $password = $_POST['password'];

        $Idcardserialno = $_POST['Idnumber'];

        $constituency = $_POST['constituency']; 
        $county = $_POST['county']; 
        $ward = $_POST['ward']; 
        $Polling_station = $_POST['Polling_station'];
        $role = $_POST['role']; 
        $id = $_POST['id'];

        $sql = "UPDATE `voter_details` SET `name`='$name',`username`='$username',`password`='$password',`Idnumber`='$Idcardserialno',`constituency`='$constituency',`county`='$county',`ward`='$ward',`Polling_station`='$Polling_station',`role`='$role' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "
            <script>
            
            alert('data updated succeffully');
            </script>

            
            
            ";
            header("location:admin.php");

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `voter_details` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $username = $row['username'];

            $password = $row['password'];

            $Idcardserialno  = $row['Idnumber'];

            $constituency = $row['constituency'];
            $county = $row['county'];
            $ward = $row['ward'];
            $Polling_station = $_POST['Polling_station'];
            $role = $row['role'];

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>
        
        <form action="" method="post">

        <form method="POST" action="">
                <div class="container1" >
            <div class="fupevi" style="padding:10px;">
                <div class="name">
                    <label for="name"> Full name</label>
                    <input type="text" placeholder=" full name" name="name" value="<?php echo $name; ?>" required autocomplete="off">
                </div><br><br> 
                <div class="username">
                    <label for="name"> Username</label>
                    <input type="text" placeholder="username" name="username" value="<?php echo $username; ?>" required>
                </div><br><br>
                <div class="Id card serial no">
                    <label for="Id card serial no"> Id  number</label>
                    <input type="number" placeholder=" Id number" name="Idnumber" value="<?php echo $Idcardserialno; ?>" required>
                   
                </div><br><br>
                <div class="password">
                    <label for="password"> Password</label>
                    <input type="password" class = "password" placeholder="password" name="password" value="<?php echo $password; ?>" required autocomplete="off">
                </div><br><br>
               
              

             
             </div>
             
            <div class="iccwp" style="padding:10px;" >
               
                <div class="county">
                    <label for="county"> County</label>
                    <input type="text" placeholder=" county" name="county" value="<?php echo $county; ?>" required>
                </div><br><br>

                <div class="constituency">
                    <label for="constituency"> Constituency</label>
                    <input type="text" placeholder="constituency" name="constituency" value="<?php echo $constituency; ?>" required>
                </div><br><br>

                <div class="ward">
                    <label for="ward"> Ward</label>
                    <input type="text" placeholder=" ward" name="ward" value ="<?php echo $ward; ?>" required>
                </div><br><br>
                <div class="Polling station">
                    <label for="polling-staion"> Polling station</label>
                    <input type="Polling-station" placeholder="Polling-station" name="Polling_station" value="<?php echo $Polling_station; ?>" required>
                    </div><br>
                    <h3>select role</h3>
                    <div class="role">
                       
                   <select class="role" value="<?php echo $role; ?>" name="role" >
                   <h3>select role</h3> 
                    <option value="1">Voter</option>
                    <option value="2">Admin</option>
        
                    
            
                   </select>
                   </div>
                   </div><br><br>
                    </div><br>

            <input type="submit" value="Update" name="update">

         
            <a style ="color:black; background-color:beige;padding:15px; font-size:10px; text-decoration:brown;" href="admin.php">Cancel</a>
        </form> 
       
<style>
     body{
        background-color: brown;
    
        
        }
        .container{
            display:flex;
            background-color:lightblue;
            width: 100%;
            height: 900px;
            position: fixed;
        }
        .container .form h1{text-align: center;font-size: 40px;}
        form{
            border: 10px solid grey;
            background-color: lightskyblue;
            margin: 10px;
            width: 70%;
            padding: 30px;
            border-radius: 7px;
            }
            .container1{
                display: flex;
                padding: 10px;
            }
        
.form .form-container form input,.role{
width: 100%;
height: 30px;
border-radius: 5px;
left: 7px;
background-color: whitesmoke;
font-size: 15px;
padding: 3px;
width: 100%;

}
.form{
    align-items: center;
    padding-left: 10px;
    width: 100%;
    border: 10px solid blue;
    background-color: white;
    align-items: center;
    justify-content: center;
    
}

.form .form-container form label{
        font-size: 20px;
        color: black;
        margin-left: 0;

       }
 .form .form-container{
    padding: 10px;
    margin-left: 20%;
 }
 

</style>
        </body>

        </html> 

    <?php

    } else{ 

        header('Location: admin.php');

    } 

}

?> 