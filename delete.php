<?php
include "connect.php";

if (isset($_GET['deleteid'])){
    $see=$_GET['deleteid'];
  



    
    $sql="DELETE FROM voter_details WHERE id='$see' ";
    $result=mysqli_query($conn,$sql);
    if($result){ 
        echo'
        <script>
        alert("record deleted successfully");
        </script>
        ';
        header("location:admin.php?successfull");

    }
    else{
        header("location:admin.php?error=invalid record");
    }
}
else{
    echo"error";
}

?>