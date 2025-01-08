<?php 
include '../koneksi/koneksi.php';
session_start();





$data_pesan = array();
$item_pesan =0;
$ambil = $conn->query("SELECT * FROM pesan");
while ($pesan = $ambil->fetch_assoc()) 
{
    $data_pesan[]=$pesan;
    $item_pesan++;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INDEX</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">SEWAQUY</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Data User -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=data_user">
                    <i class="fas fa-users me-2"></i>
                    <span>Data User</span></a>
            </li>

            <!-- Nav Item - Kategori -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=kategori">
                    <i class="fas fa-th-list"></i>
                    <span>Kategori</span></a>
            </li>

            <!-- Nav Item - Data Barang -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=data_produk">
                    <i class="fas fa-box"></i>
                    <span>Data Produk</span></a>
            </li>

            <!-- Nav Item - Pesan -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=pesan">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span>Pesan</span></a>
            </li>

            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=logout">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">
                                    <?php echo $item_pesan; ?>
                                </span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <?php foreach ($data_pesan as $key => $value): ?>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">
                                            <?php echo $value['nama_pengirim']; ?>
                                        </div>
                                        <div class="small text-gray-500"><?php echo $value['email_pengirim']; ?></div>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <?php 
                        
                    if(isset($_GET['halaman']))
                    {
                        // halaman data user
                        if($_GET['halaman']=="data_user")
                        {
                            include 'data_user.php';
                        }
                        elseif($_GET['halaman']=="hapus_data_user")
                        {
                            include '../hapus/hapus_data_user.php';
                        }
                        
                        // halaman kategori
                        elseif($_GET['halaman']=="kategori")
                        {
                            include 'kategori.php';
                        }
                        elseif($_GET['halaman']=="tambah_data_kategori")
                        {
                            include '../tambah/tambah_data_kategori.php';
                        }
                        elseif($_GET['halaman']=="hapus_kategori")
                        {
                            include '../hapus/hapus_kategori.php';
                        }

                        // halaman data produk
                        elseif($_GET['halaman']=="data_produk")
                        {
                            include 'data_produk.php';
                        }
                        elseif($_GET['halaman']=="tambah_data_produk")
                        {
                            include '../tambah/tambah_data_produk.php';
                        }
                        elseif($_GET['halaman'] == "edit_produk") 
                        {
                            include  '../tambah/edit_produk.php';
                        }
                        elseif($_GET['halaman'] == "hapus_produk") 
                        {
                            include  '../hapus/hapus_produk.php';
                        }

                        // halaman data pesan
                        elseif($_GET['halaman']=="pesan")
                        {
                            include 'pesan.php';
                        }
                        elseif($_GET['halaman']=="hapus_pesan")
                        {
                            include '../hapus/hapus_pesan.php';
                        }
                        
                        //logout
                        elseif($_GET['halaman']=="logout")
                        {
                            include 'logout.php';
                        }
                    }
                    else
                    {
                        include 'dashboard.php';
                    }

                    ?>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>

    <script>
        $(document).ready(function(){
            $(".btn-tambah").on("click", function(){
                $(".input-foto").append("<input type='file' name='foto_produk[]' class='form-control'>");
            })
        })
    </script>


</body>

</html>