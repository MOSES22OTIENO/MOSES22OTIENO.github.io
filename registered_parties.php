<div class="container-fluid"style ="width:100%;">

        <center><h1>Registered candidates</h1></center>
	<div class="row" style ="width:100%;">
	
	</div>
	<br>
	<div class="row">
		<div class="">
			<div class="card-body" style="width:100%;">
            <style>.t1{border: 1px solid black;background-color: white;width: 100%;} .t1 thead tr{background-color: brown;height:5px;border: 1px solid black;color:aliceblue;}
             .t1 tr{ border: 1px solid black;} .t1 td{height: 1px; border: 1px solid black;}</style>

			
		
				<?php
 					include 'connect.php';
 					$users = $conn->query("SELECT * FROM candidates order by id asc");
 					$i = 1;
 					while($row = $users->fetch_assoc()):
				 ?>
				<table >
                <td style="background-color: lightcoral; padding-left:50px;">


				 	<?php echo $i++ ?>
                
                   
                    Id number: <?php  echo $row['idnumber'] ?><br>
				 	name: <?php echo $row['name'] ?><br>
				 	County: <?php  echo $row['county']?><br>
				 	Picture: <?php echo  $row['photo'] ?><br>
				 	Party: <?php echo $row['party'] ?><br>
				 	Descrition<?php echo $row['description'] ?><br>
				 	
  
    <a href="#"><button id="del" style="background-color:red;color:whitesmoke;">vote</button></a><br><br><br>
   
    </td>
            
        </table>
				<?php endwhile; 
                ?>
                
			</div>
		</div>
	</div>

</div>