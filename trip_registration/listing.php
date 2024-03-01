<?php
include('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Registration</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Trip Registration Form</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Destination</th>
                    <th>Departure Date</th>
                    <th>Number of Travelers</th>
                </tr>
            </thead> 
            <tbody>
            <?php 
            $sql = " SELECT * from travller "; 
            $result = $conn->query($sql);
            $i=1;
            while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
            <td><?php echo $i;?></td>    
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['destination'];?></td> 
                <td><?php echo date ('d-m-Y',strtotime($row['departure_date']));?></td>  
                <td><?php echo $row['num_of_travelers'];?></td> 
                <td><a href="query.php?action=delete_registration&id=<?php echo $row['id'];?>">Delete</a>&nbsp;&nbsp;
                <a href="edit.php?action=edit&id=<?php echo $row['id'];?>">Edit</a></td>  
            </tr>
                <?php $i++; } ?>
         </tbody>
        </table>
    </div>
</body>
</html>
