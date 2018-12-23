<?php
$name=$_POST['name'];
$npassword=$_POST['password'];

$startY=$_POST['startY'];
$startM=$_POST['startM'];
$startD=$_POST['startD'];
$endY=$_POST['endY'];
$endM=$_POST['endM'];
$endD=$_POST['endD'];
echo $name;
echo "<br>";
echo $npassword;
echo "<br>";

$bDate="{$startY}-{$startM}-{$startD}";
$fDate="{$endY}-{$endM}-{$endD}";


require_once 'Connection.php';

// подключаемся к серверу
$link = mysqli_connect($host, $user, "", $database)
    or die("Ошибка " . mysqli_error($link));
//$log="Kaede";
//$pas=431424;
//$dis="sty";
//$date1="2018-12-15";
//$date2="2018-12-24";

$query ="SELECT * FROM logins WHERE Name='$name' AND Password='$npassword' AND Start='$bDate' AND End='$fDate'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "Выполнение запроса прошло успешно";
}

while( $row = mysqli_fetch_assoc($result) ){
        printf("%s (%s)\n", $row['Name'], $row['Disease']);
        $outName=$row['Name'];
        $outDisease= $row['Disease'];
        $outSDate=$row['Start'];
        $outEDate=$row['End'];
    }

mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="Colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Medical</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">=
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

    <!-- Start Header Area -->
    <header class="default-header">
      <div class="container">
        <div class="header-wrap">
          <div class="header-top d-flex justify-content-between align-items-center">
            <div class="logo">
              <a href="#home"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="main-menubar d-flex align-items-center">

              <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Area -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="container">
          <div class="row fullscreen align-items-center justify-content-center">
            <div class="banner-content col-lg-6 col-md-12">
              <h1 class="text-uppercase">
                Certificate Service
              </h1>
            </div>
            <div class="col-lg-6 d-flex align-self-end img-right">
              <img class="img-fluid" src="img/header-img.png" alt="">
            </div>
          </div>
      </div>
    </section>

    <section class="about-area" id="appoinment">
      <div class="container-fluid">
        <div class="row d-flex justify-content-end align-items-center">
          <div class="col-lg-6 col-md-12 about-left no-padding">
            <img class="img-fluid" src="img/about-img.jpg" alt="">
          </div>
          <div class="col-lg-6 col-md-12 about-right no-padding">
            <h1>Your <br> request</h1>



            <form class="booking-form" id="myForm" >
                <div class="row">
                  <div class="col-lg-12 d-flex flex-column">
                   <label ><?php try{echo $outName;}catch(Exception $e){echo "Your request Denied!";} ?></label>
                  </div>
                  <div class="col-lg-6 d-flex flex-column">
                    <label ><?php echo $outSDate; ?></label>
                  </div>
                  <div class="col-lg-6 d-flex flex-column">
                    <label ><?php echo $outEDate; ?></label>
                  </div>
                  <div class="col-lg-12 flex-column">
                    <label ><?php echo $outDisease; ?></label>
                  </div>

                  <div class="col-lg-12 d-flex justify-content-end send-btn">
                    <label><?php if($outName==$row['Name'] && $outDisease==$row['Disease'] && $outSDate==$row['Start'] && $outEDate==$row['End']){

                      echo "Reques Denied!";
                    }else{
                      echo "Your request is successful.Wait message in mail.";
                    }
                     ?></label>
                  </div>

                  <div class="alert-msg"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End about Area -->

    <!-- Start consultans Area -->

    <!-- End consultans Area -->

    <!-- Start fact Area -->
    <section class="facts-area pt-100 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 single-fact">
            <h2 class="counter">3024</h2>
            <p class="text-uppercase">Certificates issued</p>
          </div>
          <div class="col-lg-3 col-md-6 single-fact">
            <h2 class="counter">6048</h2>
            <p class="text-uppercase">Total patients</p>
          </div>
          <div class="col-lg-3 col-md-6 single-fact">
            <h2 class="counter">2000</h2>
            <p class="text-uppercase">Expiration date is out</p>
          </div>
          <div class="col-lg-3 col-md-6 single-fact">
            <h2 class="counter">1024</h2>
            <p class="text-uppercase">Denied</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end fact Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 pb-30 header-text">
            <h1>Attention</h1>
            <p>
              Below are the rules<br>for issuing certificates
            </p>
          </div>
        </div>
        <div class="row">
          <div class="single-blog col-lg-4 col-md-4">

            <img class="f-img img-fluid mx-auto" src="img/Okey.jpg" alt="">
            <h4>
              <a href="#">Blank must be filled correctly</a>
            </h4>
            <p>
              If you will write incorrect information,system can not find you in Database.
            </p>

          </div>
          <div class="single-blog col-lg-4 col-md-4">
            <img class="f-img img-fluid mx-auto" src="img/Valid.png" alt="">
            <h4>
              <a href="#">Certificate must be valid</a>
            </h4>
            <p>
              The request will be satisfied if you certificate valid now.
            </p>

          </div>
          <div class="single-blog col-lg-4 col-md-4">
            <img class="f-img img-fluid mx-auto" src="img/Registered.jpg" alt="">
            <h4>
              <a href="#">You must be registered in Database</a>
            </h4>
            <p>
             If you was not in our Database,it means you did not use our service.
            </p>

          </div>
        </div>
      </div>
    </section>
    <!-- end blog Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2  col-md-6">

          </div>
          <div class="col-lg-4  col-md-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Contact Us</h6>
              <p>
                11/5, Asil Arman,Kaskelen
              </p>
              <h3>87086337485</h3>
              <h3>87015257484</h3>
            </div>
          </div>

        </div>


      </div>
    </footer>
    <!-- End footer Area -->


  </body>
</html>
