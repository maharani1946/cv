<!DOCTYPE html>
<html lang="en">

  <?php 
    $this->load->view("admin/partials/head.php")
  ?>

<body id="page-top">

  <?php 
    $this->load->view("admin/partials/navbar.php")
  ?>

  <div id="wrapper">

    <!-- Sidebar -->
  <?php 
    $this->load->view("admin/partials/sidebar.php")
  ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
  <?php 
    $this->load->view("admin/partials/breadcrumb.php")
  ?>

        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $biodata->id ?>" />
                <div class="form-group">
                    <label for="resume">Resume</label>
                    <input type="text" value="<?php echo $biodata->resume ?>" class="form-control <?php echo form_error('resume') ? 'is-invalid':'' ?>" id="resume" placeholder="Resume" name="resume">
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input value="<?php echo $biodata->nama ?>" type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <input type="text" value="<?php echo $biodata->jk ?>" class="form-control <?php echo form_error('jk') ? 'is-invalid':'' ?>" id="jk" placeholder="Jenis Kelamin" name="jk">
                    <div class="invalid-feedback">
                        <?php echo form_error('jk') ?>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="ttl">TTL</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                    <input type="text" value="<?php echo $biodata->ttl ?>" class="form-control <?php echo form_error('ttl') ? 'is-invalid':'' ?>" data-inputmask="'alias': 'dd-mm-yyyy'" name="ttl" data-mask>
                    <div class="invalid-feedback">
                        <?php echo form_error('ttl') ?>
                    </div>
                    
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" value="<?php echo $biodata->alamat ?>" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" placeholder="Alamat" name="alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" value="<?php echo $biodata->agama ?>" class="form-control <?php echo form_error('agama') ? 'is-invalid':'' ?>" id="agama" placeholder="Agama" name="agama">
                    <div class="invalid-feedback">
                        <?php echo form_error('agama') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" value="<?php echo $biodata->email ?>" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="email" name="email">
                    <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="wa">WhatsApp</label>
                    <input type="text" value="<?php echo $biodata->wa ?>" class="form-control <?php echo form_error('wa') ? 'is-invalid':'' ?>" id="wa" placeholder="WhatsApp" name="wa">
                    <div class="invalid-feedback">
                        <?php echo form_error('wa') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="text" value="<?php echo $biodata->foto ?>" class="form-control <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" placeholder="foto" name="foto">
                    <div class="invalid-feedback">
                        <?php echo form_error('foto') ?>
                    </div>
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content-wrapper -->
    
      <!-- Sticky Footer -->
  <?php 
    $this->load->view("admin/partials/footer.php")
  ?>

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <?php 
    $this->load->view("admin/partials/scrolltop.php")
  ?>

  <!-- Logout Modal-->
  <?php 
    $this->load->view("admin/partials/modal.php")
  ?>

  <!-- Bootstrap core JavaScript-->
  <?php 
      $this->load->view("admin/partials/js.php")
  ?>

</body>

</html>
