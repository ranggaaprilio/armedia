  <!-- Page Content -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('alert'); ?>"></div>
  <?php $this->load->view('pasien/template/sidebar'); ?>
    <div class="col s8 m8">
      <div class="card white">
        <div class="card-content">
          <span class="card-title">Selamat Datang <?php echo $this->session->userdata('nama'); ?></span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
         <a class="waves-effect waves-light btn-small">Ubah Data Diri</a>
        </div>
      </div>
    </div>
    <div class="col s8 m8">
      <div class="card white">
        <div class="card-content">
          <span class="card-title">Daftar Antrian Hari ini</span>
          <div class="responsive-table">
                            <table class="table table-striped table-bordered" id="table-datatable" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>No Rawat</th>
                                        <th>Tanggal</th>
                                        <th>Dokter</th>
                                        <th>Status</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($daftar as $u) {
                                        ?>
                                        <tr>

                                            <td><?php echo $u->no_rawat ?></td>
                                            <td><?php echo $u->tanggal_daftar; ?></td>
                                            <td><?php
                                                $dokter = $this->Base_model->get_data_where('dokter', 'id_dokter', $u->id_dokter)->row();
                                                echo $dokter->nama;
                                                ?></td>
                                            <td> 
                                                <?php if ($u->status=='1') {?>
                                                    <a class="waves-effect waves-light btn blue"><i class=" fas fa-clock"></i> Waiting</a>
                                                <?php } else {?>
                                                    <button class="btn btn-primary btn-xs"><i class="fas fa-clipboard-check"> Selesai</i></button>
                                                <?php } ?></td>
                                        </tr>
                                    <?php
                                } ?>
                                </tbody>
                            </table>
                        </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  