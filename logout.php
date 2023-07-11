<?php
session_start();
session_destroy();
header("location:login.php")
?>
<script language="javascript">
    alert("Logged out");
window.location="home.php";
</script>