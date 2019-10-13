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
                <h3 class="card-title">Edit Pengalaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/pengalaman/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $pengalaman->id ?>" />
                <div class="form-group">
                    <label for="waktu_peng">Waktu Pengalaman </label>
                    <input type="text" value="<?php echo $pengalaman->waktu_peng ?>" class="form-control <?php echo form_error('waktu_peng') ? 'is-invalid':'' ?>" id="waktu_peng" placeholder="Waktu Pengalaman" name="waktu_peng">
                    <div class="invalid-feedback">
                        <?php echo form_error('waktu_peng') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_peng">Nama Pengalaman</label>
                    <input type="text" value="<?php echo $pengalaman->nama_peng ?>" class="form-control <?php echo form_error('nama_peng') ? 'is-invalid':'' ?>" id="nama_peng" placeholder="Nama Pengalaman" name="nama_peng">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_peng') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ket_peng">Keterangan Pengalaman</label>
                    <input value="<?php echo $pengalaman->ket_peng ?>" type="text" class="form-control <?php echo form_error('ket_peng') ? 'is-invalid':'' ?>" id="ket_peng" placeholder="Keterangan Pengalaman" name="ket_peng">
                    <div class="invalid-feedback">
                        <?php echo form_error('ket_peng') ?>
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
