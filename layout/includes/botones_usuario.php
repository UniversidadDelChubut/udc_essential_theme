<!-- Si el usuario esta logueado, muestro los botones -->
<?php if ($USER->id != 0) {?>
    <ul class="nav pull-left">
        <div class="nav-collapse collapse">
            <div class="btn-group" id="btn_course_links">
                <!-- <a href="<?php //echo $CFG->wwwroot;?>" class="btn btn-info" title="Inicio"><i class="icon-white icon-home"></i></a>  -->
                <a href="<?php echo $CFG->wwwroot."/calendar/view.php?";?>" class="btn btn-info" title="Próximos eventos"><i class="icon-white icon-calendar"></i></a>
                <a href="<?php echo $CFG->wwwroot."/message/index.php";?>" class="btn btn-info" title="Mensajes"><i class="icon-white icon-envelope"></i></a>
            </div>
        </div>
    </ul>
<?php }?>
<!-- Fin de los botones del usuario -->
