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

      echo form_open_multipart('admin/user/edit/'.$user->id_user)

    ?>
    <form class="forms-sample" method="post">
      <div class="form-group">
        <label for="exampleInputName1">Nama</label>
        <input value=<?=  $user->nama  ?> type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama">
      </div>
      <div class="form-group">
        <label for="exampleInputName1">Username</label>
        <input value=<?=  $user->username  ?> type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="username">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail3">Email</label>
        <input value=<?=  $user->email  ?> type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword4">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
        <small>Kosongkan jika tidak ada perubahan</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword4">Retype Password</label>
        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="re_password">
      </div>
      <div class="form-group">
        <label for="exampleInputCity1">Akses Level</label>
        <select name="akses_level" id="" class="form-control">
          <option>--Akses Level--</option>
          <option value="Super Admin" <?php if(($user->akses_level)=="Admin"){ echo "selected"; } ?>>Super Admin</option>
          <option value="Admin" <?php if(($user->akses_level)=="Admin"){ echo "selected"; } ?>>Admin</option>
          <option value="Reviewer"  <?php if(($user->akses_level)=="User"){ echo "selected"; } ?>>Reviewer</option>
        </select>
      </div>
       <div class="form-group">
        <label for="exampleInputCity1">Status</label>
        <select name="status" id="" class="form-control">
          <option value="">--Status--</option>
          <option value="Aktif" <?php if(($user->status)=="Aktif"){ echo "selected"; } ?>>Aktif</option>
          <option value="Non Aktif" <?php if(($user->status)=="Non Aktif"){ echo "selected"; } ?>>Non Aktif</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleTextarea1">Keterangan</label>
        <textarea class="form-control" id="exampleTextarea1" rows="2" name="keterangan"></textarea>
      </div><br>
      <button type="submit" class="btn btn-success mr-2">Simpan</button>
      <a href="<?php echo base_url('admin/user') ?>" class="btn btn-danger">Batal</a>
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