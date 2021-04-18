<?php
session_start();
include 'connect.php';
include 'kontrol.php';
include "header.php";
?>
         <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hakkımda Sayfası</h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
            

              
              <div class="row">
              
              <!-- form input mask -->
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profil</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sayfa Başlığı</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="page_title_2" >
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">İsim</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="isim" >
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Doğum Tarihi</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control"name="doğum_tarihi">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Memleket</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="memleket" >
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">İş</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="iş" >
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Üniversite</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control"name="üniversite">
                         
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Web Site</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="web_site">
                         
                        </div>
                      </div>
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Temizle</button>
                          <button  type="submit" class="btn btn-success" name="about_us_save" >Gönder</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->


              <div class="row">
              <!-- form input mask -->
              <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom: -20%">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Yetenek</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sayfa Başlığı</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="page_title" >
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sayfa Açıklaması</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <textarea id="textarea" required="required" name="textarea2" class="form-control col-md-7 col-xs-12"rows="5"></textarea>
                          
                        </div>
                       </div>
                         
                


                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >Duygu Yönetimi
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="Duygu_yönetimi"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >Sabır
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="Sabır"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >İtaat
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="İtaat"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >Geri Bildirim
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="Geri_Bildirim"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >İrade
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="İrade"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <hr>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >Duygu Yönetimi Sayaç
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="Duygu_Yönetimi_Sayaç "   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >Sabır Sayaç
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="Sabır_Sayaç"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >İtaat Sayaç
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="İtaat_Sayaç"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >Geri Bildirim Sayaç
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="Geri_Bildirim_Sayaç"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" >İrade Sayaç
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name="İrade_Sayaç"   required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Temizle</button>
                          <button  type="submit" class="btn btn-success" name="about_us_save" >Gönder</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->
            
              
              <div class="tr">
              <!-- form input mask -->
              
              
              <div class="col-md-6 col-sm-12 col-xs-12"> 
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Beni Tanıyın</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sayfa Başlığı</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="page_title" >
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Biyografi</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <textarea id="textarea" required="required" name="textarea2" class="form-control col-md-7 col-xs-12"rows="5"></textarea>
                          
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                    
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Cv İndir</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="Cv_İndir" >
                          
                        </div>
                      </div>

                    
                       <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Temizle</button>
                          <button  type="submit" class="btn btn-success" name="about_us_save" >Gönder</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->





         </div>
         </div>
              






<?php
include "footer.php";
?>
