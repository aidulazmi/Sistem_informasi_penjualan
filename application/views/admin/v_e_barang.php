      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo site_url('c_admin/tampil_barang')?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Data Barang</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo site_url('c_admin/home')?>">Home</a></div>
         
              <div class="breadcrumb-item">Tambah Data Barang</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Tambah Data Barang</h2>
           

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Masukkan Data Barang</h4>
                  </div>
                    <?php foreach($user as $u){ ?>
                 <?php echo form_open_multipart('c_admin/update_barang');?>
                  <div class="card-body">
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Barang</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="id_barang" readonly value="<?php echo $u->id_barang ?>"  class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Barang</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="nama_barang" value="<?php echo $u->nama_barang ?>"  class="form-control">
                      </div>
                    </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Merek</label>
                      <div class="col-sm-12 col-md-7">
                        <select name="Merek" class="form-control selectric">
                          <option value="<?=$u->Merek;?>"> <?=$u->Merek;?></option>
                          <option>Silahkan Pilih</option>
                      
                                                <?php                                
                                                   foreach ($dd_bidang as $row) {  
                                                      echo "<option value='".$row->Merek."'>".$row->Merek."</option>";
                                                }
                                                       echo"
                                            </select>"
                                                ?>

                        </select>
                      </div>
                    </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Masuk</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" name="tanggal_masuk" value="<?php echo $u->tanggal_masuk ?>"  class="form-control">
                      </div>
                    </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Expire</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" name="tgl_expr" value="<?php echo $u->tgl_expr ?>"  class="form-control">
                      </div>
                    </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Stock</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="jumlah_stock" value="<?php echo $u->jumlah_stock ?>"  class="form-control">
                      </div>
                    </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Beli</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="harga_beli"  value="<?php echo $u->harga_beli ?>"  class="form-control">
                      </div>
                    </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Jual</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="harga_jual" value="<?php echo $u->harga_jual ?>"  class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Ubah Data</button>
                      </div>

                    </div>
                        <?php } ?>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>