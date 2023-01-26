<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php'); 
require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');

  $sql = "SELECT * FROM developers";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>


<section class="home">

    <div class="home" id="home-bg">
        <div class="container">
            <div class="home-person">
                <div class="person-text">
                    <h3>I'm</h3>

                    <h1><?php echo $row['d_name']; ?></h1>

                    <h2 class="typed-text-output d-inline">Web Developer</h2><span class="typed-cursor d-none typed-cursor--blink">|</span>
                    <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer</div>
                    <div class="knopki-play">
                        <a href="#" class="btn-dowload">Download CV</a>
                        <button type="button" class="btn-play" data-src="https://freelancer.itbanda.pro/">
                            <span></span>
                        </button>
                        <h5 class="playv">Play Video</h5>
                    </div>
                </div>
                

                <div class="person-foto">
                    <img src="./assets/image/profile.png">
                </div>
            </div>
        </div>

<style type="text/css" data-typed-js-css="true">
        .typed-cursor{
          opacity: 1;
        }
        .typed-cursor.typed-cursor--blink{
          animation: typedjsBlink 0.7s infinite;
          -webkit-animation: typedjsBlink 0.7s infinite;
                  animation: typedjsBlink 0.7s infinite;
        }
        @keyframes typedjsBlink{
          50% { opacity: 0.0; }
        }
        @-webkit-keyframes typedjsBlink{
          0% { opacity: 1; }
          50% { opacity: 0.0; }
          100% { opacity: 1; }
        }
      </style>
            
    </div>

</section>