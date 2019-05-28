<!-- Card -->

<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h2 class="panel-title"><?php echo $title; ?></h2>
  </header>
  <div class="panel-body">

<div class="col-md-12">
<div class="card">
<div class="card-body">

<div class="row">
  <div class="col-md-6">

    <?php

      echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>');

      if(isset($error)){
        echo '<div class="alert alert-warning">';
        echo $error;
        echo '</div>';
      }

      echo form_open_multipart('admin/user/addReviewer')

    ?>
    <form class="forms-sample" method="post">
      <div class="form-group">
        <label for="exampleInputName1">Nama</label>
        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail3">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword4">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword4">Retype Password</label>
        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="re_password">
      </div>
       <div class="form-group">
        <label for="exampleInputCity1">Status</label>
        <select name="is_aktif" id="" class="form-control">
          <option value="1">Aktif</option>
          <option value="0">Non Aktif</option>
        </select>
      </div>
      <br>
      <button type="submit" class="btn btn-success mr-2">Simpan</button>
      <a href="<?php echo base_url('admin/user/reviewer') ?>" class="btn btn-danger">Batal</a>
    </form>
    <?php echo form_close(); ?>
  </div>

  <div class="col-md-4">
    <h5>Petunjuk !</h5>
    <p>1. Lengkapi semua form kemudian tekan simpan</p>
    <p>2. Tanda * menandakan wajib diisi</p>
  </div>
</div>

</div>
</div>
</div>


</div>
</section>