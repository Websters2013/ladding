<?php
if (!empty($_GET)&&!empty($_GET['send_email'])){
    if ($_GET['send_email']=='true'){
        $send='
                <!--feedback__title-->
                <h2 class="feedback-title">אנו נחזור אליך בהקדם<br>פנייתך נשלחה בהצלחה</h2>
                <!--/feedback__title-->';
    }
    else{
        $send='
                <!--feedback__title-->
                <h2 class="feedback-title">Try again later</h2>
                <!--/feedback__title-->';

    }
}

?>


<!DOCTYPE html>
<html>
<html lang="he" dir="rtl">
<meta charset="utf-8" />
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">

<title>Title</title>
<link rel="stylesheet" href="css/main.css" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="site">



            <!--site__content__feedback-->
            <div class="site__content__feedback">

              <?php echo $send; ?>

            </div>
            <!--/site__content__feedback-->


</div>
<!--site__wrap-->

</body>
</html>