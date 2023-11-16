<?php include '_header.php'; 

include "../controller/c_Riwayat.php";
$r = new Riwayat;
?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Riwayat Diagnosa</h4>
                <div class="d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Riwayat Diagnosa</li>
                    </ol>
                </div>
            </div>
            <div class="col-7">
                <div class="text-right upgrade-btn">
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-hover table-bordered">
                                <thead style="background-color: #336699; color: #ffffff;">
                                  <tr>
                                    <th style="color: white;" width="5%">ID</th>
                                    <th style="color: white;" width="16%">Tanggal dan Waktu</th>
                                    <th style="color: white;">Gejala Penyakit</th>
                                    <th style="color: white;">Nama Penyakit</th>
                                    <th style="color: white;" width="9%">Nilai DS</th>
                                    <th style="color: white;" width="5%">Persentase</th>
                                    <th style="color: white;" width="5%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = $r->TampilSemua();
                                if (!isset($data)) {
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                } else {
                                    $i=0;
                                foreach($data as $d){
                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?php print $i; ?></td>
                                        <td><?php print $d['tanggal']; ?></td>
                                        <td><?php print $d['gejala']; ?></td>
                                        <td><?php print $d['penyakit']; ?></td>
                                        <td><?php print $d['nilai']; ?></td>
                                        <td><?php print $d['persentase']; ?></td>
                                        <td>
                                            <a onclick="if (! confirm('Apakah anda yakin akan menghapus riwayat diagnosa dari daftar ?')) { return false; }" href="../ProsesA/d_riwayat.php?id_diagnosa=<?php print $d['id_diagnosa']; ?>" class="btn btn-danger btn-simple btn-xs text-white" title="Hapus Riwayat"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<?php include '_footer.php'; ?>