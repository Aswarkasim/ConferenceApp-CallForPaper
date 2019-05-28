<!-- Modal Primary -->
<a class="mb-xs mt-xs mr-xs modal-basic btn btn-success" href="#modalAddSubtema">
<i class="fa fa-plus"></i> Tambah</a>

<div id="modalAddSubtema" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Tambah Subtema</h2>
        </header>
        <div class="panel-body">
        <?php 
        
            echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ','</div>'); 
        
            echo form_open('admin/subtema');
        ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputName1">File<small class="text text-danger">*</small></label>
                    <input type="text" class="form-control" name="subtema">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputName1">Reviewer<small class="text text-danger">*</small></label><br>
                    <select name="id_reviewer" id="" class="form-control">
                        <option value="">---Pilih Reviewer----</option>\
                        <?php foreach($reviewer as $row){ ?>
                        <option value="<?= $row->id_reviewer ?>"><?= $row->nama_reviewer ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Icon<small class="text text-danger">*</small></label>
                    <input type="text" class="form-control" name="icon">
                </div>
                

                <div class="form-group">
                    <label>Deskkripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <input type="submit" value="Simpan" class="btn btn-success">
                    <button class="btn btn-default modal-dismiss">Batal</button>
                </div>
            </div>
            </form>

            <?php echo form_close() ?>
        </footer>
    </section>
</div>

