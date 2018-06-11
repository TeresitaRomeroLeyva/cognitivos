

        <div id="page" class="page">
        <?php include('header2.php'); ?>
        <section class="padding-110px-tb bg-dark-blue builder-bg contact-form-style1 xs-padding-60px-tb border-none" id="contact-section20">

                <div class="container">
                    <div class="row">
                        <!-- contact form -->
                        <div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 col-xs-12 col txtcenter" >
                            <div class="padding-four bg-black-light-rgba tz-background-color xs-padding-eleven border-radius-8 col-lg-12 ">
                                <h5 class="alt-font font-weight-100 text-white display-block tz-text margin-fifteen-bottom font-size:2.2em" >Registro</h5>
                             <form  action="Check_in/save" method="POST">
                                  <div class="row">
                                    <div class="col-md-6">
                                  
                                      <input  value="" type="text" class="form-control border-radius-8" name="username" placeholder="* Nombre(s)">
                                    </div>
                                    <div class="col-md-6">
                                      <input for="" value="" type="text" class="form-control border-radius-8" name="last_name" placeholder="* Apellidos">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input value="" type="text" class="form-control border-radius-8" name="address" placeholder="* Dirección">
                                    </div>
                                    <div class="col-md-6">

                                      <input value="" type="text" class="form-control border-radius-8" name="country" placeholder="* País">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input value="" type="text" class="form-control border-radius-8" name="city"    placeholder="* Ciudad">
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control border-radius-8" name="state" placeholder="* Estado">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input value="" type="text" class="form-control border-radius-8" name="phone"  placeholder="* Télefono">
                                    </div>
                                    <div class="col-md-6">
                                      <input value="" type="text" class="form-control border-radius-8" name="email"   placeholder="* Correo Electronico">
                                    </div>
                                  </div>
                                   <div class="row">
                                   <div class="col-md-6">
                                      <input value="" type="password" class="form-control border-radius-8" name="password" placeholder="* Contraseña">
                                    </div>
                                
                                   <div class="col-md-6">
                                      <input value="" type="password" class="form-control border-radius-8" name="Confirm_Password" placeholder="*Confirmar Contraseña">
                                    </div>
                                  </div>


                                 <button  class= "btn-medium btn btn-circle bg-blue text-white no-letter-spacing" name="submit" value="Registro"  type="submit">Registrar</button> 
                                </form>
                            </div>
                            
                            
                        </div>
                        <!-- end contact form -->
                    </div>
                </div>
            </section>
             <?php include('footer.php'); ?></div><!-- /#page -->

