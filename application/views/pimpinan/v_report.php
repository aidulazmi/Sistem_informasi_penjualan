
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Selamat Datang</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo site_url('c_pimpinan')?>">Home</a></div>

            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Sistem Informasi Penjualan</h2>
            <p class="section-lead">Selamat Datang Admin</p>
            <div class="card">
              <div class="card-header">
                <h4>Informasi</h4>
              </div>
              <div class="card-body">
               
               <?php
        foreach($data as $data){
            $Merek[] = $data->Merek;
            $jumlah_barang[] = (float) $data->jumlah_barang;
        }
    ?>
    <canvas id="canvas" width="1000" height="280"></canvas>

    <!--Load chart js-->
    <script type="text/javascript" src="<?php echo base_url().'asset/chartjs/chart.min.js'?>"></script>
    <script>

            var lineChartData = {
                labels : <?php echo json_encode($Merek);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jumlah_barang);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
        
    </script>
              </div>
              
            </div>
          </div>
        </section>
      </div>




