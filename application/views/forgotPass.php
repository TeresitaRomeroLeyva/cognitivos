 

 <div id="page" class="page">
    
 
        <section class=" padding-110px-tb bg-dark-blue builder-bg contact-form-style1 xs-padding-60px-tb border-none" id="contact-section20">

                 <div class="container">
                    <div class="row">
                        <!-- contact form -->
                        <div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 col-xs-12 txtcenter" >
                            <div class="padding-eighteen bg-black-light-rgba tz-background-color xs-padding-eleven border-radius-8">
                                <h5 class="alt-font font-weight-100 text-white display-block tz-text margin-fifteen-bottom font-size: 2.2em" >Recuperar contraseña</h5>
                                <P>Escribe tu cuenta de email abajo para enviar tu nueva contraseña.</P>
                                <form action="<?php base_url();?>ForgotPass/send" method="POST">
                                    
                                        <div class=" border-radius-4 bg-danger danger"><?= $errors; ?></div> 
                                        <div class=" border-radius-4 alert-success success" ><?= $success; ?></div>

                                            <input type="text" required="true" name="email" data-email="required" id="email" placeholder="* Tu email"  class="medium-input  border-radius-8">   
                                       
                                                                               
                                                          
                                            <button  class= "btn-medium btn btn-circle bg-blue text-white no-letter-spacing" value="enviar" type="submit">Enviar</button>                                      
                                </form>
                            </div>

                        </div>
                        <!-- end contact form -->
                    </div>
                </div>
        </section>

    </div>
    
    
  