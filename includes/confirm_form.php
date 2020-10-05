<!-- payment details confirmation form!!!-->
<?php

    require_once 'razorpay-php/Razorpay.php';

    use Razorpay\Api\Api;
    $keyId = 'rzp_test_mZNzawpicVOX3V';
    $secretKey = 'KK5EOBYgQlRqBlMvCEW8BSpl';
    $api = new Api($keyId, $secretKey);

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
    // To create order to RazorPay
    $order = $api->order->create(array(
        'receipt' => rand(1000,9999).'ORD',
        'amount' => $amount,
        'payment_capture' => 1,
        'currency' => 'INR',
        )
    );

?>
            
            
        <div class="col-sm-4 col-sm-offset-4" style="width: 365px; height: 385px; border-radius: 5px; border: solid 1px #979797;">
                
            <p> <span style="margin-top: 10px !important; color: #9b9b9b;">Program Selected : </span> </p>
            <p style="margin: 0px !important; color:  #002033; font-family: Helvetica; font-size: 15px; font-style: normal; font-stretch: normal; font-weight: bold;" id="ProgramName"><?php echo $pname; ?></p>
            <p style="color: #9b9b9b; display: inline-block; font-size: 14px;">Reserve your seat: </p>
            <p style="display: -webkit-inline-box; color: #002033;"><?php echo $amount/100; ?></p>

            <!-- this form will get activated after GCDAI course is selected -->
            <form method="POST" action="success.php">

                <input type="hidden" value="<?php echo $amount;?>" name="amount">
                <input type="hidden" value="<?php echo $pname;?>" name="pname">      

                <div class="form-group">
                    <input value="<?php echo $fname; ?>" type="text" class="form-control"  placeholder="Enter First Name" name="fname" id="fname" required>
                </div>

                <div class="form-group">
                    <input value="<?php echo $Lname; ?>" type="text" class="form-control"  placeholder="Enter Last Name" name="Lname" id="Lname" required>
                </div>

                <div class="form-group">
                    <input value="<?php echo $email; ?>" type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>

                <div class="form-group">
                    <select id="batch" name="batch" required="" style="color: #626262;" class="form-control">
                        <option value="" disabled="">Select batch </option>
                        <option value='25_October_1005' <?php if($batch=="25_October_1005") echo "selected";  ?>>October 18, 2020</option>                   
                    </select>
                </div>
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="<?php echo $keyId;?>"
                    data-amount="<?php echo $order->amount;?>"
                    data-currency="INR"
                    data-order_id="<?php echo $order->id;?>"
                    data-buttontext="Reserve My Seat with Scholarship"
                    data-name="INSAID"
                    data-description="Registration fee for <?php echo $pname;?>"
                    data-image="https://www.insaid.co/wp-content/uploads/2018/07/logo.png"
                    data-prefill.name="<?php echo $fname . " " . $Lname ;?>"
                    data-prefill.email="<?php echo $email;?>"
                    data-theme.color="#168AFA"
                ></script> 
 
                <input type="hidden" value="Hidden Element" name="hidden">

            </form>

        </div>