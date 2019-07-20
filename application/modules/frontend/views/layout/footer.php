<footer id="footer" class="footer style-1 dark">


    <a href="<?= base_url('reviewer') ?>"><strong>Reviewer Log</strong></a>
    <a href="<?= base_url('admin') ?>" target="_blank"><strong>Admin Log</strong></a>
    <p>develope by <a href="https://www.instagram.com/aswar_kasim/" target="blank"> arksdev</a></p>

    <!-- Back To Top Button -->
    <span><a class="scroll-top"><i class="ion-chevron-up"></i></a></span>

</footer>
<!-- End Footer -->

<script src="<?php echo base_url('assets/frontend/') ?>js/jquery.js"></script>
<script src="<?php echo base_url('assets/frontend/') ?>js/init.js"></script>
<script src="<?php echo base_url('assets/frontend/') ?>js/scripts.js"></script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo base_url() ?>assets/datatables/dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.dataTables').DataTable();
    });
</script>

<script>
    CKEDITOR.replace("editor");
</script>

</body>

</html>