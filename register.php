<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - voting Register</title>
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

            ?>
            <script>
                alert("Registration Succefull");
                window.location = "login.php";
            </script>
            <?php
        }
        else{
            echo "Unsuccessful: " . mysqli_error($conn);
            
     }
    }
    
    
    ?>
    
</head>
<body>
    <div class="container">
        <!---logo-->
<section class="logo" style="margin-top: 5%; display:none;">

<img src="e-vote.png" width=""height="">
    </section>
        
    


        <!-----end------>

    <!----form section---->
        <section class="form">
        <h1>E-voting registration Form</h1>
        <div class="form-container">
            <form method="POST" action="">
                <div class="container1" >
            <div class="fupevi" style="padding:10px;">
                <div class="name">
                    <label for="name"> Full name</label>
                    <input type="text" placeholder=" full name" name="name" required autocomplete="off">
                </div><br><br> 
                <div class="username">
                    <label for="name"> Username</label>
                    <input type="text" placeholder="username" name="username" required>
                </div><br><br>
                <div class="Id card serial no">
                    <label for="Id card serial no"> Id  number</label>
                    <input type="number" placeholder=" Id number" name="Idnumber" required>
                    
                   
                </div><br><br>
                <div class="password">
                    <label for="password"> Password</label>
                    <input type="password" class = "password" placeholder="password" name="password" required autocomplete="off">
                </div><br><br>
                <div class="cpassword">
                    <label for="cpassword"> Confirm Password</label>
                    <input type="password"  class = "cpassword" placeholder="cpassword" name="password" required>
                </div><br><br>
              

             
             </div>
             
            <div class="iccwp" style="padding:10px;" >
               
                <div class="county">
                    <label for="county"> County</label>
                    <input type="text" placeholder=" county" name="county" required>
                </div><br><br>

                <div class="constituency">
                    <label for="constituency"> Constituency</label>
                    <input type="text" placeholder="constituency" name="constituency" required>
                </div><br><br>

                <div class="ward">
                    <label for="ward"> Ward</label>
                    <input type="text" placeholder=" ward" name="ward" required>
                </div><br><br>
                <div class="Polling station">
                    <label for="polling-staion"> Polling station</label>
                    <input type="Polling-station" placeholder="Polling-station" name="Polling_station" required>
                    </div><br>
                    <h3>select role</h3>
                    <div class="role">
                       
                   <select class="role" name="role">
                   <h3>select role</h3>
                    <option value="1">Voter</option>
                    <option value="2">Admin</option>
        
                    
            
                   </select>
                   </div>
                   </div><br><br>
                    </div><br>
                    <div class="login" style="display:flex;">
                    
                    <button type="submit" name="save"style="width:100px;padding:10px;height:50px;background-color:green;color:aliceblue;font-size:20px;border-radius:20px;">Register</a></button>                                

            <a href="login.php" style="margin-left:50%;padding:10px;text-decoration:none;background-color:red;color:aliceblue;font-size:20px;border-radius:20px; float:right;margin-right:0%;">Login</a></button>
           </div>
           <a href="home.php" style="margin-left:50%;padding:10px;text-decoration:none;background-color:white;color:black;font-size:20px;border-radius:20px; float:right;margin-right:0%;">Home</a></button>
                   </form>
                   
           
        </div>
    
        </section>
        <!---end-->
    </div>
    
</body>
</html>