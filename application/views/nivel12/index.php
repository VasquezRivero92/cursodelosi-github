<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $this->config->item('site_title', 'ion_auth'); ?></title>
        <link rel="stylesheet" href="<?php echo base_url($assets_dir . '/css/animate.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url($assets_dir . '/fonts/style.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url($own_dir . '/css/style.css'); ?>">
        <script src="<?php echo base_url($assets_dir . '/js/prefixfree.min.js'); ?>"></script>
        <script src="<?php echo base_url($assets_dir . '/js/jquery-1.11.0.min.js'); ?>"></script>
        <script src="<?php echo base_url($assets_dir . '/js/jquery-ui.js'); ?>"></script>
        <script src="<?php echo base_url($assets_dir . '/js/jquery.ui.touch-punch.min.js'); ?>"></script>
        <script src="<?php echo base_url($own_dir . '/js/libs/panicoLoader.js'); ?>"></script>
        <script src="<?php echo base_url($assets_dir . '/js/owl.carousel.min.js'); ?>"></script>
        <script type="text/javascript">
            var bdir = '<?php echo base_url(); ?>';
            var odir = '<?php echo base_url($own_dir); ?>';
            var grup = '<?php echo strtoupper(substr($this->session->grupo, 0, 1)); ?>';
            var win = <?php echo $this->session->win; ?>;
        </script>
        <script src="<?php echo base_url($own_dir . '/js/sonido.js'); ?>"></script>
        <script src="<?php echo base_url($own_dir . '/js/inicio.js'); ?>"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123369182-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-123369182-1');
        </script>
    </head>
        <?php
        $avatar = 'av' . strtoupper(substr($this->session->grupo, 0, 1)) . $this->session->avatar;
        $owlgrupo = $this->session->grupo;
        ?>
    <body class="<?php echo $avatar . ' ' . $owlgrupo; ?>">
    <!-- <p style="position:absolute;">nivel 12</p> -->
        <!-- - - - - - - - - - - - - - - - -  Loader  - - - - - - - - - - - - - - - - -->
        <div id="qLoverlay" class="resizeWindow">
            <div id="img_loader01"><div></div></div>
        </div>
        <div id="historia" class="resizeWindow">
            <!-- - - - - - - - - - - - - -  Instruccion 1  - - - - - - - - - - - - - -->
            <div id="instruccion_1" class="instrucciones">
              <!--   <div id="i1tit_1">NIVEL UNO</div>
                <div id="i1tit_2">PREVENCIÓN</div>
                <div id="i1tit_3">POR FALTA DE</div>
                <div id="i1tit_4">ORDEN Y LIMPIEZA</div> -->
            </div>
            <!-- - - - - - - - - - - - - -  Instruccion 2  - - - - - - - - - - - - - -->
            <div id="instruccion_2" class="instrucciones">
                <!-- <div id="i2img_1"></div> -->
                <div id="i2tit_1"><!--INTRODUCCIÓN--></div>
               <!--  <div id="i2txt_1">Las lesiones provocadas por la falta de orden y limpieza son las más comunes dentro del ambiente de trabajo, podrían parecer las de menor importancia por lo casuales que son, pero lo cierto es que las consecuencias de estos accidentes pueden ser muy graves.
                    <br><br>Para hacer más completo tu aprendizaje al final de este nivel pondrás a prueba lo aprendido mediante unos DESAFIOS DE PREVENCIÓN.</div> -->
                <div id="i2btn_1">Continuar</div>
            </div>
            <!-- - - - - - - - - - - - - -  Instruccion 3  - - - - - - - - - - - - - -->
            <div id="instruccion_3" class="instrucciones">
                <div id="i3tit_1"><!--PREVENCIÓN POR FALTA DE ORDEN Y LIMPIEZA--></div>
                <div id="i3txt_1"></div>
                <div id="i3btn_1" class="i3btn"></div>
                <div id="i3btn_2" class="i3btn"></div>
                <div id="i3btn_3" class="i3btn"></div>
                <?php
                if ($this->session->win < 2) {
                    echo anchor('Nivel12/reto', 'Iniciar Reto', array('id' => 'btnJugar'));
                } else {
                    echo '<div id="i3txt_2">Ya completaste este reto</div>';
                    echo anchor('mapa', 'Volver al inicio', array('id' => 'btnJugar'));
                }
                echo anchor('mapa', ' ', array('id' => 'btnciudad'));
                ?>
            </div>
            <!-- - - - - - - - - - - - - - - -  Slider 1  - - - - - - - - - - - - - - - -->
            <div id="sliderPage_1" class="instrucciones">
                <div id="carrusel" class="cont-carousel cont2-carousel">
                    <div class="owl-carousel">
                        <div class="item item2" data-id=1>
                            <div id="s1i1"></div>
                            <div id="cur_1" class="cur_mc" data-vend=1 data-anim="zoomInRight"></div>
                            <div id="cur_2" class="cur_mc" data-vend=2 data-anim="zoomInRight"></div>
                            <div id="cur_3" class="cur_mc" data-vend=3 data-anim="zoomInRight"></div>
                            <div id="cur_4" class="cur_mc" data-vend=4 data-anim="zoomInRight"></div>
                            <div id="cur_5" class="cur_mc" data-vend=5 data-anim="zoomInRight"></div>
                            <div id="cur_6" class="cur_mc" data-vend=6 data-anim="zoomInRight"></div>

                            <div id="cur_7" class="cur_mc" data-vend=7 data-anim="zoomInLeft"></div>
                            <div id="cur_8" class="cur_mc" data-vend=8 data-anim="zoomInLeft"></div>
                            <div id="cur_9" class="cur_mc" data-vend=9 data-anim="zoomInLeft"></div>
                            <div id="cur_10" class="cur_mc" data-vend=10 data-anim="zoomInLeft"></div>
                            <div id="cur_11" class="cur_mc" data-vend=11 data-anim="zoomInLeft"></div>
                            <div id="cur_12" class="cur_mc" data-vend=12 data-anim="zoomInLeft"></div>
                            <!-- <div id="cur_13" class="cur_mc" data-vend=13 data-anim="zoomInLeft"></div>
                            <div id="cur_14" class="cur_mc" data-vend=14 data-anim="zoomInLeft"></div>
                            <div id="cur_15" class="cur_mc" data-vend=15 data-anim="zoomInLeft"></div> -->

                            <div id="cur_btn" class="botiquin_mc" data-vend=15></div>

                        </div>
                    </div>
                </div>
                <div class="btnVolver disable_back"></div>
                <div id="popActiv"></div>
                <div id="s1i2_pop"><div class="btnCont"></div></div>

            </div>
            <!-- - - - - - - - - - - - - - - -  Slider 2  - - - - - - - - - - - - - - - -->
            <div id="sliderPage_2" class="instrucciones">
                <div class="cont-carousel">
                    <div class="owl-carousel">
                        <div class="item" data-id=1>
                            <div id="s2i1"></div>
                            <div id="btob_A_1" class="btn_prp ico_good" data-val=1 data-name="text_ok"></div>
                            <div id="btob_A_2" class="btn_prp ico_good" data-val=2 data-name="text_ok"></div>
                            <div id="btob_A_3" class="btn_prp ico_good" data-val=3 data-name="text_ok"></div>
                            <div id="btob_A_4" class="btn_prp ico_good" data-val=4 data-name="text_ok"></div>
                            <div id="btob_A_5" class="btn_prp ico_good" data-val=5 data-name="text_ok"></div>
                            <div id="btob_A_6" class="btn_prp ico_good" data-val=6 data-name="text_ok"></div>
                            <div id="btob_A_7" class="btn_prp ico_bad" data-val=1 data-name="text_no"></div>
                            <div id="btob_A_8" class="btn_prp ico_bad" data-val=2 data-name="text_no"></div>
                            <div id="btob_A_9" class="btn_prp ico_bad" data-val=3 data-name="text_no"></div>
                            <div id="btob_A_10" class="btn_prp ico_bad" data-val=4 data-name="text_no"></div>
                        </div>
                        <div class="item" data-id=2>
                            <div id="s2i2"></div>
                            <div id="btob_B_1" class="btn_prp ico_good" data-val=7 data-name="text_ok"></div>
                            <div id="btob_B_2" class="btn_prp ico_good" data-val=8 data-name="text_ok"></div>
                        </div>
                        <div class="item" data-id=3>
                            <div id="s2i3"></div>
                            <div id="btob_C_1" class="btn_prp ico_good" data-val=9 data-name="text_ok"></div>
                            <div id="btob_C_2" class="btn_prp ico_good" data-val=10 data-name="text_ok"></div>
                            <div id="btob_C_3" class="btn_prp ico_good" data-val=11 data-name="text_ok"></div>
                        </div>
                        <div class="item" data-id=4>
                            <div id="s2i4"></div>
                            <div id="btob_D_1" class="btn_prp ico_good" data-val=12 data-name="text_ok"></div>
                            <div id="btob_D_2" class="btn_prp ico_good" data-val=13 data-name="text_ok"></div>
                            <div id="btob_D_3" class="btn_prp ico_good" data-val=14 data-name="text_ok"></div>
                            <div id="btob_D_4" class="btn_prp ico_good" data-val=15 data-name="text_ok"></div>
                            <div id="btob_D_5" class="btn_prp ico_good" data-val=16 data-name="text_ok"></div>
                            <div id="btob_D_6" class="btn_prp ico_good" data-val=17 data-name="text_ok"></div>
                            <div id="btob_D_7" class="btn_prp ico_good" data-val=18 data-name="text_ok"></div>
                            <div id="btob_D_8" class="btn_prp ico_good" data-val=19 data-name="text_ok"></div>
                            <div id="btob_D_9" class="btn_prp ico_good" data-val=20 data-name="text_ok"></div>
                        </div>
                        <div class="item" data-id=5>
                            <div id="s2i5"></div>
                            <div id="btob_E_1" class="btn_prp ico_good" data-val=21 data-name="text_ok"></div>
                            <div id="btob_E_2" class="btn_prp ico_good" data-val=22 data-name="text_ok"></div>
                            <div id="btob_E_3" class="btn_prp ico_good" data-val=23 data-name="text_ok"></div>
                            <div id="btob_E_4" class="btn_prp ico_good" data-val=24 data-name="text_ok"></div>
                            <div id="btob_E_5" class="btn_prp ico_good" data-val=25 data-name="text_ok"></div>
                            <div id="btob_E_6" class="btn_prp ico_bad" data-val=5 data-name="text_no"></div>
                            <div id="btob_E_7" class="btn_prp ico_bad" data-val=6 data-name="text_no"></div>
                            <div id="btob_E_8" class="btn_prp ico_bad" data-val=7 data-name="text_no"></div>
                            <div id="btob_E_9" class="btn_prp ico_bad" data-val=8 data-name="text_no"></div>
                            <div id="btob_E_10" class="btn_prp ico_bad" data-val=9 data-name="text_no"></div>
                            <div id="btob_E_11" class="btn_prp ico_bad" data-val=10 data-name="text_no"></div>
                        </div>
                        <div class="item" data-id=6>
                            <div id="s2i6"></div>
                            <div id="btob_F_1" class="btn_prp ico_good" data-val=26 data-name="text_ok"></div>
                            <div id="btob_F_2" class="btn_prp ico_good" data-val=27 data-name="text_ok"></div>
                            <div id="btob_F_3" class="btn_prp ico_good" data-val=28 data-name="text_ok"></div>
                            <div id="btob_F_4" class="btn_prp ico_good" data-val=29 data-name="text_ok"></div>
                            <div id="btob_F_5" class="btn_prp ico_good" data-val=30 data-name="text_ok"></div>
                            <div id="btob_F_6" class="btn_prp ico_bad" data-val=11 data-name="text_no"></div>
                            <div id="btob_F_7" class="btn_prp ico_bad" data-val=12 data-name="text_no"></div>
                            <div id="btob_F_8" class="btn_prp ico_bad" data-val=13 data-name="text_no"></div>
                            <div id="btob_F_9" class="btn_prp ico_bad" data-val=14 data-name="text_no"></div>
                            <div id="btob_F_10" class="btn_prp ico_bad" data-val=15 data-name="text_no"></div>
                        </div>
                        <div class="item" data-id=7>
                            <div id="s2i7"></div>
                            <div id="btob_G_1" class="btn_prp ico_good" data-val=31 data-name="text_ok"></div>
                            <div id="btob_G_2" class="btn_prp ico_good" data-val=32 data-name="text_ok"></div>
                            <div id="btob_G_3" class="btn_prp ico_good" data-val=33 data-name="text_ok"></div>
                        </div>
                    </div>
                </div>
                <div class="btnVolver"></div>
                <div id="act_txtGen">
                    <div id="content">...</div>
                </div>
            </div>
            <!-- - - - - - - - - - - - - - - -  Slider 3  - - - - - - - - - - - - - - - -->
            <div id="sliderPage_3" class="instrucciones">
                <div class="cont-carousel">
                    <div class="owl-carousel" style="top: 29px;">
                         <div class="item" data-id=1>
                            <div id="s3i1"></div>
                        </div>
                        <div class="item" data-id=2>
                            <div id="s3i2"></div>
                        </div>
                        <div class="item" data-id=3>
                            <div id="s3i3"></div>
                        </div>
                    </div>
                </div>
                <div class="btnVolver"></div>
            </div>
            <!-- - - - - - - - - - - - - - - -  Slider 4  - - - - - - - - - - - - - - - -->
            <!-- <div id="sliderPage_4" class="instrucciones">
                <div id="s4tit_1" class="stit_1">RIESGOS Y MEDIDAS DE PREVENCIÓN</div>
                <div id="s4tit_2" class="stit_2"></div>
                <div id="s4txt_1" class="stxt_1">Mantén presionado el cursor sobre la imagen<br>para ver la manera de prevenir los peligros.</div>
                <div class="no-carousel">
                    <div class="item" data-id=1>
                        <div id="s4i1"></div><div id="s4i1h"></div><div id="s4i1p"></div><div class="itmHand"></div><div class="itemLoader"></div>
                    </div>
                    <div class="item" data-id=2>
                        <div id="s4i2"></div><div id="s4i2h"></div><div id="s4i2p"></div><div class="itmHand"></div><div class="itemLoader"></div>
                    </div>
                </div>
                <div class="btnVolver"></div>
            </div> -->
            <!-- - - - - - - - - - - - - -  Instruccion 4 (video)  - - - - - - - - - - - - - -->
            <!-- <div id="instruccion_4" class="instrucciones">
                <video id="i4_video" controls preload="auto">
                    <source src="<?php //echo base_url($own_dir . '/videos/videoi4.mp4'); ?>" type="video/mp4"/>
                    <source src="<?php //echo base_url($own_dir . '/videos/videoi4.webm'); ?>" type="video/webm"/>
                </video>
                <div id="i4btn_1">Continuar</div>
            </div> -->
        </div>
        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    </body>
</html>