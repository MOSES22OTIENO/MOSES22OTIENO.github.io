<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | display data</title>
    <style>
        th{
            color: white;
            font-size: 30px;
            background-color: black;

        }
    </style>
</head>
<body>
    <?php
$connect = mysqli_connect("localhost", "root", "mysql@22otieno.");
$db = mysqli_select_db($connect, 'secure_e_voting_system');

$query = "select * from voter_details";
$query_run = mysqli_query($connect, $query);
?>
  <table>
    <thead>

    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>COUNTY</th>
        <th colspan="2">option</th>
      

    </tr>
    </thead>

  
<?php


if ($query_run)
{
    
    while($row = mysqli_fetch_array($query_run))
    
    {
      ?>
      <tbody>
        <tr>
            <th> <?php echo $row['id'] ?></th>
            <th> <?php echo $row['name'] ?></th>
            <th> <?php echo $row['county'] ?></th>
            <th><a href="">Edit</a></th>
            <th><a href="">delete</a></th>
           
        </tr>
      </tbody>
      <?php }


    }
else
{

    echo "No records found";
}

?>

</body>
</html>