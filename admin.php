<!DOCTYPE html>
<html>
<head>
<link rel="Stylesheet" type="text/css" href="e-voting.css">
<link rel="Stylesheet" type="text/css" href="@keyframes.css">
<title>E-Voting System</title>
<?php

include('./connect.php');


?>
    <style>
      
#navbar{
    background-color: black;
    color: white;
    padding: 10px;
    display: flex;
    justify-content: flex-end;
    border-top: 5px  solid red;
    height: 30px;
    padding-top: 25px;
    position: fixed;
    margin-top:0px;
    width: 100%;
}
.e-voting-system{
    position: fixed;
    margin-top: 70px;
    width: 100%;
}
.bucket {
    position: fixed;
    margin-top: 140px;
   
}
.main{
    margin:140px;
}


.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
   
}

.navbar li {
    display: inline-block;
    margin-left: 10px;
       
}

.navbar a {
    color: white;
    text-decoration: none;
    
}
.navbar li a:hover{
    background-color: white;
    color:brown;
}
.spanh1{
    height: 50px;
    color: white;
    background-color:brown;
    display: grid;
    padding-bottom: 20px;
    
}
.container .bucket .sidebar .profile .photo, .description{

background-color: black;
padding: 5px;
top: 0px;
display: grid;
color: whitesmoke;
}
#container{
    display: flex;

}
#container .main{
    width: 90%;
    padding-left: 20px;
    border:15px solid darkslategrey;

}
#container .main .sidebar{
    border: 20px solid grey;
    height: 100vh;
}
#container .content li,a{
    text-decoration: none;
    color: whitesmoke;
    font-size: 20px;
    display:block;
    padding: 7px;
    border: 3px solid black;
    

}
#container .content ul li{
    text-decoration: none;

}
#container .content a:hover{
    background-color: whitesmoke;
    color: brown;
    transition: 2s;
}
body{width: 100%;}
.details .div1 span{
    width: 400px;
    height: 200px;
    padding:20px;
    
    font-size: 20px;
    background-color:burlywood;
    display: flex inline;
    border-radius: 20px;
    }


.details .div2 span{
    width: 400px;
    height: 200px;
    padding:20px;
    font-size: 20px;
    background-color:lightblue;
    display: flex inline;
    border-radius: 20px;
    }
    .details{
        padding: 30px;
        margin: 20px;
      
        
    }
    span button{
        width: 100px;
        height: 50px;
        border-radius: 20px;

    }
    #e-voting-system, #navbar, .sidebar{
       

    }
    span button:hover{
        background-color: blue;
        transition: 1s;
    }

    @media only screen and (max-width: 600px) {
	

        .menu-sidebar{
            display: none;
            
        }
        .main{
            margin-left:0;
            margin-right:0;
            width:100%;
             background-color:lightblue;
             padding: 0px;
             margin: 0px;  
             position:none; 
        }
}
    

    </style>
</head>
        <body>

        <!-----Navbar section------->
        <section id="navbar" class="navbar">
            <div class="navbar" style="display: inline-flex;">
                <h1 id="m"style="margin-top:0;">menu</h1>
                <h1 id="x"style="margin-top:0;">close</h1>
                <ul>
                    
                    <li><a href="logout.php" style="padding-top:0.1px;"id="l">Logout</a></li>
                </ul>
            </div>
        </section><!----end-->

        <!-------system name section  ------>
        <section id="e-voting-system" class="e-voting-system">
            <div class="spanh1">
                <div class="span"></div>
                <div class="Secure E-voting system" style="padding-left:10px;">
                    <h1>Secure E-voting Sytem</h1>
                </div>


            </div>


        </section><!--------end-->

        <!----Container section---->
         <section id="container" class="container" style="">
<div class="bucket" style="background-color:brown;">
        <div class="sidebar">
                <div class="profile" style="display: flex;padding-left:0px; margin-left:0px;">
                <div class="photo"><img src="MOSES OTIENO.jpg" width="50" height="50" style="border-radius: 50%;"><h2>Admin</h2></div>
                <div class="description">
                <h3>MOSES OCHIENG OTIENO</h3>
                </div>
                </div>

                </div>
                <div class="menu-sidebar" style="height:100vh;background-color: brown;color:whitesmoke;">
                <div class="head"
                style="padding-top:0px;height:50px;color:black;text-align:center;width:100%;background-color:aliceblue;"><h1>Menu</h1></div>
                
                <div class="content">
                    <ul>
                       <li><a href="" id="admin_dashboard">Dashboard</a></li>
                       <li><a href="" id="general">General</a></li>
                       <li><a href="#" id="accreditation">Acreditation</a></li>
                       <li> <a href="#" id="registered_parties">Registered Parties</a></li>
                        <li><a href="#" id="voters">Registered voters</a></li>
                        <li><a href="#" id="candidates">Candidates</a></li>
                        
                        <li> <a href="#" id="results">Election Results</a></li>
                        <a href="logout.php">Logout</a><br><br>


                        
                    </ul>
                </div>

                </div>   

        </div>
         <div class="main" id="main" style="margin-left:18%;margin-right:0;width:100%; background-color:white;">
         <div class="head-main" style="position:relative;">
                <div class="containerh" style="display:flex; text-align:left;" ><h1>Dashboard</h1></div>
                <div class="containerh2" style="font-size:20px;margin-top:0px;text-align:center;"><h2>Welcome Admin</h2></div>
                </div>
           
            <div class="election-data-center" style="background-color:brown;
            color:aliceblue;font-size:20px;
            padding-left:20px;"><h2>Election Data Center</h2>
             </div>
             <div class="details" style="
             background-color:aqua;border:10px solid brown;padding-top:60px;">
                <div class="div1" style="padding:60px; overflow:auto;">
                <span>Election Details:<button>View</button></span>
                <span >Qualified Candidates 18:<button>View</button></span>
                <span>Cleared Candidates: 18<button>View</button></span>
                </div>
                <div class="div2 " style="padding:60px;">
                <span>Registered Voters:21<button>View</button></span>
                <span>Accredited Voter(s):16<button>View</button></span>
                <span>Election Statistics(s):<button>View</button></span>
                </div>
                
             </div>

         </div>
</div>

                </section><!----end-->

        <!------copyright section-->
        <section id="copyright" class="copyright" style="color:aliceblue;background-color:black; text-align:center;height:20px;">
            <h5>2023@SecureE-voting</h5>


        </section><!----end-->

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>



<script>

$(function(){
    $("#admin_dashboard").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="admin_dashboard.php";
        $("#main").load(url);
    });
    $("#general").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="general.php";
        $("#main").load(url);
    });
    $("#accreditation").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="accreditation.php";
        $("#main").load(url);
    });
    $("#registered_parties").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="registered_parties.php";
        $("#main").load(url);
    });
    $("#voters").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="registered_voters.php";
        $("#main").load(url);
    });
    $("#candidates").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="candidates.php";
        $("#main").load(url);
    });
    $("#registration").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="admin_register_voter.php";
        $("#main").load(url);
    });
    $("#results").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="results.php";
        $("#main").load(url);
    });
});
</script>
        </body>
</html>
