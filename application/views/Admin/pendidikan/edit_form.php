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
                <h3 class="card-title">Edit Pendidikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/pendidikan/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $pendidikan->id ?>" />
                <div class="form-group">
                    <label for="waktu_pen">Waktu Pendidikan </label>
                    <input type="text" value="<?php echo $pendidikan->waktu_pen ?>" class="form-control <?php echo form_error('waktu_pen') ? 'is-invalid':'' ?>" id="waktu_pen" placeholder="Waktu Pendidikan" name="waktu_pen">
                    <div class="invalid-feedback">
                        <?php echo form_error('waktu_pen') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="ket_pen">Keterangan Pendidikan</label>
                    <input value="<?php echo $pendidikan->ket_pen ?>" type="text" class="form-control <?php echo form_error('ket_pen') ? 'is-invalid':'' ?>" id="ket_pen" placeholder="Keterangan Pendidikan" name="ket_pen">
                    <div class="invalid-feedback">
                        <?php echo form_error('ket_pen') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_pen">Nama Pendidikan</label>
                    <input type="text" value="<?php echo $pendidikan->nama_pen ?>" class="form-control <?php echo form_error('nama_pen') ? 'is-invalid':'' ?>" id="nama_pen" placeholder="Nama Pendidikan" name="nama_pen">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_pen') ?>
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
