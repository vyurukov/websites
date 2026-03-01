<?php
    include "functions.php";
    $type = "press";

    if(isset($_GET['type'])){$type = $_GET['type'];}

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
    <title>Production | Rilatex</title>
    <?php include "meta.php" ?>
</head>
<body>
    <?php include "header.php" ?>
    <!--start main -->
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <div class="f_nav" style="width:100%;">
                    <ul style="text-align: center;">
                      <li><a href="production.php?type=press"><span style="color: <?php echo($type == 'press' ? '#52ABDF;':'') ?>">Zwischenbügler</span></a></li>
                      <li><a href="production.php?type=iron"><span style="color: <?php echo($type == 'iron' ? '#52ABDF;':'') ?>">Die Bügelei</span></a></li>
                      <li><a href="production.php?type=sew"><span style="color: <?php echo($type == 'sew' ? '#52ABDF;':'') ?>">Die Näherei</span></a></li>
                      <li><a href="production.php?type=optimize"><span style="color: <?php echo($type == 'optimize' ? '#52ABDF;':'') ?>">Optimierte Abläufe</span></a></li>
                      <li><a href="production.php?type=finish"><span style="color: <?php echo($type == 'finish' ? '#52ABDF;':'') ?>">Zuschnitt, Fixierung / Endkontrolle</span></a></li>
                    </ul>
                </div>
                <div class="clear" style="margin-bottom:20px;"></div>

                <?php
                    switch ($type){
                      case 'press':
                          echo('<div class="room" style="border-bottom: 0px;">');
                              echo('<h4>Zwischenbügler</h4>');
                              echo('<ul style="list-style: disc; padding:20px;">');
                                echo('<li style="margin-left:20px; padding:5px;"><p class="para">Ein Merkmal hoher Verarbeitungsqualität sind u.a. die 50 Zwischenbügelplätze.</p></li>');
                              echo('</ul>');
                            echo('<ul class="service_list">');
                                echo('<li><div class="ser_img"><a href="images/production/press1.png" data-lightbox="press" data-title="Zwischenbügler"><img src="images/production/press1.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/press2.png" data-lightbox="press" data-title="Zwischenbügler"><img src="images/production/press2.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/press3.png" data-lightbox="press" data-title="Zwischenbügler"><img src="images/production/press3.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/press4.png" data-lightbox="press" data-title="Zwischenbügler"><img src="images/production/press4.png" /></a></div></li>');
                            echo('</ul>');
                          echo('</div>');
                          echo('<div class="clear" style="margin-bottom:20px;"></div>');
                          break;
                      case 'iron':
                          echo('<div class="room" style="border-bottom: 0px;">');
                              echo('<h4>Die Bügelei</h4>');
                              echo('<ul style="list-style: disc; padding:20px;">');
                                echo('<li style="margin-left:20px; padding:5px;"><p class="para">Die Bügelei ist optimal für Blazer und Mantel eingerichtet. Natürlich alles mit Brisay Pressen.</p></li>');
                                echo('<li style="margin-left:20px; padding:5px;"><p class="para">Viele Formpressen sorgen für optimale Resultate in der Bügelei und sind immer bestens gewartet</p></li>');
                              echo('</ul>');
                            echo('<ul class="service_list">');
                                echo('<li><div class="ser_img"><a href="images/production/ironing2.png" data-lightbox="iron" data-title="Die Bügelei"><img src="images/production/ironing2.png"></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/ironing3.png" data-lightbox="iron" data-title="Die Bügelei"><img src="images/production/ironing3.png"></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/ironing7.png" data-lightbox="iron" data-title="Die Bügelei"><img src="images/production/ironing7.png"></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/ironing1.png" data-lightbox="iron" data-title="Die Bügelei"><img src="images/production/ironing1.png"></div></li>');
                            echo('</ul>');
                            echo('<div class="clear"></div>');
                          echo('</div>');
                          echo('<div class="clear" style="margin-bottom:20px;"></div>');
                          break;
                      case 'sew':
                          echo('<div class="room" style="border-bottom: 0px;">');
                              echo('<h4>Die Näherei</h4>');
                            echo('<ul class="service_list">');
                                echo('<li><div class="ser_img"><a href="images/production/sew1.png" data-lightbox="sew" data-title="Die Näherei"><img src="images/production/sew1.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/sew2.png" data-lightbox="sew" data-title="Die Näherei"><img src="images/production/sew2.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/sew3.png" data-lightbox="sew" data-title="Die Näherei"><img src="images/production/sew3.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/sew4.png" data-lightbox="sew" data-title="Die Näherei"><img src="images/production/sew4.png" /></a></div></li>');
                            echo('</ul>');
                          echo('</div>');
                          echo('<div class="clear" style="margin-bottom:20px;"></div>');
                          break;
                      case 'optimize':
                          echo('<div class="room" style="border-bottom: 0px;">');
                              echo('<h4>Optimierte Abläufe</h4>');
                            echo('<ul class="service_list">');
                                echo('<li><div class="ser_img"><a href="images/production/optimize1.png" data-lightbox="optimize" data-title="Optimierte Abläufe"><img src="images/production/optimize1.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/optimize2.png" data-lightbox="optimize" data-title="Optimierte Abläufe"><img src="images/production/optimize2.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/optimize3.png" data-lightbox="optimize" data-title="Optimierte Abläufe"><img src="images/production/optimize3.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/optimize4.png" data-lightbox="optimize" data-title="Optimierte Abläufe"><img src="images/production/optimize4.png" /></a></div></li>');
                            echo('</ul>');
                          echo('</div>');
                          echo('<div class="clear" style="margin-bottom:20px;"></div>');
                          break;
                      case 'finish':
                          echo('<div class="room" style="border-bottom: 0px;">');
                              echo('<h4>Zuschnitt, Fixierung / Endkontrolle</h4>');
                            echo('<ul class="service_list">');
                                echo('<li><div class="ser_img"><a href="images/production/finish1.png" data-lightbox="finish" data-title="Endkontrolle"><img src="images/production/finish1.png" /></a></div></li>');
                                echo('<li><div class="ser_img"><a href="images/production/finish2.png" data-lightbox="finish" data-title="Endkontrolle"><img src="images/production/finish2.png" /></a></div></li>');
                            echo('</ul>');
                          echo('</div>');
                          echo('<div class="clear" style="margin-bottom:20px;"></div>');
                          break;
                    }
                ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>