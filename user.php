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
    margin: 140px;
    width: 100%;
    overflow-x: none;
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
    background-color:lightblue;
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
    background-color: lime;
    color: whitesmoke;
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

    

    </style>
</head>
        <body>

        <!-----Navbar section------->
        <section id="navbar" class="navbar">
            <div class="navbar">
                <ul>
                    
                    <li><a href="logout.php" style="padding-top:0.1px;">Logout</a></li>
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
         <section id="container" class="container">
<div class="bucket" style="background-color:black;">
        <div class="sidebar">
                <div class="profile" style="display: flex;padding-left:0px; margin-left:0px;">
                <div class="photo"><img src="e-vote.png" width="50" height="50" style="border-radius: 50%;"><h2>Voter</h2></div>
                <div class="description">
                <h3>JOHN JUNIOR</h3>
                </div>
                </div>

                </div>
                <div class="menu-sidebar" style="height:100vh;background-color: black;color:whitesmoke;">
                <div class="head"
                style="padding-top:0px;height:50px;color:black;text-align:center;width:100%;background-color:white;"><h1>Menu</h1></div>
                
                <div class="content">
                    <ul>
<li><a id="dashboard" type="onclick" active href="#">Dashboard</a></li>
<li><a  id="Vote" href="#">Vote now</a></li>
<li><a  id="mydetails" href="#">My Details</a></li>
<li><a  id="voters" href="#">Registered voters</a></li>
<li> <a  id="parties" href="#">Registered Parties</a></li>
<li><a  id="candidates" href="#">Candidates</a></li>
<li> <a  id="result" href="#">View Results</a></li>
<a  class="logout" href="logout.php">Logout</a><br><br>
  </ul>
                </div>

                </div> </div>
       

        </script>
         <div class="main" style="margin-left:18%;margin-right:0;width:100%; background-color:white;display:grid;">
         <div class="head-main" style="position:relative;">
                <div class="containerh" style="display:flex; text-align:left;" ><h1>Dashboard</h1></div>
                <div class="containerh2" style="font-size:20px;margin-top:0px;text-align:center;"><h2>VOTER</h2></div>
                </div>
           
            <div class="election-data-center" style="background-color:brown;
            color:aliceblue;font-size:20px;
            padding-left:20px; width:97%;margin:4px;"><h2>Election Data Center</h2>
             </div>
             <div class="details" style="
             background-color:aqua;border:10px solid brown;padding-top:60px;width:90%;">
             <h2 style="text-align: center;color:black;margin-top:0;"><b>Registered Voters</b></h2>
               
<?php 

?>

<div class="container-fluid"style ="width:100%;">

        
	<div class="row" style ="width:100%;">
	
	</div>
	<br>
	<div class="row">
		<div class="">
			<div class="card-body" style="width:100%;">
            <style>.t1{border: 1px solid black;background-color: white;width: 100%;} .t1 thead tr{background-color: brown;height:5px;border: 1px solid black;color:aliceblue;}
             .t1 tr{ border: 1px solid black;} .t1 td{height: 1px; border: 1px solid black;}</style>

				<table class="t1" >
			<thead>
                
				<tr>
					<th >No</th>
					<th > FULL NAME</th>
					<th >USERNAME</th>
					<th >ID NUMBER</th>
					<th >CONSTITUENCY</th>
					<th >COUNTY</th>
					<th >WARD</th>
					<th >POLLING STATION</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'connect.php';
 					$users = $conn->query("SELECT * FROM voter_details order by name asc");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td>
				 		<?php echo $i++ ?></td>
				 	
				 	<td><?php echo $row['name'] ?></td>
				 	
				 	<td><?php echo $row['Idnumber'] ?></td>
				 	<td><?php echo $row['county'] ?></td>
				 	<td><?php echo $row['constituency'] ?></td>
				 	<td><?php echo $row['county'] ?></td>
				 	<td><?php echo $row['ward'] ?></td>
				 	<td><?php echo $row['polling_station'] ?></td>
				 	
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

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
    $("#dashboard").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="admin_dashboard.php";
        $("#main").load(url);
    });
    $("#vote").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="vote.php";
        $("#main").load(url);
    });
    $("#mydetails").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="mydetails.php";
        $("#main").load(url);
    });
    $("#voters").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="registered_voters.php";
        $("#main").load(url);
    });
    $("#parties").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="registered_parties.php";
        $("#main").load(url);
    });
    $("#candidates").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var url = this.href="candidates.php";
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
