
<!-- Services -->
<section id="services" class="pt100 pb90">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb20">
                <h2 class="">Important<br><strong>Date</strong></h2>
            </div>

        <table class="table">
            <thead>
                <tr>
                    <th width="70px">No</th>
                    <th>Kegiatan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>

                <?php $no=1; foreach($tgl_p as $row){ ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row->deskripsi ?></td>
                    <td><?= longdate_indo($row->tanggal) ?></td>
                </tr>
                <?php $no++; } ?>

            </tbody>
        </table>
            

        </div>
    </div>
</section>
<!-- End Services -->

