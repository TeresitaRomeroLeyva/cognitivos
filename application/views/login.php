

         <div id="page" class="page">
        <?php include('header2.php'); ?>
     
    
        <section class="padding-110px-tb bg-dark-blue builder-bg contact-form-style1 xs-padding-60px-tb border-none" id="contact-section20">
                <div class="container">
                    <div class="row">
                        <!-- contact form -->
                        <div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 col-xs-12 txtcenter" >
                            <div class="padding-eighteen bg-black-light-rgba tz-background-color xs-padding-eleven border-radius-8">
                                <h5 class="alt-font font-weight-100 text-white display-block tz-text margin-fifteen-bottom font-size: 2.2em" >Entrar a MPCognitivos</h5>
                                <div id="message_pass_errors" class=" border-radius-4 bg-danger danger"><?= $errors; ?></div> 
                                <div id="message_pass_success" class=" border-radius-4 alert-success success" ><?= $success; ?></div>
                                <form action="<?php base_url();?>Log_in/index" method="POST">
                                    
                                    

                                            <input type="text" required="true" name="email" data-email="required" id="email" placeholder="* Tu email"  class="medium-input  border-radius-8">   
                                       
                                            <input type="password" required="true"  name="password" data-email="required" id="password"  placeholder="* Tu Contraseña" class="medium-input  border-radius-8">                                    
                                                          
                                            <button  class= "btn-medium btn btn-circle bg-blue text-white no-letter-spacing" value="Ingresar" type="submit"> Ingresar</button>                                      
                                </form>
                            </div>
                            <a  class="text-white" >
                                ¿No tienes una cuenta aún?
                                <a href="<?php echo base_url()?>Check_in" class="text-blue"> Regístrate aquí</a>
                            </a>
                            <br>
                            <a href="<?php echo base_url()?>ForgotPass" class="text-blue" >Olvide mi contraseña</a>

                        </div>
                        <!-- end contact form -->
                    </div>
                </div>
            </section> <?php include('footer.php'); ?></div><!-- /#page -->


       
        