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


<div class="container">
    <h3 style="
        font-family: Helvetica;
        font-size: 22px;
        font-weight: normal;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.27;
        letter-spacing: 0.6px;
        color: #4a4a4a;
    ">Select One Program:</h3>
    
    <div class="row">

        <div class="col-sm-7 colgCDAI" style="border-radius: 5px; border: solid 1px #979797; font-family: Helvetica; font-size: 15px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: normal; letter-spacing: 0.6px; color: #002033;">

            <div class="">
            
                <p style="font-family: Helvetica;font-size: 18px;font-weight: bold;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: 0.6px;color: #002033;display: inline-block;">Global Certificate in Data Science &amp; AI (GCDAI)</p>

                <div class="badge" style="
                    font-family: Helvetica;
                    font-size: 11px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    line-height: normal;
                    letter-spacing: 0.4px;
                    text-align: center;
                    color: #ffffff;
                    background-color: #d0021b;
                    margin-left: 8px;
                ">Most in Demand</div>

                <p style="margin: 0px !important;">No. of Terms: 11 | Duration: 11 Months </p>       
                <p>Term 1: Python &amp; Statistics for Data Science</p>                    
                <p>Term 2: Data Visualization &amp; EDA</p> 
                <p>Term 3: Machine Learning Foundation + Minor Project</p>
                <p>Term 4: Machine Learning Intermediate</p>
                <p>Term 5: Machine Learning Basics for AI (Recap)</p>
                <p>Term 6: Capstone Project + Industry Immersion  </p>
                <p>Term 7: Tensorflow &amp; Keras for AI </p>
                <p>Term 8: Deep Learning Foundation + Minor Project (AI)</p><p>Term 9: Natural Language Processing - I </p>                                     
                <p>Term 10: Computer Vision - I </p>                        
                <p>Term 11: Specialization (Any One): <br>a) Natural Language Processing - II <br> b) Computer Vision - II </p><br>
                

            </div>


            <style>
                input[type="checkbox"] {
                    width: 40px;
                    height: 40px;
                    border-radius: 5px;
                    border: solid 2px #002033;
                    background-color: #ffffff;
                }
            </style>

            <div class="col-sm-1 selectoption">
                <div class="form-group">
                    <label for="AI">Select</label>
                    <br>
                    <input id="AIchecbox" type="checkbox" value="" style="background-color: #ffffff;">
                </div>
            </div>
        </div>
    
        <div class="col-xs-4 ordersummary" style="width: 365px; height: 385px; border-radius: 5px; border: solid 1px #979797;">
    
            <p style="margin-top: 10px !important; color: #9b9b9b;">Program Selected:</p>
            <p style="margin: 0px !important; color: #002033; font-family: Helvetica; font-size: 15px; font-style: normal; font-stretch: normal; font-weight: bold;" id="ProgramName"></p>
            <p style="color: #9b9b9b; display: inline-block; font-size: 14px;">Reserve your seat: </p>
            <p style="display: -webkit-inline-box; color: #002033;">INR 3000</p>
            
            <!-- we will add the payment gatway in this given below 4 forms only!!!! -->
            <form onclick="myForm()" id="form" action="/action_page.php">
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
                <button style="width: 320px; height: 43.5px; border-radius: 5px; box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.5); border: solid 3px #f5a623; background-image: linear-gradient(to bottom, #fad961, #f76b1c);">
                    <b style="font-family: Helvetica; font-size: 17px; font-weight: bold; font-style: normal; font-stretch: normal; line-height: 1.6; letter-spacing: 0.6px; text-align: center; color: #0a406b;">
                        Reserve My Seat with Scholarship 
                    </b>
                </button>
            </form>    
 
            <form method="POST" id="AIform" action="thankyou_3k_AI.php" style="display: none;">
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
                        <!-- <option value="April">April 6th 2019</option> -->
                        <!-- <option value="May">May 4th 2019</option> -->
                        <!-- <option value="June">June 8th 2019</option> -->
                    </select>
                </div>
                <!-- <h6>By clicking Reserve My Seat with Scholarship, you agree to our <a href="https://www.insaid.co/admissions-policy/" target="_blank">terms and conditions</a> and our <a href="https://www.insaid.co/privacypolicy/" target="_blank">privacy policy</a>.</h6> -->


                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_eaJXEuTXfi0Ltf"
                    data-amount="300000"
                    data-buttontext="Reserve My Seat with Scholarship"
                    data-name="INSAID"
                    data-description="Registration fee for GCDAI"
                    data-image="https://www.insaid.co/wp-content/uploads/2018/07/logo.png"
                    data-prefill.name=""
                    data-prefill.email=""
                    data-theme.color="#168AFA"
                ></script>

                <input type="hidden" value="Hidden Element" name="hidden">

            </form>

            <form method="POST" id="GCDform" action="thankyou_3k_GCD.php" style="display: none;">
                
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
                
                <!-- <h6>By clicking Reserve My Seat with Scholarship, you agree to our <a href="https://www.insaid.co/admissions-policy/" target="_blank">terms and conditions</a> and our <a href="https://www.insaid.co/privacypolicy/" target="_blank">privacy policy</a>.</h6> -->
                
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_eaJXEuTXfi0Ltf"
                    data-amount="300000"
                    data-buttontext="Reserve My Seat with Scholarship"
                    data-name="INSAID"
                    data-description="Registration fee for GCD"
                    data-image="https://www.insaid.co/wp-content/uploads/2018/07/logo.png"
                    data-prefill.name=""
                    data-prefill.email=""
                    data-theme.color="#168AFA"
                ></script>
                
                <input type="hidden" value="Hidden Element" name="hidden">
            </form>

            <form method="POST" id="CDFform" action="thankyou_3k_CDF.php" style="display: none;">

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

                <!-- <h6>By clicking Reserve My Seat with Scholarship, you agree to our <a href="https://www.insaid.co/admissions-policy/" target="_blank">terms and conditions</a> and our <a href="https://www.insaid.co/privacypolicy/" target="_blank">privacy policy</a>.</h6> -->
                
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_eaJXEuTXfi0Ltf"
                    data-amount="300000"
                    data-buttontext="Reserve My Seat with Scholarship"
                    data-name="INSAID"
                    data-description="Registration fee for CDF"
                    data-image="https://www.insaid.co/wp-content/uploads/2018/07/logo.png"
                    data-prefill.name=""
                    data-prefill.email=""
                    data-theme.color="#168AFA"
                ></script>

                <input type="hidden" value="Hidden Element" name="hidden">

            </form>

        </div>

    </div>
     
    <div class="row">
        
        <div class="col-sm-7 gcdspacer" style="border-radius: 5px;border: solid 1px #979797;font-family: Helvetica;font-size: 15px;font-weight: normal;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: 0.6px;color: #002033;">
   
            <div class="">
                <p style="display: inline-block;font-family: Helvetica;font-size: 20px;font-weight: bold;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: 0.6px;color: #002033;">
                    Global Certificate in Data Science (GCD)
                </p>

                <div class="badge" style="font-family: Helvetica; font-size: 14px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: normal; letter-spacing: 0.4px; text-align: center; color: #ffffff; margin-left: 35px; background-color: #4a90e2;">
                    Most Popular
                </div>

                <p style=" margin: 0px !important;">
                    No. of Terms: 6 | Duration: 6 Months 
                </p>
    
                <p>Term 1: Python &amp; Statistics for Data Science</p>
                <p>Term 2: Data Visualization &amp; EDA</p> 
                <p>Term 3: Machine Learning Foundation + Minor Project</p>
                <p>Term 4: Machine Learning Intermediate</p>
                <p>Term 5: Machine Learning - Advanced (Elective -1)<br></p>
                <p style=""> Exploratory Data Analytics with R (Elective -2)</p>
                <p style=""> Data Visualization with Tableau (Elective -3)</p>
                <p style="">Term 6: Capstone Project &amp; Industry Immersion</p>
                <br>
            </div>

            <div class="col-sm-1 selectoption1" >
                <div class="form-group">
                    <label for="GCD">Select</label>
                    <br>
                    <input id="GCDchecbox" type="checkbox" value="" style="background-color: #ffffff;">
                </div>
            </div>
        </div>

        <div class="col-xs-4 ordersummari" style="width: 365px; border-radius: 5px; background-color: rgba(74, 144, 226, 0.1); border: solid 1px #979797;">
     
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-3" style="">
                    <img class="mobspeak" src="https://www.insaid.co/wp-content/uploads/2018/11/kali.png" style="width: 78px;height: 78px;border-radius: solid 3px #002033;">
                </div>
        
                <div class="col-md-9">

                    <p style="font-family: Helvetica;
                        font-size: 14px;
                        font-weight: normal;
                        font-style: normal;
                        font-stretch: normal;
                        letter-spacing: 0.4px;
                        color: #0a406c;
                        padding: 1rem 1rem 1rem 0;
                        float: left;
                        display: flex;
                        justify-content: center;
                        line-height: 2.75rem;
                        margin-top: -10px !important;
                        margin: 0px !important;
                        font-style: oblique;    text-align: right;">

                        “In class interaction with Faculty is simply Amazing”

                    </p>

                    <p style="text-align: right;width: 200.1px;margin-left: 20px !important;font-weight: bold;"> 
                        Kali Pandey,Wipro 
                        <br>  
                        GCD, August'18
                    </p> 
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-md-3" style="">
                    <img class="mobspeak" src="https://www.insaid.co/wp-content/uploads/2018/11/suchit.png" style="width: 78px; height: 78px;">
                </div>
                
                <div class="col-md-9">

                    <p style="font-family: Helvetica;
                        font-size: 14px;
                        font-weight: normal;
                        font-style: normal;
                        font-stretch: normal;
                        letter-spacing: 0.4px;
                        color: #0a406c;
                        padding: 1rem 1rem 1rem 0;
                        float: left;
                        display: flex;
                        justify-content: center;
                        line-height: 2.75rem;
                        margin-top: -10px !important;
                        margin: 0px !important;text-align: right;
                        font-style: oblique;">
                        
                        “GCD program is perfect for professionals wanting to become Data leaders of tomorrow”
                    
                    </p>
                    
                    <p style="text-align: right;margin-left: 20px !important;font-weight: bold;width: 200px;">
                        &nbsp;Suchit Majumdar,
                        <br>
                        Chief Data Scientist, INSAID
                    </p> 
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-7 topmargins" style="border-radius: 5px;
            border: solid 1px #979797;
            font-family: Helvetica;
            font-size: 15px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: 0.6px;
            color: #002033;">
            
            <div class="">
                
                <p style="font-family: Helvetica;font-size: 20px;font-weight: bold;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: 0.6px;color: #002033;">
                    Certificate in Data Science Foundation (CDF)
                </p>
                
                <p style="margin: 0px !important;">
                    No. of Terms: 3 | Duration: 3 Months 
                </p>
        
                <p>Term 1: Python &amp; Statistics for Data Science</p>
                <p>Term 2: Data Visualization &amp; EDA</p> 
                <p>Term 3: Machine Learning Foundation</p>
                <p>Minor Project</p>
                <br>
            </div>

            <div class="col-sm-1 selectoption2" >
                <div class="form-group">
                    <label for="CDF">Select</label>
                    <br>
                    <input id="CDFchecbox" type="checkbox" value="" style="background-color: #ffffff;">
                </div>
            </div>
        </div>
        
        <div class="col-xs-4 ordersummary logos" style="width: 350px; border-radius: 5px;">
            <p style="font-family: Helvetica;
                font-size: 26px;
                font-weight: bold;
                font-style: normal;
                font-stretch: normal;
                line-height: normal;
                letter-spacing: 0.8px;
                text-align: center;
                color: #002033;">
                
                Tools Covered
            </p>   
            
            <div class="row" style="margin-top: 40px;margin-bottom: 50px;">
            
                <div class="col-md-3" style="margin-right: 40px;">
                    <img src="https://www.insaid.co/wp-content/uploads/2018/11/1200px-Python.svg.png" style="width: 78px; height: 78px;">
                </div>
                
                <div class="col-md-3" style="margin-right: 40px;">
                    <img src="https://www.insaid.co/wp-content/uploads/2018/11/2000px-R_logo.svg.png" style="width: 78px; height: 78px;">
                </div>
                
                <div class="col-md-3" style="">
                    <img src="https://www.insaid.co/wp-content/uploads/2018/11/q8sc1KuZ_400x400.jpg" style="width: 78px; height: 78px;">
                </div>
            </div>
            
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-12" style="">
                    
                    <p style=" text-align: center;">
                        100% program satisfaction guarenteed!
                        <br>
                        Start your Data Science Journey Today
                    </p>   
                </div>
            </div>
        </div>
    </div>
            <!-- <p style="-->
            <!--    font-family: Helvetica;-->
            <!--    font-size: 16px;-->
            <!--    font-weight: normal;-->
            <!--    font-style: oblique;-->
            <!--    font-stretch: normal;-->
            <!--    letter-spacing: 0.4px;-->
            <!--    color: #4a4a4a;-->
            <!--">*Above mentioned program fee is after applying scholarship excluding GST</p> -->
    <div class="row Nextstepswidth">
        
        <div style=" background: #fff; color: #666; box-shadow: 0 5px 15px rgba(0,0,0,.08); height: 300px; border-radius: 5px; border: solid 1px #979797;" class="spacer">
            <br><br>
            <h3 id="remove_margin" style="margin-left: 30px;text-align: center;">
                What happens Next?
            </h3>
            <br><br><br><br>
        
            <div id="remove_margin" class="column mcb-column one column_column  column-margin-10px" style="">

                <div class="stepwizard">
            
                    <div class="stepwizard-row">
            
                        <div class="stepwizard-step">
                            <p style="
                                margin: unset !important;
                                margin-top: -60px !important;
                                font-family: Helvetica;
                                font-size: 50px;
                                font-weight: normal;
                                font-style: normal;
                                font-stretch: normal;
                                line-height: normal;
                                letter-spacing: 0.3px;
                                text-align: center;
                                color: #002033;
                                ">
                                1
                            </p>
                            
                            <button type="button" class="btn btn-primary btn-circle" style="margin-top: -1px !important;"></button>

                            <p>Pay complete program fee or
                                <br>
                                Reserve your seat
                            </p>
                        </div>
                        
                        <div class="stepwizard-step">
                        
                            <p style="
                                margin: unset !important;
                                margin-top: -60px !important;
                                font-family: Helvetica;
                                font-size: 50px;
                                font-weight: normal;
                                font-style: normal;
                                font-stretch: normal;
                                line-height: normal;
                                letter-spacing: 0.3px;
                                text-align: center;
                                color: #002033;
                                ">
                                2
                            </p>
                            
                            <button type="button" class="btn btn-default btn-circle" style="border: solid 3px #d0021b; margin-top: -1px !important;"></button>
                            
                            <p>Complete scholarship application 
                                <br>
                                &amp; pay remaining fee before deadline 
                            </p>
                        </div>
                        
                        <div class="stepwizard-step">
                        
                            <p style="
                                margin: unset !important;
                                margin-top: -60px !important;
                                font-family: Helvetica;
                                font-size: 50px;
                                font-weight: normal;
                                font-style: normal;
                                font-stretch: normal;
                                line-height: normal;
                                letter-spacing: 0.3px;
                                text-align: center;
                                color: #002033;
                                ">
                                3
                            </p>
                            
                            <button type="button" class="btn btn-default btn-circle" style="border: solid 3px #7ed321;    margin-top: -1px !important;"></button>
                            
                            <p>Start your pre program prep with <br> Python &amp; Statistics Starter Kit</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 spacer exvalues" style="border-radius: 5px;border: solid 1px #979797;font-family: Helvetica;font-size: 15px;font-weight: normal;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: 0.6px;color: #002033;">
            
            <p style="font-family: Helvetica;font-size: 20px;font-weight: bold;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: 0.6px;color: #002033;text-align: center;">
                What’s Included
            </p>
            
            <div style="border: solid 1px #002033; width: 141px; margin-left: 34%; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);"> </div>

            <div style="margin-left: 50px;margin-right: 50px;">
                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style="width: 20px; height: 30px; display: inline-block;">

                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    ">
                    1 Year access to Learning Centre
                </p> 
            </div>
        
            <div style="margin-left: 50px; margin-right: 50px;">

                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style=" width: 20px; height: 30px; display: inline-block; ">
            
                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    ">
                    1 Year access to Career Centre
                </p> 
            </div>
            
            <div style="margin-left: 50px;"> 
                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style="width: 20px; height: 30px; display: inline-block;"> 
                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    ">
                    2 Year access to Industry Immersion
                </p>   
            </div>

            <div style="margin-left: 50px; margin-right: 50px;">

                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style="width: 20px; height: 30px; display: inline-block;">
                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    ">
                    2 Year access to Community
                </p> 
            </div>
            <div style="margin-left: 50px;">
                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style="width: 20px; height: 30px; display: inline-block; position: absolute;">
                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    position: static;
                    margin-left: 20px !important;
                    ">
                    Placement assistance with social profile 
                    <br>
                    evaluation 
                    <br>
                    - LinkedIn
                    <br>
                    -GitHub
                    <br>
                    -Resume Workshop
                </p> 
            </div>
            
            <div style="margin-left: 50px; margin-right: 50px;"> </div>
        </div>

        <div class="col-sm-5 ordersummarys spacer" style="border-radius: 5px; border: solid 1px #979797; min-height: 399px; ">
            <p style="
                font-family: Helvetica;
                font-size: 20px;
                font-weight: bold;
                font-style: normal;
                font-stretch: normal;
                line-height: normal;
                letter-spacing: 0.6px;
                text-align: center;
                color: #002033;
                ">
                Exclusive Value Adds You can’t miss!
            </p>

            <div style="
                border: solid 1px #002033;
                width: 235px;
                margin-left: 24%;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
                ">
            </div>
            
            <div style="">

                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style=" width: 20px; height: 30px; display: inline-block; position: absolute; margin-top: 10px; ">    

                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    position: static;
                    margin-left: 20px !important;
                    padding: 1px 10px;
                    ">
                    FREE Upgrade: From 1 year to LIFETIME access to Learning Centre
                </p> 
            </div>
        
            <div style="">

                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style="width: 20px; height: 30px; display: inline-block; position: absolute; margin-top: 10px; ">

                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    position: static;
                    margin-left: 20px !important;
                    padding: 1px 10px;
                    ">
                    FREE Upgrade: From 1 year to LIFETIME access to Career Centre
                </p>     
            </div>

            <div style="">

                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style=" width: 20px; height: 30px; display: inline-block;">
        
                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    ">
                    FREE Upgrade: LIFETIME access to Community
                </p> 

            </div>

            <div style="">

                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style="width: 20px; height: 30px; display: inline-block;">
        
                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    ">
                    FREE Upgrade: Get to attend all Optional terms

                </p> 

        
            </div>
            
            <div style="">

                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style="width: 20px; height: 30px; display: inline-block; ">

                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    ">
                    FREE Booster: Get to attend all electives
                </p> 

            </div>

            <!--<div style="-->
            <!--">-->

                <!--<img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style="-->
                <!--    width: 20px;-->
                <!--    height: 30px;-->
                <!--    display: inline-block;-->
                <!--    ">-->
                    

                <!--<p style="-->
                <!--    font-family: Helvetica;-->
                <!--    font-size: 14px;-->
                <!--    font-weight: normal;-->
                <!--    font-style: normal;-->
                <!--    font-stretch: normal;-->
                <!--    letter-spacing: 0.4px;-->
                <!--    color: #0a406c;-->
                <!--    display: inline-block;-->
                <!--    justify-content: center;-->
                <!--">FREE Booster: 1 batch transfer-->

                <!--</p> -->
            
                <!-- </div>-->
            <div style=" ">

                <img src="https://image.flaticon.com/icons/svg/1244/1244040.svg" style="width: 20px; height: 30px; display: inline-block; ">
            

                <p style="
                    font-family: Helvetica;
                    font-size: 14px;
                    font-weight: normal;
                    font-style: normal;
                    font-stretch: normal;
                    letter-spacing: 0.4px;
                    color: #0a406c;
                    display: inline-block;
                    justify-content: center;
                    ">
                    FREE Booster: Flexibility to repeat 2 terms
                </p> 

            </div>
        </div>
    </div>
</div>

<!-- Added footer -->
<?php include "includes/footer.php"; ?>

</body>
</html>