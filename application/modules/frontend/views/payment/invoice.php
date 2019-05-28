<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="img/assets/favicon.png" rel="icon" type="image/png">
        <link href="<?php echo base_url('assets/frontend/') ?>css/init.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="<?php echo base_url('assets/frontend/') ?>css/theme.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/frontend/') ?>css/colors/purple.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:400,100,200,300%7CHind:400,300" rel="stylesheet" type="text/css">
    </head>
    <body data-fade-in="true" style="background-color=#eff5f5">

<div class="row">
    <div class="col-md-12">
        <div class="container">
            <div class="text-center">

                <h3><strong><?= $seminar->tema_seminar ?></strong></h3> <br>
                <hr>
                <h5><strong>Payment Receipt</strong></h5>
                <p>             
                    Panitia penyelenggara Seminar Nasional tentang <?= $seminar->tema_seminar ?> telah menerima pembayaran Anda. Ini detail pembayaran Anda:
                </p>
            </div>

                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td> : <?= $payment->nama_no_title ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td> : <?= $payment->jumlah_bayar ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td> : <?= $payment->tgl_pembayaran ?></td>
                    </tr>
                    <tr>
                        <td>Metode</td>
                        <td> : Transfer</td>
                    </tr>
                    <tr>
                        <td>Bank Anda</td>
                        <td> : <?= $payment->dari_bank ?></td>
                    </tr>
                </table>
                <div class="text-right">
                <p>
                    <p>Terima Kasih</p>
                    <p>Salam</p>
                    <img src="<?= base_url('assets/uploads/images/konfigurasi/ttd.png') ?>" alt="" width="10%">
                    <p><strong>Lorem Ipsum</strong></p>
                </p>
                <p>
                </div>
                
        </div>
    </div>
</div>
<script>
    window.print();
</script>

</body>
</html>