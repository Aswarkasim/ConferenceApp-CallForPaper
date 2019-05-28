<footer id="footer" class="footer style-1 dark">

    <a href="index.html"><img src="<?php echo base_url('assets/frontend/') ?>img/assets/footer-logo.png" alt="#" class="mr-auto img-responsive"></a>
    <ul>
        <li><a href="https://www.twitter.com/" target="_blank" class="color"><i class="ion-social-twitter"></i></a></li>
        <li><a href="https://www.facebook.com/" target="_blank" class="color"><i class="ion-social-facebook"></i></a></li>
        <li><a href="https://www.linkedin.com/" target="_blank" class="color"><i class="ion-social-linkedin"></i></a></li>
        <li><a href="https://www.pinterest.com/" target="_blank" class="color"><i class="ion-social-pinterest"></i></a></li>
        <li><a href="https://plus.google.com/" target="_blank" class="color"><i class="ion-social-googleplus"></i></a></li>
    </ul>
    <a href="<?= base_url('reviewer') ?>"><strong>Reviewer Log</strong></a>
    <a href="<?= base_url('admin') ?>" target="_blank"><strong>Admin Log</strong></a>
    <p>develope by arksdev</p>

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
    $(document).ready( function () {
        $('.dataTables').DataTable();
    } );
</script>

<script>
    CKEDITOR.replace("editor");
</script>

</body>
</html>
