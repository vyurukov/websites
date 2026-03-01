<?php
session_start();
require 'functions.php';

$_SESSION['error'] = '';
$_SESSION['msg'] = '';

if($_POST['b_send']){
  $token = $_POST['token'];
  if(isset($_SESSION['token']) and $token == $_SESSION['token']) {
    if(isset($_POST['name'])){$name = filter_str($_POST['name']);}
    if(isset($_POST['phone'])){$phone = filter_str($_POST['phone']);}
    if(isset($_POST['email'])){$email = filter_str($_POST['email']);}
    if(isset($_POST['message'])){$message = filter_str($_POST['message']);}

    if($_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'])){
        if($email == "" or $message == ""){
				$error = "Полетата Имейл и Съобщение са задължителни!";
			}
			else{
				//sent email to the administrator with the text
				$to = "office.rilatex@gmail.com";
				$header = "From: \"Rilatex EOOD\" <contact@rilatex.com>" . "\r\n";
				$subject = "Saobshtenie ot ".$name." - ".$email;
				$body = "Това съобщение е от формата за контакти.\r\n\n "
				."Лична информация: \r\n "
				."\t Име: ".$name." \r\n "
                ."\t Телефон: ".$phone." \r\n\n "
				."\t Имейл: ".$email." \r\n\n "
				."Съобщение: \r\n "
				.$message."\r\n\n"
				."".$name."\r\n ";

				$body .= "-------------------------------------------------------\r\n\n";

				$body .= "Tova e saobshtenie ot formata za kontakti.\r\n\n "
				."Lichna informacia: \r\n "
				."\t Ime: ".$name." \r\n "
                ."\t Telephon: ".$phone." \r\n\n "
				."\t Email: ".$email." \r\n\n "
				."Saobshtenie: \r\n "
				.$message."\r\n\n"
				."".$name."\r\n ";

				if(mail($to, $subject, $body, $header)){$_SESSION['msg'] = "Съобщението беше изпратено успешно!";}
                else{$_SESSION['error'] = "Съобщението не беше изпратено успешно!";}

				$name = "";
				$phone = "";
				$email = "";
				$message = "";
			}
    }
    else{ $_SESSION['error'] = "Грешен код за сигурност. Моля опитайте отново!"; }
  }
}
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Kontakte | Rilatex</title>
    <?php include "meta.php" ?>
</head>
<body>
    <?php include "header.php" ?>
    <!--start main -->
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <div class="contact">
                    <div class="contact_left">
                        <div class="contact_info">
                            <h3>Finde uns</h3>
                                <div class="map">
                                    <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3519.0477515565362!2d23.13206549462859!3d42.12557261090766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14aaf1afec1c97d7%3A0x57c0b355ff6160c0!2sRilatex!5e0!3m2!1sen!2sbg!4v1508835123429" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                        </div>
                        <div class="company_address">
                            <p>Frau Hüsemann</p>
                            <p>Phone:(00) 359 73 88 22 07</p>
                            <div style="height:5px;"></div>
                            <p>Radostina Kostadinova</p>
                            <p>Phone:(00) 359 899 942 958</p>
                            <div style="height:5px;"></div>
                            <p>Email: <a href="mailto:office.rilatex@gmail.com">Office.rilatex(at)gmail.com</a></p>
                            <p>Buchhaltung: <a href="mailto:rilateks@b-trust.org">rilateks(at)b-trust.org</a></p>
                       </div>
                    </div>
                    <div class="contact_right">
                      <div class="contact-form">
                        <?php
                            if($_SESSION['error'] != ''){
                              echo('<div class="alert alert-danger alert-dismissable">');
                                echo('<div style="color:darkred;">'.$_SESSION['error'].'</div>');
                                $_SESSION['error'] = '';
                              echo('</div>');
                            }
                            if($_SESSION['msg'] != ''){
                              echo('<div class="alert alert-success">');
                                echo('<div style="color:#308BC4;">'.$_SESSION['msg'].'</div>');
                                $_SESSION['msg'] = '';
                              echo('</div>');
                            }
                            ?>
                          <h3>Kontaktieren Sie uns direkt</h3>

                            <form method="post" action="#">
                                 <?php
                                    $token = $_SESSION["token"] = md5(rand(time (), true)) ;
                                    echo('<input type="hidden" name="token" value="'.$token.'">');
                                  ?>
                                <div>
                                    <span><label>NAME</label></span>
                                    <span><input name="name" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>E-MAIL</label></span>
                                    <span><input name="email" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>TELEFON</label></span>
                                    <span><input name="phone" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>SUBJECT</label></span>
                                    <span><textarea name="message"> </textarea></span>
                                </div>
                                <div>
                                    <span><label>Security Code</label></span>
                                    <span><input name="security_code" type="text" class="textbox" maxlength="4"></span>
                                    <img src='captchaimages.php?width=80&height=30&characters=4' />
                                </div>
                               <div>
                                    <span><input type="submit" name="b_send" value="Absenden"></span>
                              </div>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                  </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>