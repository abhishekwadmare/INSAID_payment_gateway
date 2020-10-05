<?php 
require_once 'includes/db.php';
if(isset($_POST)){
    $amount = $_POST['amount'];
    $pname = $_POST['pname'];
    $fname = $_POST['fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $batch = $_POST['batch'];
    $fullName = $fname . " " . $Lname;
} else {
    $amount = "";
    $pname = "";
    $fname = "";
    $Lname = "";
    $email = "";
    $batch = "";
}


require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";
$keyId = 'rzp_test_mZNzawpicVOX3V';
$keySecret = 'KK5EOBYgQlRqBlMvCEW8BSpl';

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_POST['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

?>


<html lang="en">
    <head>
        <!-- added header -->
        <?php include "includes/header.php"; ?>

    </head>
    <body>

        <!-- Added Navbar -->
        <?php include "includes/navbar.php"; ?>


        <div class="container" style="margin-top: 50px;">

            <div class="row">
                <?php if ($success === true)
                    {
                        $registration_query = "INSERT INTO registrations(name, email, program, course_batch, amount_paid, payment_id, order_id) ";
                        $registration_query .= "VALUES('{$fullName}', '{$email}', '{$pname}', '{$batch}',{$amount},'{$_POST['razorpay_payment_id']}','{$_POST['razorpay_order_id']}')";
                        $registration_query_result = mysqli_query($connection, $registration_query);
                ?>          
                <div class="alert alert-success">
                    <strong>Thank You!</strong> You have successfully registered for the program <strong><?php echo $pname;?></strong>. You will recive a mail within 5 minutes.
                </div>
                </br>

                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <td>Your Name</td>
                            <td><?php echo $fullName;?></td>
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
                        <tr>
                            <td>Payment ID</td>
                            <td><?php echo $_POST['razorpay_payment_id'];?></td>
                        </tr>
                        <tr>
                            <td>Order ID</td>
                            <td><?php echo $_POST['razorpay_order_id'];?></td>
                        </tr>
                    </tbody>
                </table>
                <?php } else {

                    $html = "<p>Your payment failed</p>
                    <p>{$error}</p>";
                    
                    ?>

                <div class="alert alert-danger">
                    <php? echo $html; ?>
                </div>
                <?php } ?>
        
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