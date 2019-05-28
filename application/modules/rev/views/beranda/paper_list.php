
<section class="blog">
<div class="container">
    <div class="row">

        <div class="col-md-12">

        <div class="row">
            <div class="col-md-12 text-center pb20">
                <h2>Reviewer<br><strong>Dashboard</strong></h2>
            </div>
        </div>

        <?php
            $this->load->view('rev/beranda/menu_dashboard')
        ?>


        <div class="row mt40">
            <div class="col-md-12">

                
                <!-- Panel -->
                <h3>
                    <span class="label label-primary"></span>
                    <strong>Belum di review</strong>
                </h3>
                <table class="table table-bordered dataTables">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th>Judul Paper</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no=1; foreach($paper as $row){ ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td>
                                <strong><a href="<?= base_url('rev/beranda/detailPaper/'.$row->id_paper) ?>"><?= $row->judul ?></a></strong><br>
                                <i class="fa fa-user"></i> <?= $row->judul ?> -
                                <i class="fa fa-building"></i> <?= $row->institusi ?> -
                            </td>
                        </tr>
                        <?php $no++; } ?>

                    </tbody>
                </table>
                <!-- End Panel -->

            </div>
        </div>






        

        </div>

        <!-- Sidebar -->
        <!-- End Sidebar -->

    </div>
</div>
</section>
