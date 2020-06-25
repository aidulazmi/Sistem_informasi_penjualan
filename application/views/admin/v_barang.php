      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Barang</h1>
            <div class="section-header-button">
              <a href="<?php echo site_url('c_admin/tambah_barang')?>" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo site_url('c_admin/home')?>">Home</a></div>
              <div class="breadcrumb-item">Barang</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Data Barang</h2>

            <div class="row">
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Seluruh Data Barang</h4>
                  </div>
                  <div class="card-body">
                    <div class="float-right">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                        	<th>ID Barang</th>
                          <th>Nama Barang</th>
                          <th>Merek</th>
                          <th>Tanggal Masuk Barang</th>
                          <th>Tanggal Expire</th>
                          <th>Stock</th>
                          <th>Harga Beli</th>
                          <th>Harga Jual</th>
                          <th>Action</th>
                        </tr>
                           <?php foreach($user as $u){ ?>
                        <tr>
                        	 <td><?php echo $u->id_barang ?></td>
                        	 <td><?php echo $u->nama_barang ?></td>
                           <td><?php echo $u->Merek ?></td>
                        	 <td><?php echo $u->tanggal_masuk ?></td>
                        	 <td><?php echo $u->tgl_expr ?></td>
                        	 <td><?php echo $u->jumlah_stock ?></td>
                        	 <td><?php echo $u->harga_beli ?></td>
                        	 <td><?php echo $u->harga_jual ?></td>
                        		<td>
                        			<?php echo anchor('c_admin/hapus_barang/'.$u->id_barang,' <i class="fas fa-trash"></i>'); ?></i>
                                <?php echo anchor('c_admin/edit_barang/'.$u->id_barang,' <i class="fas fa-pencil-alt"></i>'); ?>
                        		</td>

                        </tr>
                        <?php } ?>
                      </table>
                    </div>
                    <div class="float-right">
                      <nav>
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>