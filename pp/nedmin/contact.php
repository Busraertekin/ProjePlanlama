<?php

include "header.php";
?>
    
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İletişim Sayfası</h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
             
                    <div class="clearfix"></div>
                  </div>
                  

                    <form class="form-horizontal form-label-left" novalidate>
                      
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa başlığı 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text">
                        </div>
                      </div>
                      </br>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Konum
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="Konum"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Email
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel"  name="Email"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Telefon
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email"  name="Telefon"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        </br>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Facebook
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="Facebook"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Instagram
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="Instagram"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Twitter
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="Twitter"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Youtube
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="Youtube"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >LinkedIn
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="LinkedIn "   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                       </div>


                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Copyright
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="LinkedIn "   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      
                      
                      
                      
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Temizle</button>
                          <button  type="submit" class="btn btn-success" name="contact_save" >Gönder</button>
                        </div>
                      </div>
                    </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


</div>
<?php
include "footer.php";
?>