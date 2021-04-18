<?php
include "header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar Sayfası</h3>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Sayfa Başlığı
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="site_title"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="title"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Şifre
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password"  name="password"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Şifre Tekrarı
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password"  name="password2"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Profil fotoğrafı
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file"  name="password"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Temizle</button>
                          <button  type="submit" class="btn btn-success" name="contact_save" >Gönder</button>
                        </div>
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