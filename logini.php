<?php
$connect = mysqli_connect("localhost","root","","secure-e-voting-system") or die("connection failed");

if(!empty($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT* FROM voter_details WHERE username = '$username' AND  password = '$password'";
$result=mysqli_query($connect,$query);
$count = mysqli_num_rows($result);
if($count>0)
{
echo "<center><h1>Your data is in the database</h1></center>";

}
else
{
    echo "<script>
    alert('Oooops');
    
    </script>";
}
}


?>

<form method="POST">
               
               <div class="username">
                   <label for="name"> Username</label>
                   <input type="text" placeholder="username" name="username" id="username" required class="username">
               </div><br><br>
               <div class="password">
                   <label for="password"> Password</label>
                   <input type="password" class="password" placeholder="password" id="password" name="password" required>
               </div><br><br><br>
             
             
                   <input type="submit" id="submit" name="submit">
                  
          </form>