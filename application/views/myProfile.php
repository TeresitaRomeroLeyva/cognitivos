

  <div id="page" class="page">
        <?php include('header3.php'); ?>
 
        <section class=" padding-110px-tb bg-dark-blue builder-bg contact-form-style1 xs-padding-60px-tb border-none" id="contact-section20">

                <div class="container">
                    <div class="row">

                    
                            <div class=" col-md-4 txtcenter margin-top10" >
                            <div class="padding-eighteen bg-black-light-rgba tz-background-color border-radius-8">

                                <h5 class="alt-font md-padding-fourteen font-weight-100 text-white display-block tz-text margin-fifteen-bottom font-size:2.2em" >ACTUALIZAR CONTRASEÑA</h5>
                                  <!-- contact form -->
                                <form action="<?php base_url();?>Check_in/modifyUser" method="POST"  >
                                     <div class="col-md-12">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Contraseña actual">
                                    </div>
                                      <div class="col-md-12">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Nueva contraseña">
                                    </div>
                                     <div class="col-md-12">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Confirmar contraseña">
                                    </div>

                                    <button  class= "btn-medium btn btn-circle bg-blue text-white no-letter-spacing" type="submit">Actualizar contraseña</button>                                  
                                </form>
                                  <!-- end contact form -->
                              </div>
                            </div>
                       
                    

                      <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 margin-top10 " >
                            <div class=" padding-nine   bg-black-light-rgba tz-background-color xs-padding-eleven border-radius-8 col-lg-12  margin-top25">
                                <h5 class="font-weight-100 md-padding-fourteen text-white display-block tz-text margin-six-bottom txtcenter font-size:2.2em" >ACTUALIZAR TUS DATOS PERSONALES</h5>
                                  <!-- contact form -->
                                <form action="<?php base_url();?>Profile/modifyUser" method="POST">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Nombre(s)" value=<?=$this->session->userdata('username')?>>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Apellidos" value=<?=$this->session->userdata('last_name')?>>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Correo Electronico" value= <?=$this->session->userdata('email')?>>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Télefono" value= <?=$this->session->userdata('phone')?>>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Dirección"  value= <?=$this->session->userdata('address')?>>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Ciudad" value= <?=$this->session->userdata('city')?>>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="text" class="form-control border-radius-8" placeholder="* País"  value= <?=$this->session->userdata('country')?>>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control border-radius-8" placeholder="* Estado" value= <?=$this->session->userdata('state')?>>
                                    </div>
                                  </div>

                                   
                                   <button  class= "btn-medium btn btn-circle bg-blue text-white no-letter-spacing"type="submit">Actualizar mis datos</button> 
                                </form>
                                  <!-- end contact form -->
                          </div>
                        </div>
                         </div>
            
                    <div class="col-md-12   col-sm-12 col-xs-12 col col-lg-12 " >
                      <div class=" overflow padding-four bg-black-light-rgba   border-radius-8 margin-top  ">
                                <h5 class="text-white display-block tz-text margin-fifteen-bottom textCenter" >MI HISTORIAL DE COMPRA</h5>
                                <table class="table text-white ">
                                    <thead>
                                        <tr>
                                            <th class="textCenter">Folio </th>
                                            <th class="txtcenter">Membresía </th>
                                            <th class="txtcenter">Monto </th>
                                            <th class="txtcenter">Fecha </th>
                                        </tr>
                                    </thead>
                                         <td class="txtcenter">1513 </td>  
                                          <td class="txtcenter">Semanal </td>
                                          <td class="txtcenter">$250 </td>
                                          <td class="txtcenter">24/05/2018</td>

                                </table>
                                    
                        </div> 

                            <br>
                         <a href="#" class="btn-medium btn btn-circle bg-blue text-white no-letter-spacing btn-icon  floatLeft"><i class="fa fa-repeat"></i>Actualizar</a>
                    </div>
                  
                </div>
                 </section>
        </div>
       
                   <?php include('footer.php'); ?><!-- /#page -->


        