<?php
include('config/config.php');
echo '<pre>'; print_r($_POST); echo '</pre>'; //die;
if(isset($_POST['action']) && $_POST['action']=='Register'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $destination=$_POST['destination'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    $year=$_POST['year'];
    $departure_date=$month.'-'.$day.'-'.$year;
    $num_of_travelers=$_POST['num-of-travelers'];
    //die;
    echo $sql = "INSERT INTO travller (name, email, phone, destination, departure_date, num_of_travelers) 
    VALUES ('$name', '$email', '$phone', '$destination', '$departure_date', '$num_of_travelers')";

    if (mysqli_query($conn, $sql)) {
        echo "Create successfully ";
        header("location:listing.php");
        exit();
    } else {
        echo "Error creating table: " . mysqli_error($conn);
        header("location:listing.php");
        exit();
    }
}

    if(isset($_GET['action']) && $_GET['action']=='delete_registration'){
        echo $sql = " DELETE FROM travller WHERE id='".$_GET['id']."'"; 
       //die;
        if (mysqli_query($conn, $sql)) {
            echo "Delete successfully ";
            header("location:listing.php");
            exit();
        } else {
            echo "Error creating table: " . mysqli_error($conn);
            header("location:listing.php");
            exit();
        }
    }


    

    if(isset($_POST['action']) && $_POST['action']=='update'){
        $id = $_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $destination=$_POST['destination'];
        $month=$_POST['month'];
        $day=$_POST['day'];
        $year=$_POST['year'];
        $departure_date=$month.'-'.$day.'-'.$year;
        $num_of_travelers=$_POST['num_of_travelers'];
        
        $sql = "UPDATE travller
        SET name = '".$name."', email = '".$email."', phone = '".$phone."', destination = '".$destination."', departure_date = '".$departure_date."', num_of_travelers = '".$num_of_travelers."' 
        WHERE id = '".$id."'";
        //die;
        if (mysqli_query($conn, $sql)) {
            echo "edit successfully ";
            header("location:listing.php");
            exit();
        } else {
            echo "Error creating table: " . mysqli_error($conn);
            header("location:listing.php");
            exit();
        }
    } // <- This closing curly brace was missing in your code

    mysqli_close($conn);
    

    
    
    

?>