      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo site_url('c_admin/tampil_beli')?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Data Pembelian</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo site_url('c_admin/home')?>Home</a></div>
         
              <div class="breadcrumb-item">Tambah Data Pembelian</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Tambah Data Pembelian</h2>
           

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Masukkan Data Pembelian</h4>
                  </div>
                   <?php foreach($user as $u){ ?>
                 <?php echo form_open_multipart('c_admin/update_beli');?>
                  <div class="card-body">
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Pembelian</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="id_beli" readonly value="<?php echo $u->id_beli ?>" class="form-control">
                      </div>
                    </div>
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Barang</label>
                      <div class="col-sm-12 col-md-7">
                        <select name="nama_barang" class="form-control selectric">
                          <option> <?=$u->nama_barang;?> </option>
                      
                                                <?php                                
                                                   foreach ($dd_bidang as $row) {  
                                                      echo "<option value='".$row->nama_barang."'>".$row->nama_barang."</option>";
                                                }
                                                       echo"
                                            </select>"
                                                ?>
                        </select>
                      </div>
                    </div>

                   
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Pembelian</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="jumlah_pembelian"   value="<?php echo $u->jumlah_pembelian ?>" class="form-control">
                      </div>
                    </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Total Harga</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="total" value="<?php echo $u->total ?>" class="form-control">
                      </div>
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Ubah Data</button>
                      </div>
                      <?php } ?>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>