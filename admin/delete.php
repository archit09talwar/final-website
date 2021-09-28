<?php 
include("index.php");
 $conn   =mysqli_connect("localhost","root","");
mysqli_select_db($conn,"burger");
$delete_id=$_GET['del'];
$delete_query="delete from productnew where P_Id='$delete_id'";
 if(mysqli_query($conn, $delete_query))
    {
        echo "<script>
        alert('post has been deleted ');
        </script>";
        echo "<script>window.open('index.php?view','_self')</script>";
    }
?>