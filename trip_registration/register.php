<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Registration</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <h2>Trip Registration Form</h2>
        <form action="query.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" required>
            <label for="departure_date">Departure Date:</label>
            <div class="departure_date-select">
                    <?php $month = array('01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'Saptember','10'=>'October','11'=>'November','12'=>'December');?>
                    <select id="month" name="month" required>
                        <option value="">Month</option>
                        <?php foreach($month AS $key=>$val){?>
                            <option value="<?php echo $key;?>"><?php echo $val;?></option>
                        <?php }?>
                    </select>
                    <select id="day" name="day" required>
                        <option value="">Day</option>
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?php echo sprintf("%02d", $i); ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                    <select id="year" name="year" required>
                        <option value="">Year</option>
                        <?php for ($i = 2024; $i <= 2050; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
            </div>
            <label for="num_of_travelers">Number of Travelers:</label>
            <input type="number" id="num_of_travelers" name="num_of_travelers" min="1" required>
            <input type="hidden" id="hidden" name="action" value="Register"/>
            <button type="submit">Register </button>
        </form>
    </div>
</body>
</html>
