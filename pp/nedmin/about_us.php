<?php

include "header.php";

$check_profile = $db->prepare("SELECT * FROM personal_info ");
$check_profile->execute();
$control_profile = $check_profile->rowCount();

$check_skill = $db->prepare("SELECT * FROM skills");
$check_skill->execute();
$control_skill = $check_skill->rowCount();

$check_about = $db->prepare("SELECT * FROM about_me");
$check_about->execute();
$control_about = $check_about->rowCount();

$fetch_profile = $db->prepare("SELECT * FROM personal_info WHERE personal_id=1");
$fetch_profile->execute();
$fetch_p = $fetch_profile->fetch(PDO::FETCH_ASSOC);

$fetch_skill = $db ->prepare("SELECT * FROM skills WHERE skill_id=1");
$fetch_skill->execute();
$fetch_s=$fetch_skill->fetch(PDO::FETCH_ASSOC);

$fetch_about = $db ->prepare("SELECT * FROM about_me WHERE about_id=1");
$fetch_about->execute();
$fetch_a=$fetch_about->fetch(PDO::FETCH_ASSOC);


?>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Hakkımda Sayfası</h3>
      </div>


    </div>
    <div class="clearfix"></div>
  
    <?php if (@$_GET['insert_p'] == 'ok') { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <strong>Başarılı!</strong> Veriler başarılı şekilde eklendi.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } elseif (@$_GET['insert_p'] == 'no') { ?>
      <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <strong>Hata!</strong> Bir sorunla karşılaşıldı.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } elseif (@$_GET['update_p'] == 'ok') { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <strong>Başarılı!</strong> Veriler başarılı şekilde güncellendi.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } elseif (@$_GET['update_p'] == 'no') { ?>
      <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <strong>Hata!</strong> Bir sorunla karşılaşıldı.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } ?>
    <?php if (@$_GET['insert_s'] == 'ok') { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <strong>Başarılı!</strong> Veriler başarılı şekilde eklendi.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } elseif (@$_GET['insert_s'] == 'no') { ?>
      <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <strong>Hata!</strong> Bir sorunla karşılaşıldı.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } elseif (@$_GET['update_s'] == 'ok') { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <strong>Başarılı!</strong> Veriler başarılı şekilde güncellendi.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } elseif (@$_GET['update_s'] == 'no') { ?>
      <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <strong>Hata!</strong> Bir sorunla karşılaşıldı.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } ?>
    

    <?php if (@$_GET['insert_a'] == 'ok') { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <strong>Başarılı!</strong> Veriler başarılı şekilde eklendi.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } elseif (@$_GET['insert_a'] == 'no') { ?>
      <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <strong>Hata!</strong> Bir sorunla karşılaşıldı.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } elseif (@$_GET['update_a'] == 'ok') { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <strong>Başarılı!</strong> Veriler başarılı şekilde güncellendi.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } elseif (@$_GET['update_a'] == 'no') { ?>
      <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <strong>Hata!</strong> Bir sorunla karşılaşıldı.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
    <?php } ?>
    

      <div class="row">
      <form class="form-horizontal form-label-left" action="process.php" method="POST">
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




                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">İsim</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" name="namee" value="<?php echo $fetch_p['namee'] ?>" >

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Doğum Tarihi</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" name="birthday" value="<?php echo $fetch_p['birthday'] ?>" >

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Memleket</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" name="province" value="<?php echo $fetch_p['province'] ?>" >

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">İş</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" name="job" value="<?php echo $fetch_p['job'] ?>" >

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Üniversite</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" name="uni" value="<?php echo $fetch_p['uni'] ?>" >

                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Web Site</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" name="web_site" value="<?php echo $fetch_p['web_site'] ?>" >

                  </div>
                </div>
                <div class="ln_solid"></div>

                <div class="form-group">
                  <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Temizle</button>
                    <?php if ($control_profile == 1) { ?>
                      <button type="submit" class="btn btn-success" name="update_profile">Güncelle</button>
                    <?php } else { ?>
                      <button type="submit" class="btn btn-warning" name="insert_profile">Ekle</button>
                    <?php } ?>
                  </div>
                </div>

    </form>
  </div>
</div>
</div>
<!-- /form input mask -->

<form class="form-horizontal form-label-left" action="process.php" method="POST">
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
        
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Sayfa Başlığı</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" value="<?php echo $fetch_s['skill_title'] ?>" name="skill_title"  >

            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Sayfa Açıklaması</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <textarea id="textarea" required="required" name="content" class="form-control col-md-7 col-xs-12" rows="5"><?php echo $fetch_s['content'] ?></textarea>

            </div>
          </div>


          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">1. Yetenek
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="first_skill" value="<?php echo $fetch_s['first_skill'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">2. Yetenek
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="second_skill" value="<?php echo $fetch_s['second_skill'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">3. Yetenek
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="third_skill" value="<?php echo $fetch_s['third_skill'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">4. Yetenek
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="fourth_skill" value="<?php echo $fetch_s['fourth_skill'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">5. Yetenek
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="fifth_skill" value="<?php echo $fetch_s['fifth_skill'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <hr>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">1. Sayaç
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="first_counter" value="<?php echo $fetch_s['first_counter'] ?>"  required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">2. Sayaç
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="second_counter" value="<?php echo $fetch_s['second_counter'] ?>"  required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">3. Sayaç
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="third_counter" value="<?php echo $fetch_s['third_counter'] ?>"  required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">4. Sayaç
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="fourth_counter" value="<?php echo $fetch_s['fourth_counter'] ?>"  required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">5. Sayaç
            </label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="fifth_counter" value="<?php echo $fetch_s['fifth_counter'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="ln_solid"></div>

          <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Temizle</button>
              <?php
              if ($control_skill == 1) { ?>
                <button type="submit" class="btn btn-success" name="update_skills">Güncelle</button>
              <?php } else { ?>
                <button type="submit" class="btn btn-warning" name="insert_skills">Ekle</button>
              <?php } ?>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- /form input mask -->

  
  
  
  <form class="form-horizontal form-label-left" action="process.php" method="POST">
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
         

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Sayfa Başlığı</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" value="<?php echo $fetch_a['about_title'] ?>" name="about_title">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Biyografi</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <textarea id="textarea" required="required" name="bio" class="form-control col-md-7 col-xs-12" rows="5"> <?php echo $fetch_a['bio'] ?></textarea>

              </div>
            </div>
            <div class="ln_solid"></div>


            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Cv İndir</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="file" class="form-control" value="<?php echo $fetch_a['cv'] ?>" name="cv">

              </div>
            </div>


            <div class="ln_solid"></div>

            <div class="form-group">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Temizle</button>
                <?php
                if ($control_about == 1) { ?>
                  <button type="submit" class="btn btn-success" name="update_about">Güncelle</button>
                <?php } else { ?>
                  <button type="submit" class="btn btn-warning" name="insert_about">Ekle</button>
                <?php } ?>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!-- /form input mask -->




  </div>
</div>
</div>




<?php
include "footer.php";
?>