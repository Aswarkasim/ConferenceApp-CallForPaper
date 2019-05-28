<div class="row">
  <div class="col-md-4">
    <section class="panel panel-primary">
    	<header class="panel-heading">
    		<div class="panel-actions">
    			<a href="#" class="fa fa-caret-down"></a>
    			<a href="#" class="fa fa-times"></a>
    		</div>

    		<h2 class="panel-title"><b><?= $title ?></b></h2>
    	</header>
    	<div class="panel-body" style="display: block;">
    	   <?php include('profil_peserta.php') ?>
    	</div>
    </section>
  </div>

  <?php if ($peserta->partisipan == 'presenter') { ?>
  <div class="col-md-8">

      <?php include('abstrak_peserta.php') ?>

  </div>
<?php  }  ?>
</div>
