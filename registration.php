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
				 	<td><?php echo $row['Polling_station'] ?></td>
					
				 	
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>
<script>
	