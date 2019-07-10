<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PS6SMH6');</script>
    <!-- End Google Tag Manager -->
    <meta name="description" content="JOHNXBLACK IS AN ABSTRACT FUTURIST ARTIST & DESIGNER FROM NEW YORK CITY USA CURRENTLY LIVING IN COPENHAGEN DENMARK">
    <meta name="keywords" content="JOHNXBLACK, JOHN BLACK, MCLIV, AKLO, AKLO91, NEW YORK CITY, NYC, USA, BROOKLYN">
    <meta name="author" content="AKLO91">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>CONTACT JOHNXBLACK ART | OFFICIAL WEBSITE</title>
    <style>
      .error {
        color: #FF0000;
        font-size: 1.5em;
        display: inline;
      }

    </style>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS6SMH6"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <video id="myVideo" autoplay loop muted playsinline align="center">
      <source src="img/background3.mp4">
    </video>
    <div id="homecontainer">
      <div class="header">
        <label for="navtoggle" class="navtogglelabel">
          <span></span>
        </label>
        <div id="navlogo">
          <a href="index.html"><img src="img/johnxblack_emblem.svg" height="48px" /></a>
        </div>
        <input type="checkbox" id="navtoggle" class="navtoggle">
        <nav>
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="artwork.html">ARTWORK</a></li>
            <li><a href="video.html">VIDEO</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </nav>
      </div>
      <div id="homemain" align="center">
        <?php
        // define variables and set to empty values
        $emailErr = $messageErr = "";
        $name = $email = $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["name"]);
          }

          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
          }

          if (empty($_POST["message"])) {
            $comment = "Message is required";
          } else {
            $comment = test_input($_POST["message"]);
          }

        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>
        <div id="contactform" />
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <h1>NAME:</h1>
          <input type="text" name="name"><span class="error"> * <?php echo $nameErr;?></span>
          <h1>EMAIL:</h1>
          <input type="text" name="email"><span class="error"> * <?php echo $emailErr;?></span>
          <h1>MESSAGE:</h1>
          <textarea name="message" rows="10" cols="30"></textarea> <span class="error"> * <?php echo $messageErr;?></span>
            <br><br>
          <input type="submit" value="Submit">
        </form>
        </div>
      </div>
      <div id="homefooter">
        <div id="footrow1">
          <a href="https://www.instagram.com/johnxblack/"><img src="img/instagram.svg" height="40px"/></a> <a href="https://www.youtube.com/user/JClements63"><img src="img/youtube.svg" height="40px"/></a>
          <a href="mailto:john@johnxblack.com"> <img src="img/mail.svg" height="40px"/></a> <a href="tel:1-929-990-5096"><img src="img/iphone.svg" height="40px"></a>
        </div>
        <div id="footrow2">
          <p>COPYRIGHT &copy; JOHNXBLACK 2019. WEBSITE BY <a href="http://aklo91.com">ÅKLØ91</a></p>
        </div>
      </div>
    </div>
  </body>
  <script> </script> <!-- Avoid Chrome bug of CSS Transition on page load -->
</html>
