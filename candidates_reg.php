<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - voting Register</title>
    <style>
       
    
        
        
       
        
        .container .form h1{text-align: center;font-size: 40px;}
        form{
            border: 10px solid grey;
            background-color: lightskyblue;
            margin: 10px;
           
          
            border-radius: 7px;
            }
            .container1{
                display: flex;
                padding: 10px;
            }
        
 input, .role{
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
 
 


 
    </style>
   
    
</head>
<body>
<?php
     include("./connect.php");
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $Idcardserialno = $_POST['idnumber'];
        $name = $_POST['name'];
        $county = $_POST['county'];
        $photo = $_POST['photo'];
        $party_name = $_POST['party'];
        $description = $_POST['description'];

      

       
        $query = "INSERT INTO candidates (idnumber, name,county,photo,party, description, votes) VALUES ('$Idcardserialno','$name','$county','$photo','$party_name','$description',0)";
        $result = mysqli_query($conn,$query);
        if($result){

            ?>
            <script>
                
                alert("Registration Succefull");
               
            </script>
            <?php
        }
        else{
            echo "Unsuccessful: " . mysqli_error($conn);
            
     }
    }
    ?>
        
    


        <!-----end------>

    <!----form section---->
    <section>
     
        <h1>E-voting registration Form</h1>
       
            <form method="POST" action="">
                <div class="container1" >
            <div class="fupevi" style="padding:10px;">
                <div class="idnumber">
                    <label for="idnumber"> ID Number</label>
                    <input type="number" placeholder=" idnumber" name="idnumber" required>
                </div><br><br> 
                <div class="name">
                    <label for="name"> Full Name</label>
                    <input type="text" placeholder="name" name="name" required>
                </div><br><br>
                <div class="county">
                    <label for="county"> County</label>
                    <input type="text" placeholder="county" name="county" required>
                </div><br><br>
                <div class="photo">
                    <label for="photo"> upload your photo</label>
                    <input type="file" class = "photo" placeholder="photo" name="photo" required>
                </div><br><br>
                <div class="party_name">
                    <label for="party_name"> Party Name</label>
                    <input type="text" placeholder=" party name" name="party" required>
                </div><br><br>
              </div>
             
            <div class="iccwp" style="padding:10px;" >
               
                <div class="description">
                    <label for="description"> Enter party description</label>
                    <input type="text" placeholder=" party description" name="description" required>
                </div><br><br>
                    <div class="login" style="display:flex;">
                    
                    <button type="submit" name="save"style="width:100px;padding:10px;height:50px;background-color:green;color:aliceblue;font-size:20px;border-radius:20px;">Register</a></button>                                

            <a href="admin.php" style="padding:10px;text-decoration:none;background-color:red;color:aliceblue;font-size:20px;border-radius:20px; float:right;">Cancel</a></button>
           </div>
          
                   </form>
                   
           
        </div>
    
        </section>
        <!---end-->
    </div>
    
</body>
</html>