<script>   
    function myForm() {    
        alert("select any program")
    }
</script>

<script>
    $(document).on('click', 'input[type="checkbox"]', function() {      
        $('input[type="checkbox"]').not(this).prop('checked', false);      
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#AIchecbox").click(function () {
            if ($(this).is(":checked")) {
                $("#AIform").show();
                $("#ProgramName").text("Global Certificate in Data Science & AI");
				$("#GCDform").hide();
				$("#CDFform").hide();
                $("#form").hide();
            } else {
                $("#AIform").hide();
                $("#form").show();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#GCDchecbox").click(function () {
            if ($(this).is(":checked")) {
                $("#ProgramName").text("Global Certificate in Data Science");
                $("#GCDform").show();
				$("#AIform").hide();
				$("#CDFform").hide();
                $("#form").hide();
            } else {
                $("#GCDform").hide();
                $("#form").show();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#CDFchecbox").click(function () {
            if ($(this).is(":checked")) {
                $("#ProgramName").text("Certificate in Data Science Foundation");
                $("#CDFform").show();
				$("#AIform").hide();
				$("#GCDform").hide();
                $("#form").hide();
            } else {
                $("#CDFform").hide();
                $("#form").show();
            }
        });
    });
</script>