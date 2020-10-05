        <!-- we will add the payment gatway in this given below 4 forms only!!!! -->
            
            
        <div class="col-sm-4" style="width: 365px; height: 385px; border-radius: 5px; border: solid 1px #979797;">
    
            <p style="margin-top: 10px !important; color: #9b9b9b;">Program Selected:</p>
            <p style="margin: 0px !important; color: #002033; font-family: Helvetica; font-size: 15px; font-style: normal; font-stretch: normal; font-weight: bold;" id="ProgramName"></p>
            <p style="color: #9b9b9b; display: inline-block; font-size: 14px;">Reserve your seat: </p>
            <p style="display: -webkit-inline-box; color: #002033;">INR 3000</p>


            <!-- this form will be active by default -->
            <form onclick="myForm()" id="form" action="#">
                <div class="form-group"> 
                    <input type="text" class="form-control" id="Firstname" placeholder="Enter First Name" name="fname" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="Lname" placeholder="Enter Last Name" name="Lname" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
            
                <div class="form-group">

                    <select id="batch" name="batch" required="" style="color: #626262;" class="form-control">
                        <option value="" disabled="" selected="">Select batch </option>
                        <option value='25_October_1005'>October 18, 2020</option>
                    </select>
                </div>
                
                <!-- <h6>By clicking Reserve My Seat with Scholarship, you agree to our <a href="https://www.insaid.co/admissions-policy/" target="_blank">terms and conditions</a> and our <a href="https://www.insaid.co/privacypolicy/" target="_blank">privacy policy</a>.</h6> -->
                <button class="btn btn-primary form-control">
                        Reserve My Seat with Scholarship 
                </button>
            </form>    


            
            <!-- this form will get activated after GCDAI course is selected -->
            <form method="POST" id="AIform" action="payment_form_confirm.php" style="display: none;">
                <input type="hidden" value="300000" name="amount">
                <input type="hidden" value="86,000" name="remainingfee">
                <input type="hidden" value="Global Certificate in Data Science & AI" name="pname">

                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Enter First Name" name="fname" id="fname" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Enter Last Name" name="Lname" id="Lname" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>

                <div class="form-group">
                    <select id="batch" name="batch" required="" style="color: #626262;" class="form-control">
                        <option value="" disabled="" selected="">Select batch </option>
                        <option value='25_October_1005'>October 18, 2020</option>                   
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" name="" value="Reserve My Seat with Scholarship">
                </div>         

            </form>


            
            <!-- this form will get activated after GCD course is selected -->
            <form method="POST" id="GCDform" action="payment_form_confirm.php" style="display: none;">
                
                <input type="hidden" value="56,000" name="remainingfee">
                
                <input type="hidden" value="300000" name="amount">
                
                <input type="hidden" value="Global Certificate in Data Science" name="pname">

                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Enter First Name" name="fname" id="fname" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Last Name" name="Lname" id="Lname" required>
                </div>

                <div class="form-group">
      
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                
                <div class="form-group">
                    <select id="batch" name="batch" required="" style="color: #626262;" class="form-control">
                        <option value="" disabled="" selected="">Select batch </option>
                        <option value='25_October_1005'>October 18, 2020</option>      
                        <!-- <option value="April">April 6th 2019</option> -->
                        <!-- <option value="May">May 4th 2019</option> -->
                        <!-- <option value="June">June 8th 2019</option> -->
                    </select>
                </div>
                
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" name="" value="Reserve My Seat with Scholarship">
                </div>
            </form>

            
            <!-- this form will get activated after CDF course is selected -->
            <form method="POST" id="CDFform" action="payment_form_confirm.php" style="display: none;">

                <input type="hidden" value="26,000" name="remainingfee">
            
                <input type="hidden" value="300000" name="amount">
        
                <input type="hidden" value="Certificate in Data Science Foundation" name="pname">

                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Enter First Name" name="fname" id="fname" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Enter Last Name" name="Lname" id="Lname" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>

                <div class="form-group">
                    <select id="batch" name="batch" required="" style="color: #626262;" class="form-control">
                        <option value="" disabled="" selected="">Select batch </option>
                        <option value='25_October_1005'>October 18, 2020</option>    
                    </select>
                </div>
               
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" name="" value="Reserve My Seat with Scholarship">
                </div>

            </form>
            
        </div>