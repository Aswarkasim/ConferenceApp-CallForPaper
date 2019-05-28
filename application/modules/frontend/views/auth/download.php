<section class="blog">
  <div class="container">
      <div class="row">

          <div class="col-md-9">

            <div class="row">
                <div class="col-md-12 text-center pb20">
                    <h2>Download<strong> File</strong></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

        <?php 
            $judul = $this->db->get_where('tbl_file_pendukung', array('is_parent' => 0));
            foreach($judul->result() as $judul ){
                $sub_judul = $this->db->get_where('tbl_file_pendukung', array('is_parent' => $judul->id_file));
                if($sub_judul->num_rows()>0){
                    echo '<h4><strong>'.$judul->nama_file.'</strong></h4>';
                    echo '<ul>';
                    foreach($sub_judul->result() as $sub){
                        echo '<li><a href="'.base_url('frontend/home/download_file/').$sub->file.'">'.$sub->nama_file.'</a></li>';
                    }
                    echo '</ul>';
                }
            }
        ?>


                </div>
            </div>

          </div>

          <!-- Sidebar -->
            <?php  $this->load->view('frontend/home/sidebar') ?>
          <!-- End Sidebar -->

      </div>
  </div>
</section>
