<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 02</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 02</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <style>
        body {
            background-color: cadetblue;
            margin-top: 50px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }
        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .harga-list {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }

        .hasil-input {
        margin-top: 20px;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .hasil-input h3 {
        color: #007bff;
        margin-bottom: 20px;
        text-align: center;
    }
    .hasil-input p {
        font-size: 18px;
        margin-bottom: 10px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Belanja Online</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Customer :</label> 
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required"> 
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESINCUCI" required="required"> 
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="harga-list">
                    <h4>Daftar Harga</h4>
                    <ul>
                        <li>TV - Rp. 4.200.000</li>
                        <li>KULKAS - Rp. 3.100.000</li>
                        <li>MESIN CUCI - Rp. 3.800.000  </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        // Menangkap data input
        $name = $_POST['name'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $TV = 4200000 * $jumlah;
        $KULKAS = 3100000 * $jumlah;
        $MESINCUCI = 3800000 * $jumlah;

        echo "<br>Nama Customer : " . $name;
        echo "<br>Produk Pilihan : " . $produk;
        echo "<br>Jumlah Produk : " . $jumlah;

        switch ($produk) {
            case "TV" : 
                echo "<br>Total Belanja : " . $TV;
                break;
            case "KULKAS" : 
                echo "<br>Total Belanja : " . $KULKAS;
                break;
            case "MESINCUCI" : 
                echo "<br>Total Belanja : " . $MESINCUCI;
                break;
        }
    }
    ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>