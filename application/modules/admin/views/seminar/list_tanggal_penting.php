<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h2 class="panel-title">Tanggal Penting</h2>
  </header>
  <div class="panel-body">

      <form class="" action="" method="post">
        <div class="form-group">
          <label class="col-sm-3 control-label">Deskripsi</label>
          <div class="col-sm-9">
            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Tanggal</label>
          <div class="col-sm-9">
            <input type="date" name="tanggal" class="form-control" placeholder="Icon" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label"></label>
          <div class="col-sm-9">
            <button type="button" class="btn btn-primary" name="button"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>

      </form>

      <div class="clearfix"></div><br>
    <table class="table table-responsive table-bordered primary">
    <thead>
      <tr>
        <th width="20px">No</th>
        <th>Deskripsi</th>
        <th width="150px">Tanggal</th>
        <th width="100px"></th>
      </tr>
      </thead>

      <tbody id="targetDataTgl">
      
      </tbody>
    </table>
  </div>
</section>

<script type="text/javascript">

  readDataTglpent();

  function readDataTglpent(){
    $.ajax({
      type:'POST',
      url:'<?php echo base_url()."admin/seminar/readDataTglpent" ?>',
      dataType:'json',
      success:function(data){
        var barisTgl = '';

        for(var i=0; i<data.length;i++){
          barisTgl += '<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+data[i].deskripsi+'</td>'+
                      '<td>'+data[i].tanggal+'</td>'+
                      '<td><button type="button" name="button" class="btn btn-xs btn-warning btn-sm"><i class="fa fa-edit"></i></button> <button type="button" name="button" class="btn btn-xs btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></td>'+
                    '</tr>';
        }

        $('#targetDataTgl').html(barisTgl);
      }
    })
  }
  
  function addTanggal(){
    var deskripsi = $("[name='']")
  }
</script>

