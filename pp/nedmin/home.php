<?php
include "header.php";
$check_home = $db->prepare("SELECT * FROM home");
$check_home->execute();
$control_home = $check_home->rowCount();
$fetch_home = $db->prepare("SELECT * FROM home WHERE home_id=1");
$fetch_home->execute();
$fetch = $fetch_home->fetch(PDO::FETCH_ASSOC);
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Home Sayfası</h3>
      </div>


    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <div class="clearfix"></div>
          </div>
          <?php if (@$_GET['insert_h'] == 'ok') { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <strong>Başarılı!</strong> Veriler başarılı şekilde eklendi.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['insert_h'] == 'no') { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <strong>Hata!</strong> Bir sorunla karşılaşıldı.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['update_h'] == 'ok') { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <strong>Başarılı!</strong> Veriler başarılı şekilde güncellendi.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['update_h'] == 'no') { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <strong>Hata!</strong> Bir sorunla karşılaşıldı.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } ?>


          <form class="form-horizontal form-label-left" action="process.php" method="POST">


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="facebook" value="<?php echo $fetch['facebook'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Instagram
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="instagram" value="<?php echo $fetch['instagram'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Twitter
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="twitter" value="<?php echo $fetch['twitter'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Youtube
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="youtube" value="<?php echo $fetch['youtube'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">LinkedIn
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="linkedin" value="<?php echo $fetch['linkedin'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>

            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Temizle</button>
                <?php
                if ($control_home == 1) { ?>
                  <button type="submit" class="btn btn-success" name="update_home">Güncelle</button>
                <?php } else { ?>
                  <button type="submit" class="btn btn-warning" name="insert_home">Ekle</button>
                <?php } ?>
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