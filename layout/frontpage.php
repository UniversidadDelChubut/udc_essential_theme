<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_udcessential
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

//instancio las variables globales
global $USER, $SESSION, $CFG; 

$hashiddendock = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('hidden-dock', $OUTPUT));
    
$hasslide1 = (!empty($PAGE->theme->settings->slide1));
$hasslide1image = (!empty($PAGE->theme->settings->slide1image));
$hasslide1caption = (!empty($PAGE->theme->settings->slide1caption));
$hasslide1url = (!empty($PAGE->theme->settings->slide1url));
$hasslide2 = (!empty($PAGE->theme->settings->slide2));
$hasslide2image = (!empty($PAGE->theme->settings->slide2image));
$hasslide2caption = (!empty($PAGE->theme->settings->slide2caption));
$hasslide2url = (!empty($PAGE->theme->settings->slide2url));
$hasslide3 = (!empty($PAGE->theme->settings->slide3));
$hasslide3image = (!empty($PAGE->theme->settings->slide3image));
$hasslide3caption = (!empty($PAGE->theme->settings->slide3caption));
$hasslide3url = (!empty($PAGE->theme->settings->slide3url));
$hasslide4 = (!empty($PAGE->theme->settings->slide4));
$hasslide4image = (!empty($PAGE->theme->settings->slide4image));
$hasslide4caption = (!empty($PAGE->theme->settings->slide4caption));
$hasslide4url = (!empty($PAGE->theme->settings->slide4url));
$hasslideshow = ($hasslide1||$hasslide2||$hasslide3||$hasslide4);
$hasanalytics = (empty($PAGE->theme->settings->useanalytics)) ? false : $PAGE->theme->settings->useanalytics;

$hasalert1 = (empty($PAGE->theme->settings->enable1alert)) ? false : $PAGE->theme->settings->enable1alert;
$hasalert2 = (empty($PAGE->theme->settings->enable2alert)) ? false : $PAGE->theme->settings->enable2alert;
$hasalert3 = (empty($PAGE->theme->settings->enable3alert)) ? false : $PAGE->theme->settings->enable3alert;
$alertinfo = '<span class="icon-stack"><i class="icon-sign-blank icon-stack-base"></i><i class="icon-info icon-light"></i></span>';
$alertwarning = '<span class="icon-stack"><i class="icon-sign-blank icon-stack-base"></i><i class="icon-warning-sign icon-light"></i></span>';
$alertsuccess = '<span class="icon-stack"><i class="icon-sign-blank icon-stack-base"></i><i class="icon-bullhorn icon-light"></i></span>';

$hasmarketing1image = (!empty($PAGE->theme->settings->marketing1image));
$hasmarketing2image = (!empty($PAGE->theme->settings->marketing2image));
$hasmarketing3image = (!empty($PAGE->theme->settings->marketing3image));

$haslogo = (!empty($PAGE->theme->settings->logo));


/* Slide1 settings */
$hideonphone = $PAGE->theme->settings->hideonphone;
if ($hasslide1) {
    $slide1 = $PAGE->theme->settings->slide1;
}
if ($hasslide1image) {
    $slide1image = $PAGE->theme->setting_file_url('slide1image', 'slide1image');
}
if ($hasslide1caption) {
    $slide1caption = $PAGE->theme->settings->slide1caption;
}
if ($hasslide1url) {
    $slide1url = $PAGE->theme->settings->slide1url;
}

/* slide2 settings */
if ($hasslide2) {
    $slide2 = $PAGE->theme->settings->slide2;
}
if ($hasslide2image) {
    $slide2image = $PAGE->theme->setting_file_url('slide2image', 'slide2image');
}
if ($hasslide2caption) {
    $slide2caption = $PAGE->theme->settings->slide2caption;
}
if ($hasslide2url) {
    $slide2url = $PAGE->theme->settings->slide2url;
}

/* slide3 settings */
if ($hasslide3) {
    $slide3 = $PAGE->theme->settings->slide3;
}
if ($hasslide3image) {
    $slide3image = $PAGE->theme->setting_file_url('slide3image', 'slide3image');
}
if ($hasslide3caption) {
    $slide3caption = $PAGE->theme->settings->slide3caption;
}
if ($hasslide3url) {
    $slide3url = $PAGE->theme->settings->slide3url;
}

/* slide4 settings */
if ($hasslide4) {
    $slide4 = $PAGE->theme->settings->slide4;
}
if ($hasslide4image) {
    $slide4image = $PAGE->theme->setting_file_url('slide4image', 'slide4image');
}
if ($hasslide4caption) {
    $slide4caption = $PAGE->theme->settings->slide4caption;
}
if ($hasslide4url) {
    $slide4url = $PAGE->theme->settings->slide4url;
}

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google web fonts -->
    <?php //require_once(dirname(__FILE__).'/includes/fonts.php'); ?>
    <!-- iOS Homescreen Icons -->
    <?php //require_once(dirname(__FILE__).'/includes/iosicons.php'); ?>
    <noscript>
	<link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot;?>/theme/udcessential/style/nojs.css" />
    </noscript>
    <!-- agrego el Javascript y los CSS agregados -->
    <link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot;?>/theme/udcessential/style/css_agregadas.css" />
    <script type="text/javascript" src="<?php echo $CFG->wwwroot;?>/theme/udcessential/javascript/funciones_agregadas.js"></script>
    <!-- fin de agregar archivos -->
    <!-- SCRIPT para el modal del invitado -->
    <script type="text/javascript">
        $(document).ready(function(){
           $("#myModal").modal('show');
        });
    </script>
    <!-- FIN de SCRIPT del modal del invitado -->
</head>

<body <?php echo $OUTPUT->body_attributes(); ?> >

<!-- muestro en que layout estoy 
<script>alert("layout FRONTPAGE!!");</script> -->

    <?php echo $OUTPUT->standard_top_of_body_html() ?>

    <div id="cabecera" class="row-fluid">
        <div id="caja-flotante">
            <?php require_once(dirname(__FILE__).'/includes/header.php'); ?>
        </div>
        <div id="barra-fija">
            <header  role="banner" class="navbar" >
                <nav role="navigation" class="navbar-inner navbar-fixed-top">
                    <div class="container-fluid">
                        <a class="brand" href="<?php echo $CFG->wwwroot;?>"><i class="icon-home"> </i>&nbsp;UDC<?php //echo $SITE->shortname; ?></a>
                        <a class="btn btn-navbar" data-toggle="workaround-collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse">
                            <?php //if ($hascustommenu) {
                                if(!isguestuser()){
                                    echo $custommenu;
                                }
                            //} ?>
                            <!-- Botones personalizados del Usuario -->
                                <?php include 'includes/botones_usuario.php'?>
                            <!-- Fin de los botones personalizados del Usuario -->
                            <!-- Inicio info del login del usuario -->
                            <ul class="nav pull-right">
                                <li class="dropdown">
                                    <?php echo $OUTPUT->login_info() ?>
                                </li>
                            </ul>
                            <!-- Fin info del login del usuario -->
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </div>
    
    <!-- Inicio del div que contiene la pagina principal -->
    <div id="page" class="container-fluid">
        <!-- Si el usuario es INVITADO muestro MODAL -->
        <?php if(isguestuser()): ?>
            <?php require_once(dirname(__FILE__).'/includes/modal_invitado.php'); ?>
        <?php endif;?>
        <!-- FIN del modal si el usuario es INVITADO -->
        
        <!-- Inicio del boton derecho de AYUDA GENERAL -->
        <?php if(!(isloggedin()) || isguestuser()):?> <!-- si no esta logueado o si es el "invitado" lo muestro -->
        <div style="float: right;">
            <div style="position: fixed;">
                <a href="http://localhost/phpmyfaq" target="_blank"><img src="/moodle/theme/udcessential/pix/ayuda.png" alt='Ayuda' title="Ayuda General" width="50px" height="50px" style="padding-left: 15%" ></a>
            </div>
        </div>
        <?php endif;?>
        <!-- Fin del boton derecho de AYUDA GENERAL -->
        
        <!-- Inicio del div que contiene las ALERTAS, SLIDES y SPOTS -->
        <div class="row-fluid">
            <!-- Start Alerts -->
            <div class="span12">
                <!-- Alert #1 -->
                <?php if ($hasalert1) { ?>  
                    <div class="useralerts alert alert-<?php echo $PAGE->theme->settings->alert1type ?>">  
                        <a class="close" data-dismiss="alert" href="#">×</a>
                        <?php if ($PAGE->theme->settings->alert1type == 'info') {
                                $alert1icon = $alertinfo;
                            } else if ($PAGE->theme->settings->alert1type == 'error') {
                                $alert1icon = $alertwarning;
                            } else {
                                $alert1icon = $alertsuccess;
                            } 
                            echo $alert1icon.'<span class="title">'.$PAGE->theme->settings->alert1title.'</span>'.$PAGE->theme->settings->alert1text; ?> 
                    </div>
                <?php } ?>

                <!-- Alert #2 -->
                <?php if ($hasalert2) { ?>  
                        <div class="useralerts alert alert-<?php echo $PAGE->theme->settings->alert2type ?>">  
                        <a class="close" data-dismiss="alert" href="#">×</a>
                        <?php 
                        if ($PAGE->theme->settings->alert2type == 'info') {
                                $alert2icon = $alertinfo;
                    } else if ($PAGE->theme->settings->alert2type == 'error') {
                        $alert2icon = $alertwarning;
                        } else {
                                $alert2icon = $alertsuccess;
                        } 
                        echo $alert2icon.'<span class="title">'.$PAGE->theme->settings->alert2title.'</span>'.$PAGE->theme->settings->alert2text; ?> 
                </div>
                <?php } ?>

                <!-- Alert #3 -->
                <?php if ($hasalert3) { ?>  
                    <div class="useralerts alert alert-<?php echo $PAGE->theme->settings->alert3type ?>">  
                        <a class="close" data-dismiss="alert" href="#">×</a>
                        <?php 
                        if ($PAGE->theme->settings->alert3type == 'info') {
                                $alert3icon = $alertinfo;
                    } else if ($PAGE->theme->settings->alert3type == 'error') {
                        $alert3icon = $alertwarning;
                        } else {
                                $alert3icon = $alertsuccess;
                        } 
                        echo $alert3icon.'<span class="title">'.$PAGE->theme->settings->alert3title.'</span>'.$PAGE->theme->settings->alert3text; ?> 
                    </div>
                <?php } ?>
            </div>
            <!-- End Alerts -->
                  
            <!-- Si el usuario NO esta logueado, muestro RSS, SPOTS y SLIDES -->
            <?php if ($USER->id == 0):?>
                <!-- Inicio RSS y los dos SLIDES -->
                <div class="row-fluid">
                    <!-- INICIO del código RSS insertado -->
                    <div class="span3" align="center">
                          <?php 
                            // Veo si puedo obtener la dir IP y compruebo si hay internet o no
                            $conexion = gethostbyname("www.google.com");
                            //Si devuelve la dir IP es porque tengo internet
                            if ($conexion != "www.google.com"): ?>
                                <div  style="padding-top: 10px; border-bottom: 5px #00adf7 solid;">
                                  <!-- start feedwind code -->
                                  <script type="text/javascript">
                                       rssmikle_url="http://udc.edu.ar";
                                       rssmikle_frame_width="100%";
                                       rssmikle_frame_height="297";
                                       rssmikle_target="_blank";
                                       rssmikle_font="Arial, Helvetica, sans-serif";
                                       rssmikle_font_size="12";
                                       rssmikle_border="off"; //on
                                       rssmikle_css_url="";
                                       autoscroll="on"; //off
                                       rssmikle_title="on";
                                       rssmikle_title_bgcolor="#0066FF";
                                       rssmikle_title_color="#FFFFFF";
                                       rssmikle_title_bgimage="";
                                       rssmikle_item_bgcolor="#F7F5F5";//"#FFFFFF";
                                       rssmikle_item_bgimage="http://localhost/moodle/theme/image.php/udcessential/theme/1391712447/bg/header";
                                       rssmikle_item_title_length="55";
                                       rssmikle_item_title_color="#666666";
                                       rssmikle_item_border_bottom="on";
                                       rssmikle_item_description="on";
                                       rssmikle_item_description_length="100%";
                                       rssmikle_item_description_color="#666666";
                                       rssmikle_item_date="off";
                                       rssmikle_item_description_tag="off";
                                       rssmikle_item_podcast="off";
                                  </script>
                                  <script type="text/javascript" src="http://widget.feed.mikle.com/js/rssmikle.js"></script>
                                  <!--<div style="font-size:10px; text-align:center;">
                                      <a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS widget</a>
                                      Please display the above link in your web page according to Terms of Service.
                                  </div>-->
                                  <!-- end feedwind code -->
                                </div>
                            <!-- si no hay internet, muestro un div con el error -->
                            <?php else:?>
                              <div  style="height: 300px;"> <!-- class="alert alert-danger"-->
                                  <div style="width: 80%; height: 60%; position: static">
                                      <img src="/moodle/theme/udcessential/pix/udc_pagina.png" alt="Sin conexión">
                                  </div><br><br><br>
                                  <p> <!-- style="padding-top: 120px;" -->No Hay Conexión a Internet.<br>
                                      No se pueden mostrar las noticias vía RSS</p>
                              </div>
                            <?php endif; ?>
                    </div>
                    <!-- FIN del código RSS insertado -->

                    <!-- Start Slideshow -->
                    <div class="span6">
                        <?php 
                                if($PAGE->theme->settings->toggleslideshow==1) {
                                        require_once(dirname(__FILE__).'/includes/slideshow.php');
                                } else if($PAGE->theme->settings-> toggleslideshow==2 && !isloggedin()) {
                                        require_once(dirname(__FILE__).'/includes/slideshow.php');
                                } else if($PAGE->theme->settings-> toggleslideshow==3 && isloggedin()) {
                                        require_once(dirname(__FILE__).'/includes/slideshow.php');
                                } 
                        ?>
                    </div>
                    <!-- End Slideshow -->

                    <!-- Start Marketing Spots -->
                    <div class="span3" style="float: right;">
                                <?php
                                        if($PAGE->theme->settings->togglemarketing==1) {
                                                require_once(dirname(__FILE__).'/includes/marketingspots.php');
                                        } else if($PAGE->theme->settings->togglemarketing==2 && !isloggedin()) {
                                                require_once(dirname(__FILE__).'/includes/marketingspots.php');
                                        } else if($PAGE->theme->settings->togglemarketing==3 && isloggedin()) {
                                                require_once(dirname(__FILE__).'/includes/marketingspots.php');
                                        } 
                                ?>                    
                    </div>
                    <!-- End Marketing Spots -->
                </div>
                <!-- FIN del RSS y los dos SLIDES -->
            <?php endif; ?>
        </div>
        <!-- FIN del div que contiene las ALERTAS, SLIDES y SPOTS -->
        
        
        
        <!-- Inicio del div que contiene el contenido Principal -->
        <div class="row-fluid">
            <?php //echo "NICO: ".$USER->id."<br>";
                  //echo "Name: ".$USER->username."<br>";
                  //echo var_dump($USER)
            ?>
            <!-- Start Frontpage Content -->            
            <?php if($PAGE->theme->settings->usefrontcontent ==1) { 
                echo $PAGE->theme->settings->frontcontentarea; ?>
                <div class="bor" style="margin-top: 10px;"></div>	
            <?php }?>
            <!-- End Frontpage Content -->
        </div>
        <div id="page-content" class="row-fluid">
            <div id="<?php echo $regionbsid ?>" class="span12">
                <div id="region-main-udcessential">                            
                    <section id="region-main" class="span12 desktop-first-column">
                        <?php
                            echo $OUTPUT->course_content_header();
                            echo $OUTPUT->main_content();
                            echo $OUTPUT->course_content_footer();
                        ?>
                    </section>
                </div>
                <div>
                  <?php echo $OUTPUT->essentialblocks('side-pre', 'span4 pull-right'); ?>
                </div>
            </div>
        </div>
            <?php if (($USER->id != 0) && (isset($conexion) && $conexion != "www.google.com")):?>
                <?php //var_dump($USER)?>
                <br><br>
                <?php $nick = $USER->firstname.", ".$USER->lastname ?>
                <!-- INICIO del CODIGO del CHAT de ScrollBack 
                    <script>
                        window.scrollback = {
                         streams:["UniversidadDelChubut"],
                         theme: 'light',
                         ticker: true
                        };

                        /***** don't edit below *****/
                        (
                          function(d,s,h,e){
                                e=d.createElement(s);
                                e.async=1;
                                e.src=h+'/client.min.js';
                                scrollback.host=h;
                                //scrollback.nick='nico';
                                d.getElementsByTagName(s)[0].parentNode.appendChild(e);
                          }
                          (document,'script',location.protocol=="https:"?"https:":"http:"+'//scrollback.io')
                        );
                    </script>
                    -->
                <!-- FIN del CODIGO del CHAT de ScrollBack -->
            <?php endif;?>
            <?php /*if (is_siteadmin()) { ?>
            <div class="hidden-blocks">
                <div class="row-fluid">
                    <h4><?php echo get_string('visibleadminonly', 'theme_udcessential') ?></h4>
                        <?php
                            echo $OUTPUT->essentialblocks('hidden-dock');
                        ?>
                </div>
            </div>
            <?php } ?>
            */?>

        </div>
        <!-- Fin del div que contiene el contenido Principal -->
    
    <!-- Fin del div que contiene la pagina principal -->
    
    <a href="#top" class="back-to-top"><i class="icon-chevron-sign-up"></i><p><?php print_string('backtotop', 'theme_udcessential'); ?></p></a>
    
    <footer id="page-footer" class="container-fluid">
        <?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>
    </footer>

    <?php echo $OUTPUT->standard_footer_html(); ?>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

    <!-- Start Google Analytics -->
    <?php if ($hasanalytics) { ?>
        <?php require_once(dirname(__FILE__).'/includes/analytics.php'); ?>
    <?php } ?>
    <!-- End Google Analytics -->
        
    <script src="<?php echo $CFG->wwwroot."/theme/udcessential/javascript/bloques.js";?>"></script>
    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            var offset = 220;
            var duration = 500;
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                return false;
            })
        });
    </script>
    
</body>
</html>