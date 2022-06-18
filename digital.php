<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27ae433552.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="header_section"><?php require "include/header1.php"; ?></div>
<!-- GMAT Slider -->
<div class="gmat_slider_div">
    <img src="images/courses/courses_breakdown/digi.png" alt="">
</div>

<!-- Classes -->
<div class="gmat_body">
    <div class="classes_list"><br>
        <div class="physical_class"><br>
            <h3>PHYSICAL CLASSES</h3>
            <p class="time_frame">3 Month Tuition:</p>
            <p><span class="figure">60,000 NGN</span><br><br>
            <small>*60% For First Installment.</small><br><br>
            <button class="fees_button_uiux">Pay</button></p><br>
            <hr>
        </div>
        

        <div class="physical_class"><br>
            <h3>ONLINE CLASSES</h3>
            <p class="time_frame">3 Month Tuition:</p>
            <p><span class="figure">20,000 NGN</span><br><br>
            <small></small><br><br>
            <button class="fees_button_uiux">Pay</button></p><br>
        </div>
    </div>



    <div>
    <div class="class_schedule" id="schedule">
    <i class="fa-solid fa-calendar-days fa-4x"></i>
        <h3>Check Class Schedule</h3>
    </div>
    <div class="class_schedule" id="outline">
    <i class="fa-solid fa-folder-minus fa-4x"></i>
        <h3>Check Class Schedule</h3>
        </div>
    </div>
</div>
</div>

<!-- Ad section starts -->
<div class="Ad_div">
<button class="Ad_button" id="Ad_button"><i class="fa-solid fa-xmark fa-2x"></i></button>
<img src="images/courses/courses_breakdown/ux.png" alt="">   
</div>
<!-- Ad section ends -->

<!-- second ad -->
<div class="Ad_div_2">
<button class="Ad_button_2" id="Ad_button_2"><i class="fa-solid fa-arrow-left fa-3x"></i></button>
<img src="images/courses/courses_breakdown/outline(digi).png" alt="">   
</div>




   <div class="footer_section"> <?php require "include/footer.php"; ?> </div>


    <script src="javascript/script.js"></script>

</body>
</html>