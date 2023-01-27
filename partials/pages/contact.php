
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php'); 
require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
// $sql = "SELECT * FROM developers";
?>

<section class="contact">
  
    <div class="contact" id="contact-bg">

        <div class="container">

            <div class="contact-top">
                <div class="row">
                <form method = "post">
                    <div class="col-md-4">
                        <h1>Select developers:</h1>
                    </div> 

                    <div class="col-md-2" >
                        <h1><input type = "submit" name = "vova" value = "Вова"></h1>
                    </div>

                    <div class="col-md-2">
                        <h1><input type = "submit" name = "vas" value = "Василь"></h1>
                    </div>

                    <div class="col-md-2">
                        <h1><input type = "submit" name = "kat" value = "Катя"></h1>
                    </div>
                    <form>
                </div>
            </div>
            
            <div class="contact-us">
                <div class="contact-text">
                    <div class="nashi-contacty">
                        <?php
                        if(empty($_POST)) {
                            echo "";
                            } else {
                            if($_POST['vova']){
                                $sql = "SELECT * FROM developers WHERE `id` = 1";
                                };
                            if($_POST['vas']){
                                $sql = "SELECT * FROM developers WHERE `id` = 2";
                                };
                            if($_POST['kat']){
                                $sql = "SELECT * FROM developers WHERE `id` = 3";
                                };
                            }
                        if(empty($_POST)) {
                            echo "";
                            } else {
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                            }
                        ?>
                        <p>My office:</p>
                        <h3><?php 
                        if(empty($_POST)) { ?>
                            <h4 class="text-danger"> <?php echo "select developers to open contacts"; ?></h4>
                            <?php } else {
                                echo $row['d_adres']; 
                            } ?></h3>
                        <hr>
                        
                        <p>Call me:</p>
                        <h3><?php if(empty($_POST)) { ?>
                            <h4 class="text-danger"> <?php echo "виберіть розробника щоб відкрити контакти"; ?> </h4>
                            <?php } else {
                                echo $row['d_tel']; 
                            }?></h3>
                        <hr>

                        <p>Mail me:</p>
                        <h3><?php if(empty($_POST)) { ?>
                            <h4 class="text-danger"> <?php echo "выберите разработчика чтобы открыть контакты"; ?> </h4>
                            <?php } else {
                                echo $row['d_mail']; 
                            } ?></h3>
                        <hr>
                        
                        <p>Follow me:</p>
                    </div>
                <div class="follow-b">
                    <button id="btn-inst"> <a href="<?php echo $row['insta']; ?>" target="_blank"><img src="./assets/image/inst.svg"></a></button>
                    <button id="btn-tg">  <a href="<?php echo $row['telega']; ?>" target="_blank"><img src="./assets/image/telegram.svg"></a></button>
                    <button id="btn-whts"><a href="<?php echo $row['Linced']; ?>" target="_blank"><img src="./assets/image/whatsapp.svg"></a></button>
                    <button id="btn-fb"><a href="<?php echo $row['facebook']; ?>" target="_blank"><img src="./assets/image/facebook.svg"></a></button>
                </div>
            </div>
                <div class="contact-form">
                    <form method="post" action="mailto:alex@itbanda.pro">
                        <h2 class="display-5">Where did we learn this?</h2>
                        <h3>Fill out the form, you will be contacted</h3>

                        <div class="feedback-form">
                            <div class="feedback-short">
                                    <input type="text" class="form-contr" id="name" placeholder="Your Name">
                            </div>
                            <div class="feedback-short">
                                    <input type="email" class="form-contr" id="email" placeholder="Your Email">
                            </div>
                            <div class="feedback-long">                                
                                    <input type="text" class="form-contr" id="subject" placeholder="Subject">
                            </div>
                            <div class="feedback-long">
                                     <textarea class="form-contr" placeholder="Leave a message here" id="message" style="height: 50px"></textarea>                                    
                            </div>
                            <div class="feedback-long">
                                <button class="btn-form btn btn-warning" type="email"><a href="mailto:alex@itbanda.pro" target='_blank"'>Send Message</a></button>
                                <a href="https://courses.itbanda.pro/" target="_blank">It-Banda</a>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</section>