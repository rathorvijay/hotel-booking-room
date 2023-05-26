<?php

$server="localhost:3307";
$user="root";
$password="";
$db="vjwebsite";
session_start();
$conn=mysqli_connect($server,$user,$password,$db);
if(!$conn)
{
?>
<script>
    alert("connectin fail");
</script>
<?php
}

?>