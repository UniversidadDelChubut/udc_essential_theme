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
<?php if($cant > 0): ?>
    <div id="contenedor" style ="display:block;" class="da-slider" style="background-position: 50% 0%;margin-top: 50px;">
        <div id="carouselSpot" class="carousel slide">
            <ol class="carousel-indicators">
                <!--<li data-target="#carouselSpot" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSpot" data-slide-to="1"></li>
                <li data-target="#carouselSpot" data-slide-to="2"></li>-->
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <?php if($spot1):?>
                    <div class="active item da-slide">
                        <h2><?php echo $PAGE->theme->settings->marketing1 ?></h2>
                        <div class="marketing-image1"></div>
                        <?php echo $PAGE->theme->settings->marketing1content ?>
                        <p>
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
 
<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 3000
        })
    });
</script>