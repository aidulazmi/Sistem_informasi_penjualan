<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sistem Informasi Kasir</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url();?>/asset/assets/css/components.css">

 
</head>

<body>

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        

            <div class="card card-primary">
              <div class="card-header"><h4>Sistem Informasi Kasir</h4></div>

              <div class="card-body">
               <form method="post" action=<?php echo site_url('c_kasir/simpan')?>>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Nama Kasir</label>
                      <input id="frist_name" type="text" class="form-control" name="nama_kasir" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama Barang</label>
                      <select class="form-control" name="nama_barang">
                 
                        <option>-------Silahkan Pilih Barang-------</option>
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
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Merek</label>
                      <div class="col-sm-12 col-md-7">
                        <select name="Merek" class="form-control selectric">
                          <option>-------Silahkan Pilih Koridor-------</option>
                          <option value="kue">KUE</option>
                          <option value="kripik">KRIPIK</option>

                        </select>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="email">Harga Barang</label>
                    <input  type="text" class="form-control" name="harga_barang" id="hb" onkeyup="th1();">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="email">Jumlah Barang</label>
                    <input type="text" class="form-control" name="jumlah_barang" id="jb" onkeyup="th1();">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Total Harga</label>
                    <input  type="text" class="form-control" name="total_harga" id="th" onkeyup="uk1();">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="email">Uang Pembayaran</label>
                    <input  type="text" class="form-control" name="u_pembayaran" id="up" onkeyup="uk1();">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="email">Uang Kembalian</label>
                    <input type="text" class="form-control" name="u_kembalian" id="uk" onkeyup="uk1();">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Masukkan
                    </button>
                  </div>
                </form>
                   <div class="form-group">
                   <a href="<?php echo site_url('c_login/logout')?>"><button type="submit" class="btn btn-primary btn-lg btn-block">
                      Logout
                    </button>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<script>
function th1() {
      var harga_barang = document.getElementById('hb').value;
      var jumlah_barang = document.getElementById('jb').value;
      var th = parseInt(harga_barang) * parseInt(jumlah_barang);
      if (!isNaN(th)) {
         document.getElementById('th').value = th;
      }
}
</script>
<script>
function uk1() {
      var up = document.getElementById('up').value;
      var th = document.getElementById('th').value;
      var uk = parseInt(up) - parseInt(th);
      if (!isNaN(uk)) {
         document.getElementById('uk').value = uk;
      }
}
</script>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?=base_url();?>/asset/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?=base_url();?>/asset/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?=base_url();?>/asset/node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="<?=base_url();?>/asset/assets/js/scripts.js"></script>
  <script src="<?=base_url();?>/asset/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?=base_url();?>/asset/assets/js/page/auth-register.js"></script>
</body>
</html>
