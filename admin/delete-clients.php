<?php 
include("connection.php");
if(isset($_GET['deleteId'])){
    $id=$_GET['deleteId'];
    $delete_query="delete from clients where No='$id'";
    $result=mysqli_query($connect,$delete_query);
    if($result){
      header("Location:clients.php");
    }else{
        echo mysqli_error($connect); 
    }
}
?>