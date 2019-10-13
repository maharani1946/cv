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
                <h3 class="card-title">Edit Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $info->id ?>" />
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" value="<?php echo $info->nama ?>" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="info">Info</label>
                    <input value="<?php echo $info->info ?>" type="text" class="form-control <?php echo form_error('info') ? 'is-invalid':'' ?>" id="info" placeholder="Info" name="info">
                    <div class="invalid-feedback">
                        <?php echo form_error('info') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="text" value="<?php echo $info->foto ?>" class="form-control <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" placeholder="Foto" name="foto">
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
