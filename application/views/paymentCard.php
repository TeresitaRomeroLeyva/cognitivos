  <?php include('header2.php'); ?>

            
<section  class=" padding-110px-tb bg-dark-blue builder-bg contact-form-style1 xs-padding-60px-tb border-none" id="contact-section20"">
    <div class="container">
        <div class="row ">
            <!-- team member -->
            <div class=" col-md-4 txtcenter margin-top10" >
                            <div class="padding-eighteen bg-black-light-rgba tz-background-color border-radius-8">
                                <div class="pricing-box border-radius-8 tz-background-color">
                                    <!-- pricing title -->
                                    <div class="pricing-title border-radius-6 bg-white text-center tz-background-color margin-fifteen-bottom">
                                        <div class="margin-eight-bottom"><i class="fa ti-user title-extra-large-2 text-light-gray margin-five-bottom tz-icon-color"></i></div>
                                        <h3 class="alt-font text-large text-dark-gray tz-text">PERSONAL</h3>
                                        <h4 class="title-extra-large-2 sm-title-extra-large-2 alt-font font-weight-400 text-pink tz-text">$250</h4>
                                        <div class="text-small2 alt-font no-margin-bottom tz-text"> <p class="no-margin-bottom"> PER EVERY YEAR</p> </div>
                                    </div>
                                    <!-- end pricing title -->
                                    <!-- pricing features -->
                                    <div class="pricing-features">
                                        <ul class="margin-twenty-three-bottom xs-margin-fifteen-bottom alt-font text-middle-gray list-style-none">
                                            <li><span class="tz-text">1 GB Photos</span></li>
                                            <li><span class="tz-text">Secure Online Transfer</span></li>
                                            <li><span class="tz-text">Unlimited Styles</span></li>
                                            <li><span class="tz-text">Customer Service</span></li>
                                            <li><span class="tz-text">Manual Backup</span></li>
                                        </ul>
                                        <!-- pricing action -->
                                        
                                        <!-- end pricing action -->
                                    </div>
                                    <!-- end pricing features -->
                                </div>
                            </div>
                        </div>
            <!-- end team member -->
            <!-- team member -->
          				 <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 margin-top10 " >
                            <div class=" padding-nine   bg-black-light-rgba tz-background-color xs-padding-eleven border-radius-8 col-lg-12  margin-top25">
                                <h5 class="font-weight-100 md-padding-fourteen text-white display-block tz-text margin-six-bottom txtcenter font-size:2.2em" >PAGA CON TARJETA</h5>
                                  <!-- contact form -->
                                <form>
                                  <div class="row">
                                  	<div class="form-group">
										<div class=" col-md-6 ">
											<label for="profile-form-name">Nombre del titular:</label>
											<input name="holder_name" type="text" placeholder="Como aparece en la tarjeta"  class="form-control border-radius-8" id="card_name">
										</div>
											<div class="col-md-6">
												<label for="profile-form-tarjet-number">Número de tarjeta:</label>
												<input name="card_number" type="number" autocomplete="off" data-openpay-card="card_number" class="form-control border-radius-8" id="card_number">
											</div>
								     </div>
										<div class="form-group">
											<div class="col-md-3">
												<label for="profile-form-expire-date">Fecha de expiración:</label>
												<input name="expiration_month" maxlength="2" type="text" placeholder="Mes" data-openpay-card="expiration_month" class="form-control border-radius-8" id="card_expiration_month">
											</div>
											<div class="col-md-3">
												<label  for="profile-form-expire">Año</label>
												<input name="expiration_year" maxlength="2" type="text" placeholder="Año" data-openpay-card="expiration_year" class="form-control border-radius-8" id="card_expiration_year">
											</div>
												<div class="col-md-3">
													<label for="profile-form-tarjet-number">CVC:</label>
													<input name="cvv2" type="text" placeholder="3 o 4 dígitos" maxlength="4" autocomplete="off" data-openpay-card="cvv2" class="form-control border-radius-8" id="card_cvc">
												</div>
												<div class="col-md-3">
													<label for="profile-form-telephone">Teléfono:</label>
													<input name="user_telephone" placeholder="Teléfono" value="" type="number" class="form-control border-radius-8" id="user_telephone">
												</div>
                               			</div>
                                 </div>
                                  <img  alt="cards" src="<?php echo base_url("assets/images/bg-image/tarjetas.webp");?>">
                              			<a class=" btn-medium btn btn-circle bg-blue text-white no-letter-spacing " data-toggle="modal" data-target="#miModal" href="#"><span class="tz-text">Pagar</span></a> 
                               </form>
                                  <!-- end contact form -->
                        
  					  </div>
				</div>
			</div>
			<div class="modal" id="miModal"  >

                <div class="modal-dialog" role="document">
                    <div class="bg-dark-blue ">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                                    
                        </div>
                        <div  class="bg-dark-blue text-center modal-body">
                                    
                        	<div class=" bg-dark-blue col_full">
                                <p>¡Su compra ha sido exitosa, gracias !.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default " data-dismiss="modal">Cerrar</button>
                       </div>
                   </div>
               </div>
			 </div>
		</div>
     
</section>    <?php include('footer.php'); ?></div>        
