<?php
    require_once 'includes/db.php';
    
    if(isset($_POST)){
        $amount = $_POST['amount'];
        $pname = $_POST['pname'];
        $fname = $_POST['fname'];
        $Lname = $_POST['Lname'];
        $email = $_POST['email'];
        $batch = $_POST['batch'];
    } else {
        $amount = "";
        $pname = "";
        $fname = "";
        $Lname = "";
        $email = "";
        $batch = "";
    }



?>


<html lang="en">
    <head>
        <!-- added header -->
        <?php include "includes/header.php"; ?>

    </head>
<body>
    <!-- Following script will decide which form to be selected-->
    <?php include "includes/form_select_script.php"; ?>

    <!-- Added Navbar -->
    <?php include "includes/navbar.php"; ?>


<div class="container" style="margin-top: 50px;">

    <div class="row">
        <div class="alert alert-success">
            <strong>Thank You!</strong> You have successfully registered for the program <strong><?php echo $pname;?></strong>. You will recive a mail within 5 minutes.
        </div>
        </br>

        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Your Name</td>
                    <td><?php echo $fname . " " . $Lname;?></td>
                </tr>
                <tr>
                    <td>Email ID </td>
                    <td><?php echo $email;?></td>
                </tr>
                <tr>
                    <td>Date of Registration</td>
                    <td><?php echo date("d/m/Y");?></td>
                </tr>
                <tr>
                    <td>Program Name</td>
                    <td><?php echo $pname;?></td>
                </tr>
                <tr>
                    <td>Course Batch</td>
                    <td><?php if($batch == '25_October_1005') echo "October 18, 2020";?></td>
                </tr>
                <tr>
                    <td>Amount Paid</td>
                    <td><?php echo $amount/100;?></td>
                </tr>
            </tbody>
        </table>
            <center><a class="btn btn-primary" href="index.php">
                Apply to more Programs
            </a>
        </center>
    </div>

</div>

<!-- Added footer -->
<?php include "includes/footer.php"; ?>

</body>
</html>