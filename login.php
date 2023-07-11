<?php 
$connect = mysqli_connect("localhost","root","mysql@22otieno.","secure_e_voting_system") or die("connection failed");

include("./connect.php");
if (!empty($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $username = stripslashes($username);
    $username = mysqli_escape_string($conn,$username);
    $username = htmlspecialchars($username);

    $password = stripslashes($password);
    $password = mysqli_escape_string($conn,$password);
    $password = htmlspecialchars($password);

    $role = stripslashes($role);
    $role = mysqli_escape_string($conn,$role);
    $role = htmlspecialchars($role);

$query = "SELECT* FROM voter_details WHERE username = '$username' AND  password = '$password' AND role = '$role'";
$result=mysqli_query($connect,$query);
$count = mysqli_num_rows($result);
if($count>0)
{
    if($role == 1){

        header("location:user.php");
        
    }
    elseif ($role == 2){
        header("location:admin.php");
    }

}
else
{
    echo "<script>
    alert('check Your login details or create account');
    
    </script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - voting Login</title>

   

    
    <style>
        body{
        background-color: brown;
    
        
        }
        .container{
            display:flex;
           
            width: 100%;
            height: 900px;
          
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
    padding-left: 20px;
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
</head>
<body>
    <div class="container">
        <!---logo-->
<section class="logo" style="margin-top: 5%;display:none;">

<img src="e-vote.png" width=""height="">
    </section>
        
    


        <!-----end------>

    <!----form section---->
        <section class="form">
        <h1>E-voting Login Form</h1>
        <div class="form-container">
            
            <form method="POST" name="f1">
               
                <div class="username">
                    <label for="name"> Username</label>
                    <input type="text" placeholder="username" name="username" id="username" required class="username">
                </div><br><br>
                <div class="password">
                    <label for="password"> Password</label>
                    <input type="password" class="password" placeholder="password" id="password" name="password" required>
                </div><br><br><br>
               <br>
               <div class="role">
                   <select class="role" name="role">
                    <option value="1">Voter</option>
                    <option value="2">Admin</option>
                   </select>
                   </div><br><br><br>
               <div class="submit">
                    <input type="submit" id="submit" name="submit">
                    <h2>Don't have an account? =><button type="submit"> <a href="register.php">Register</a></button></h2>
                    <a href="home.php" style="margin-left:50%;padding:10px;text-decoration:none;background-color:white;color:black;font-size:20px;border-radius:20px; float:right;margin-right:0%;">Home</a></button>
            </div>
                    <a href="">Forgot Password</a>
                    
               </div>
            </form>
        </div>
    
        </section>
        <!---end-->
    </div>
    <script>   
           
        </script>  
  
    
</body>
</html>