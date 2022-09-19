<?php
include('./db_config.php');
// if($_SERVER['REQUEST_METHOD']==="POST"){
    if(isset($_POST['update'])){
        $new_id = $_POST['id'];
        $new_name = $_POST['todo'];

        $sql ="UPDATE `todo_list` SET `name` = '$new_name' WHERE `todo_list`.`id` = '$new_id'";
        echo "name is changed to ".$new_name;
        $query_run = mysqli_query($conn, $sql);

        if($query_run)
        {
            $_SESSION['status'] = "Data Updated Successfully";
            header("Location: index.php");
        }
        else
        {
            $_SESSION['status'] = "Not Updated";
            // header("Location: index.php");
        }
    }
    if(isset($_POST['save'])){
    $todo_item= $_POST['todo'];
    echo "You have enter the following text: <br>". $todo_item. "  to the list";

    $sql ="insert into todo_list (`name`) values ('$todo_item')";
    $result=$conn->query($sql);
    header ('location:index.php');
    }
    if(isset($_POST['remove'])){
        $new_id = $_POST['id'];
        // $new_name = $_POST['todo'];

        $sql ="DELETE FROM `todo_list` WHERE `todo_list`.`id` ='$new_id'";
        echo "name is changed to ".$new_name;
        $query_run = mysqli_query($conn, $sql);

        if($query_run)
        {
            $_SESSION['status'] = "Data Deleted Successfully";
            header("Location: index.php");
        }
        else
        {
            $_SESSION['status'] = "Not Deleted";
            // header("Location: index.php");
        }
    }
// }
 ?>