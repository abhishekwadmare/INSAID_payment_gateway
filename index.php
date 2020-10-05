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


<div class="container-fluid" style="margin-top: 50px;">

        <!-- this file will show all the available programs -->
        <?php include "includes/programs_provided.php"; ?>

        <!-- this file will generate payment form for selected program -->
        <?php include "includes/payment_forms.php"; ?>

</div>

<!-- Added footer -->
<?php include "includes/footer.php"; ?>

</body>
</html>