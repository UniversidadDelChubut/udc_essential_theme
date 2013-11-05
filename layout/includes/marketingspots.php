<!--
 *******************************************************************************
   TODO LO ORIGINAL DEL THEME DE LOS SPOT ORIGINALES ESTA ARRIBA 
 *******************************************************************************
-->
<!-- 
<div class="row-fluid" id="middle-blocks">
    <?php/* 
        $cant = 0;
        $spot1 = false;$spot2 = false;$spot3 = false;
        if ($PAGE->theme->settings->marketing3 != ""){
            $spot3 = true;
        }elseif ($PAGE->theme->settings->marketing2 != ""){
            $spot2 = true;
        }elseif ($PAGE->theme->settings->marketing1 != ""){
            $spot1 = true;
        }
        ?>
    <?php if($spot1 || $spot2 || $spot3){ ?>
        <div class="span4">
            <!-- Advert #1 -->
            <div class="service">
                    <!-- Icon & title. Font Awesome icon used. -->
                    <h5><span><i class="icon-<?php echo $PAGE->theme->settings->marketing1icon ?>"></i> <?php echo $PAGE->theme->settings->marketing1 ?></span></h5>
                    <?php if ($hasmarketing1image) { ?>
                        <div class="marketing-image1"></div>
                    <?php } ?>

                    <?php echo $PAGE->theme->settings->marketing1content ?>
                    <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing1buttonurl ?>" id="button" target="_blank"><?php echo $PAGE->theme->settings->marketing1buttontext ?></a></p>
            </div>
        </div>
    <?php }*/?>
    <?php /* 
    <div class="span4">
        <!-- Advert #2 -->
        <div class="service">
            <!-- Icon & title. Font Awesome icon used. -->
            <h5><span><i class="icon-<?php echo $PAGE->theme->settings->marketing2icon ?>"></i> <?php echo $PAGE->theme->settings->marketing2 ?></span></h5>
            <?php if ($hasmarketing2image) { ?>
            	<div class="marketing-image2"></div>
            <?php } ?>
            
            <?php echo $PAGE->theme->settings->marketing2content ?>
            <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing2buttonurl ?>" id="button"><?php echo $PAGE->theme->settings->marketing2buttontext ?></a></p>
        </div>
    </div>
    
    <div class="span4">
        <!-- Advert #3 -->
        <div class="service">
            <!-- Icon & title. Font Awesome icon used. -->
            <h5><span><i class="icon-<?php echo $PAGE->theme->settings->marketing3icon ?>"></i> <?php echo $PAGE->theme->settings->marketing3 ?></span></h5>
            <?php if ($hasmarketing3image) { ?>
            	<div class="marketing-image3"></div>
            <?php } ?>
            
            <?php echo $PAGE->theme->settings->marketing3content ?>
            <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing3buttonurl ?>" id="button"><?php echo $PAGE->theme->settings->marketing3buttontext ?></a></p>
        </div>
    </div>
    */ ?>
</div>
-->

<!--
 *******************************************************************************
   PRIMER INTENTO POR HACER LOS SPOT EN FORMA DE SLIDE
 *******************************************************************************
-->

<?php /*
    $cant = 0;
    $spot1 = false; $spot2 = false; $spot3 = false;
    if ($PAGE->theme->settings->marketing3 != ""){
        $spot3 = true;
    }elseif ($PAGE->theme->settings->marketing2 != ""){
        $spot2 = true;
    }elseif ($PAGE->theme->settings->marketing1 != ""){
        $spot1 = true;
    }
*/?>

<!--<div class="row-fluid" id="middle-blocks">    
        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">                
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <!--<div class="carousel-inner" style="alignment-adjust: central">
                <div class="active item">
                    <div>
                        <img  src="theme/udcessential/pix/1.jpg" alt="banner1" />
                        <!-- Advert #1 
                        <div class="service">
                                <!-- Icon & title. Font Awesome icon used. 
                                <h5><span><i class="icon-<?php /*echo $PAGE->theme->settings->marketing1icon ?>"></i> <?php echo $PAGE->theme->settings->marketing1 ?></span></h5>
                                <?php if ($hasmarketing1image) { ?>
                                    <div class="marketing-image1"></div>
                                <?php } ?>
                                <?php echo $PAGE->theme->settings->marketing1content ?>
                                <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing1buttonurl ?>" id="button" target="_blank"><?php echo $PAGE->theme->settings->marketing1buttontext */?></a></p>
                        </div>-->
                    <!--</div>                    
                    <!-- <img  src="../../pix/1.jpg" alt="banner1" /></div> -->
                <!--</div>
                <div class="item">
                    <!--<div>
                        <img  src="theme/udcessential/pix/2.jpg" alt="banner1" />
                        <!-- Advert #2 
                        <div class="service">
                            <!-- Icon & title. Font Awesome icon used. 
                            <h5><span><i class="icon-<?php /*echo $PAGE->theme->settings->marketing2icon ?>"></i> <?php echo $PAGE->theme->settings->marketing2 ?></span></h5>
                            <?php if ($hasmarketing2image) { ?>
                                <div class="marketing-image2"></div>
                            <?php } ?>

                            <?php echo $PAGE->theme->settings->marketing2content ?>
                            <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing2buttonurl ?>" id="button"><?php echo $PAGE->theme->settings->marketing2buttontext */?></a></p>
                        </div>-->
                    <!--</div>
                    <!-- <img  src="../../pix/2.jpg" alt="banner2" /> -->
                <!--</div>
                <!--<div class="item">
                    <!--<div>
                        <!--<img  src="theme/udcessential/pix/3.jpg" alt="banner1" />
                        <!-- Advert #3
                        <div class="service">
                            <!-- Icon & title. Font Awesome icon used. 
                            <h5><span><i class="icon-<?php /*echo $PAGE->theme->settings->marketing3icon ?>"></i> <?php echo $PAGE->theme->settings->marketing3 ?></span></h5>
                            <?php if ($hasmarketing3image) { ?>
                                <div class="marketing-image3"></div>
                            <?php } ?>

                            <?php echo $PAGE->theme->settings->marketing3content ?>
                            <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing3buttonurl ?>" id="button"><?php echo $PAGE->theme->settings->marketing3buttontext */?></a></p>
                        </div>  -->
                    <!--</div>
                    <!-- <img  src="../../pix/3.jpg" alt="banner3" /> -->
                <!--</div>
                <!-- Carousel nav -->
                <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
</div>-->
<!--
    <script src="theme/udcessential/jquery/caroousel_2.3.2.js"></script>
    <script src="theme/udcessential/javascript/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 6000
            })
        });
    </script>
    -->
    
    
<!--
 *******************************************************************************
   SEGUNDO INTENTO POR HACER LOS SPOT EN FORMA DE SLIDE
 *******************************************************************************
-->

    <?php /*$hideonphone = false; ?>
    <div id="da-slider" class="da-slider <?php echo $hideonphone ?>" style="background-position: 8650% 0%;">
    
        <div class="da-slide">
            <h2><?php echo "Slide1" ?></h2>
            <?php //if ($hasslide1caption) { ?>
                <p><?php echo "Caption Slide 1" ?></p>
            <?php //} ?>
            <?php //if ($hasslide1url) { ?>
                <!-- <a href="<?php //echo $slide1url ?>" class="da-link" target="_blank"><?php //echo get_string('readmore','theme_udcessential')?></a> -->
            <?php //} ?>
            <?php //if ($hasslide1image) { ?>
            <div class="da-img"><img src="theme/udcessential/pix/1.jpg" alt="1 jpg"></div>
            <?php //} ?>
        </div>
    
        <div class="da-slide">
            <h2><?php echo "Slide 2" ?></h2>
            <?php //if ($hasslide2caption) { ?>
                <p><?php echo "Caption Slide 2" ?></p>
            <?php //} ?>
            <?php //if ($hasslide2url) { ?>
                <!-- <a href="<?php //echo $slide2url ?>" class="da-link" target="_blank"><?php //echo get_string('readmore','theme_udcessential')?></a> -->
            <?php //} ?>
            <?php //if ($hasslide2image) { ?>
            <div class="da-img"><img src="theme/udcessential/pix/2.jpg" alt="2 jpg"></div>
            <?php //} ?>
        </div>
           
        <div class="da-slide">
            <h2><?php echo "Slide 3" ?></h2>
            <?php //if ($hasslide3caption) { ?>
                <p><?php echo "Caption slide 3" ?></p>
            <?php //} ?>
            <?php //if ($hasslide3url) { ?>
                <!-- <a href="<?php //echo $slide3url ?>" class="da-link" target="_blank"><?php //echo get_string('readmore','theme_udcessential')?></a> -->
            <?php //} ?>
            <?php //if ($hasslide3image) { ?>
            <div class="da-img"><img src="theme/udcessential/pix/3.jpg" alt="3 jpg"></div>
            <?php }*/ ?>
<!--
        </div>           
    

        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
        
    </div>
-->

<!--
 *******************************************************************************
   TERCER INTENTO POR HACER LOS SPOT EN FORMA DE SLIDE
 *******************************************************************************
-->

<?php        
    $cant = 0;
    $spot1 = false;$spot2 = false;$spot3 = false;
    if ($PAGE->theme->settings->marketing1 != ""){
        $spot1 = true;
        $cant++;
    }
    if ($PAGE->theme->settings->marketing2 != ""){
        $spot2 = true;
        $cant++;
    }
    if ($PAGE->theme->settings->marketing3 != ""){
        $spot3 = true;
        $cant++;
    }
?>

<STYLE TYPE="text/css">
    h3{
        color: #6485FF; /*azul como el theme*/ 
        float: left;
    }
    h5{
        float: left;
    }
    .imgDiv{
        background-size: contain;	
	width: 60%;
	height: 60;
	margin-bottom: 5px;
        margin-top: 15px;
        float: right;
    }
    a{
        float: bottom;
    }
</STYLE>
    



<?php if($cant > 0): ?>
    <div id="contenedor" style="margin-top: 100px; height: 200px" >
        <div id="carouselSpot" class="carousel slide">
            <ol class="carousel-indicators">
                <!--<li data-target="#carouselSpot" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSpot" data-slide-to="1"></li>
                <li data-target="#carouselSpot" data-slide-to="2"></li>        -->
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <?php if($spot1):?>
                    <div class="active item">
                        <h4><strong><?php echo $PAGE->theme->settings->marketing1 ?></strong></h4>
                        <div class="marketing-image1"></div>
                        <?php echo $PAGE->theme->settings->marketing1content ?>
                        <p align="right">
                            <a href="<?php echo $PAGE->theme->settings->marketing1buttonurl ?>" 
                            id="button" target="_blank"><?php echo $PAGE->theme->settings->marketing1buttontext?></a>
                        </p>
                    </div>
                <?php endif;?>
                <?php if($spot2):?>
                    <div class="<?php if(!($spot1)){ echo "active ";}?>item">
                        <p><?php echo $PAGE->theme->settings->marketing2 ?></p>
                        <div class="marketing-image2"></div>
                        <?php echo $PAGE->theme->settings->marketing2content ?>
                        <p align="right">
                            <a href="<?php echo $PAGE->theme->settings->marketing2buttonurl ?>" 
                            id="button" target="_blank"><?php echo $PAGE->theme->settings->marketing2buttontext?></a>
                        </p>
                    </div>
                <?php endif;?>
                <?php if($spot3):?>
                    <div class="<?php if(!($spot1) && !($spot2)){ echo "active ";}?>item">
                        <h3><strong><?php echo $PAGE->theme->settings->marketing3 ?></strong></h3>
                        <div class="imgDiv">
                            <div class="marketing-image3"></div>
                        </div>
                        <h5><?php echo $PAGE->theme->settings->marketing3content ?></h5>
                        <p align="right">
                            <a href="<?php echo $PAGE->theme->settings->marketing3buttonurl ?>" 
                            id="button" target="_blank"><?php echo $PAGE->theme->settings->marketing3buttontext?></a>
                        </p>
                    </div>
                <?php endif;?>
            </div>
            <?php if($cant > 1): ?>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#carouselSpot" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#carouselSpot" data-slide="next">&rsaquo;</a>
            <?php endif;?>
        </div>
    </div>
<?php endif;?>
 
<!-- <script src="theme/udcessential/layout/includes/jquery.js"></script> 
<script src="theme/udcessential/layout/includes/bootstrap.min.js"></script> -->

<script src="theme/udcessential/jquery/bootstrap_plugins/crousel_2.3.2.js"></script>
<script src="theme/udcessential/javascript/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 6000
        })
    });
</script>


