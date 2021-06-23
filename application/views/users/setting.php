

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kullanıcı Ayarları
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
        <li class="active">Ayarlar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">


          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bilgileri Güncelle</h3>
            </div>
            <!-- /.box-header -->
            <form role="form" action="<?php base_url('users/setting') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="username">Kullanıcı Adı</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı Adı" value="<?php echo $user_data['username'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email">Email Adresi</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Adresi" value="<?php echo $user_data['email'] ?>" autocomplete="off">
                </div>                

                <div class="form-group">
                  <label for="fname">Ad</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Ad" value="<?php echo $user_data['firstname'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="lname">Soyad</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Soyad" value="<?php echo $user_data['lastname'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="phone">Telefon Numarası</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefon Numarası" value="<?php echo $user_data['phone'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="gender">Cinsiyet</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="male" value="1" <?php if($user_data['gender'] == 1) {
                        echo "checked";
                      } ?>>
                      Erkek
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="2" <?php if($user_data['gender'] == 2) {
                        echo "checked";
                      } ?>>
                      Kadın
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Şifreyi değiştirmek istemiyorsanız aşağıdaki kutucukları boş bırakın.
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Şifre</label>
                  <input type="text" class="form-control" id="password" name="password" placeholder="Şifre" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="cpassword">Şifreyi tekrar girin</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Şifreyi tekrar girin" autocomplete="off">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>
                <a href="<?php echo base_url('users/') ?>" class="btn btn-warning">Geri</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
       
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
