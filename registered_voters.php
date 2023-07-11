<div class="container-fluid"style ="width:100%;">

        <center><h1>Registered voters</h1></center>
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
			<button><b><a href="./admin_register_voter.php" style="color:white; background-color:blue;">ADD User</a></b></button>
				<tr>
					<th >Id</th>
					<th > ID.NUMBER</th>
					<th >COUNTY</th>
					<th >CONSTITUENCY</th>
					<th >WARD</th>
					<th >POLLING STATION</th>
					<th >FULL NAME</th>
                    <th  colspan="2">OPT</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'connect.php';
 					$users = $conn->query("SELECT * FROM voter_details order by id asc");
 					
 					while($row= $users->fetch_assoc()):{
						$id=$row['id'];
						$idname=$row['Idnumber'];
						$county=$row['county'];
						$con=$row['constituency'];
						$ward=$row['ward'];
						$station=$row['polling_station'];
						$name=$row['name'];
						$f=$row['id'];


						echo"<td>$id</td>";
						echo"<td>$idname</td>";
						echo"<td>$county</td>";
						echo"<td>$con</td>";
						echo"<td>$ward</td>";
						echo"<td>$station</td>";
						echo"<td>$name</td>";
						echo'<td>
					<a href="delete.php?deleteid='.$f.'">delete</a>
					</td><td>
					<a href="update.php?id='.$id.'">Edit</a>
						</td>';
					}

					
						
					
				 ?>
				 <style>tbody td a{background-color: red;}</style>
				
                    

				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>