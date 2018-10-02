<?php

include("database/db_conection.php");
$delete_id=$_GET['del'];
$delete_query="delete  from customer WHERE customer_id='$delete_id'";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
    echo "<script>window.open('cusomer.php?deleted=customer has been deleted','_self')</script>";
}

?>