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
                <h3 class="card-title">Edit Kemampuan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/skill/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $skill->id ?>" />
                  <div class="form-group">
                    <label for="nama_skill">Nama Kemampuan</label>
                    <input type="text" value="<?php echo $skill->nama_skill ?>" class="form-control <?php echo form_error('nama_skill') ? 'is-invalid':'' ?>" id="nama_skill" placeholder="Nama Kemampuan" name="nama_skill">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_skill') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ket_skill">Keterangan Kemampuan</label>
                    <input value="<?php echo $skill->ket_skill ?>" type="text" class="form-control <?php echo form_error('ket_peng') ? 'is-invalid':'' ?>" id="ket_skill" placeholder="Keterangan Kemampuan" name="ket_skill">
                    <div class="invalid-feedback">
                        <?php echo form_error('ket_skill') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="persen">Persen </label>
                    <input type="text" value="<?php echo $skill->persen ?>" class="form-control <?php echo form_error('persen') ? 'is-invalid':'' ?>" id="persen" placeholder="Persen" name="persen">
                    <div class="invalid-feedback">
                        <?php echo form_error('persen') ?>
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
