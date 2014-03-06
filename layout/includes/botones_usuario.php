<!-- FUNCION AGREGADA -->
<?php
function message_count_unread_messages_1($user1=null, $user2=null) {
                global $USER, $DB;

                if (empty($user1)) {
                    $user1 = $USER;
                }

                if (!empty($user2)) {
                    return $DB->count_records_select('message', "useridto = ? AND useridfrom = ?",
                        array($user1->id, $user2->id), "COUNT('id')");
                } else {
                    return $DB->count_records_select('message', "useridto = ?",
                        array($user1->id), "COUNT('id')");
                }
            }
            
            $cant = message_count_unread_messages_1($USER);
            //echo "<br>Mensajes: ".$cant."<br><br>";
?>
<!-- FIN FUNCION AGREGADA -->

<!-- Si el usuario esta logueado, muestro los botones -->
<?php if (($USER->id != 0)&&($USER->username != 'guest')) {?>


    <ul class="nav">
        <div class="nav-collapse collapse" style="margin: 0">
            <div class="btn-group" id="btn_course_links">
                <!-- <a href="<?php //echo $CFG->wwwroot;?>" class="btn btn-info" title="Inicio"><i class="icon-white icon-home"></i></a>  -->
                <a href="<?php echo $CFG->wwwroot."/calendar/view.php?";?>" class="btn btn-info" title="Próximos eventos"><i class="icon-white icon-calendar"></i></a>
                <a href="<?php echo $CFG->wwwroot."/message/index.php";?>" class="btn btn-info" title="Mensajes"><i class="icon-white icon-envelope"></i>
                <?php if($cant>0):?>
                    <span class="badge" style='background-color: red'><?php echo $cant; ?></span> 
                <?php endif;?></a>
            </div>
        </div>
    </ul>
    <ul class="nav">
        <div class="btn-toolbar" id="bloques"></div>
    </ul>
<?php }?>
<!-- Fin de los botones del usuario -->
