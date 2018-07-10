 



 		<section class=" padding-110px-tb bg-dark-blue builder-bg contact-form-style1 xs-padding-60px-tb border-none" id="contact-section20">

 		<div class="container">
                    <div class="row">
                        <!-- contact form -->
                        <div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 col-xs-12 txtcenter" >
                            <div class="padding-eighteen bg-black-light-rgba tz-background-color xs-padding-eleven border-radius-8">
                                <h5 class="alt-font font-weight-100 text-white display-block tz-text margin-fifteen-bottom font-size: 2.2em" >Actualizar contraseña</h5>
                                  <!-- contact form -->
                               <div class=" border-radius-4 bg-danger danger"><?= $errors; ?></div> 
                               <div class=" border-radius-4 alert-success success" ><?= $success; ?></div>
                                
                                <form action="<?php base_url();?>RecoveryPass" method="POST"  >

                                      <div class="col-md-12">
                                      <input value="" required="true" type="password" class="form-control border-radius-8" name="new_pass" placeholder="*Nueva contraseña">
                                    </div>
                                     <div class="col-md-12">
                                      <input value="" required="true" type="password" class="form-control border-radius-8" name="confirm_pass" placeholder="*Confirmar Contraseña">
                                    </div>
                                    <button  class= "btn-medium btn btn-circle bg-blue text-white no-letter-spacing" value="update" type="submit">Actualizar contraseña</button>                                  
                                </form>
                                  <!-- end contact form -->
                              </div>
                            </div>
                       </div>


 		</section>