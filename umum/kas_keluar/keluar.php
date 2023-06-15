<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}
?>
<!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- MORRIS CHART STYLES-->

        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- TABLE STYLES-->
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

        <style>
            span {
                font-size: 16px;
            }
        </style>
    </head>

    <body>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <span>Data Kas Masuk</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 

                                    $no = 1;
                                    $sql = mysqli_query($koneksi, "SELECT * FROM kas WHERE jenis = 'keluar' ");
                                    while ($data = mysqli_fetch_assoc($sql)) {

                                ?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <?php echo $no++; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['kode']; ?>
                                            </td>
                                            <td>
                                                <?php echo date('d F Y', strtotime($data['tgl'])); ?>
                                            </td>
                                            <td>
                                                <?php echo $data['keterangan']; ?>
                                            </td>
                                            <td align="right">
                                                <?php echo number_format($data['keluar']).",-"; ?>
                                            </td>
                                        </tr>
                                         <!-- Halaman Ubah -->
                            <div class="panel-body">
                                <div class="modal fade" id="edit<?= $data['kode'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Form Edit Data</h4>
                                            </div>
                                            <div class="modal-body" id="modal_edit">
                                                <form role="form" method="POST">
                                                    <div class="form-group">
                                                         <div class="form-group">
                                                    <label>Kode</label>
                                                    <input value="<?= $data['kode'] ?>" class="form-control" name="kode" placeholder="Input Kode" />
                                                </div>
                                                    <div>
                                                        <label>Keterangan</label>
                                                        <textarea class="form-control" rows="3" name="ket" id="ket"><?= $data['keterangan'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal</label>
                                                        <input value="<?= $data['tgl'] ?>" class="form-control" type="date" name="tgl" id="tgl" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jumlah</label>
                                                        <input value="<?= $data['keluar'] ?>" class="form-control" type="number" name="jml" id="jml" />
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                <button type="submit" name="ubah<?= $data['kode'] ?>" class="btn btn-primary">Simpan</button>
                                                </form>

                                                <?php 
                                        if(isset($_POST['ubah' . $data['kode']])) {
                                            $kode = $_POST['kode'];
                                            $ket = $_POST['ket'];
                                            $tgl = $_POST['tgl'];
                                            $jml = $_POST['jml'];

                                            $sql = mysqli_query($koneksi, "UPDATE kas SET keterangan = '$ket', tgl = '$tgl', jumlah = 0, jenis = 'keluar', keluar = '$jml' WHERE kode = '$kode' ");
                                            if($sql) {
                                                echo "
                                                    <script>
                                                    alert('Data Berhasil Diedit $jml');
                                                    document.location.href = '';
                                                    </script>";       
                                            }
                                        }
                                    ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Halaman Ubah -->
                                        <?php 
                                    $total = $total+$data['keluar'];
                                    } 
                                ?>
                                </tbody>

                                <tr>
                                    <td colspan="4" style="text-align: left; font-size: 17px; color: maroon;">Total Kas Keluar :</td>
                                    <td style="font-size: 17px; text-align: right; "><font style="color: green;"><?php echo " Rp." . number_format($total).",-"; ?></font></td>
                                </tr>
                            </table>
                        </div>

                        <!--  Halaman Tambah-->
                        <div class="panel-body">
                            <!-- <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                            + Tambah
                        </button> -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Form Tambah Data</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="POST">
                                                <div class="form-group">
                                                    <label>Kode</label>
                                                    <input class="form-control" name="kode" placeholder="Input Kode" />
                                                </div>
                                                <div>
                                                    <label>Keterangan</label>
                                                    <textarea class="form-control" rows="3" name="ket"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input class="form-control" type="date" name="tgl" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input class="form-control" type="number" name="jml" />
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                    if(isset($_POST['simpan'])) {
                        $kode = $_POST['kode'];
                        $tgl = $_POST['tgl'];
                        $ket = $_POST['ket'];
                        $jml = $_POST['jml'];

                        $sql = mysqli_query($koneksi, "INSERT INTO kas (kode, keterangan, tgl, jumlah, jenis, keluar) VALUES ('$kode', '$ket', '$tgl', 0, 'keluar', '$jml')");

                        if($sql) {
                            echo "
                                <script>
                                alert('Data Berhasil Ditambahkan');
                                document.location.href = '';
                                </script>";       
                        }
                    }
                ?>
                            <!-- Akhir Halaman Tambah -->

                           
                    </div>
                </div>
            </div>
        </div>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>

        <script type="text/javascript">
            $(document).on("click", "#edit_data", function() {
                var kode = $(this).data('id');
                var ket = $(this).data('ket');
                var tgl = $(this).data('tgl');
                var jml = $(this).data('jml');

                $("#modal_edit #kode").val(kode);
                $("#modal_edit #ket").val(ket);
                $("#modal_edit #tgl").val(tgl);
                $("#modal_edit #jml").val(jml);

            })
        </script>

    </body>

    </html>