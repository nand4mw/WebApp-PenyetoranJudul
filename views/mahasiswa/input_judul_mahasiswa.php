 <?php
    require '../../controllers/mahasiswa_controller/Mahasiswa_controller.php';
    $mahasiswa = new MahasiswaController();

    // var_dump($mahasiswa->queryAll());

    if (isset($_POST['submit'])) {
        if ($mahasiswa->insertData($_POST) > 0) {
            echo "
                <script>
                    alert('berhasil menambahkan data');
                    document.location.href = '';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('berhasil menambahkan data');
                document.location.href = '';
            </script>
        ";
        }
    }

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Input Judul Skripsi</title>

     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../../dist/assets/css/bootstrap.css">

     <link rel="stylesheet" href="../../dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
     <link rel="stylesheet" href="../../dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
     <link rel="stylesheet" href="../../dist/assets/css/app.css">
     <link rel="shortcut icon" href="../../dist/assets/images/favicon.svg" type="image/x-icon">
 </head>

 <body>
     <div id="app">
         <div id="sidebar" class="active">
             <div class="sidebar-wrapper active">
                 <div class="sidebar-header">
                     <div class="d-flex justify-content-between">
                         <div class="logo">
                             <a href="index.html"><img src="../../dist/assets/images/logo/logo.jpg" style="width: 100px; height: 100px;" alt="Logo" srcset=""></a>
                         </div>
                         <div class="toggler">
                             <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="sidebar-menu">
                     <ul class="menu">
                         <li class="sidebar-title">Menu</li>

                         <li class="sidebar-item  ">
                             <a href="index.html" class='sidebar-link'>
                                 <i class="bi bi-grid-fill"></i>
                                 <span>Dashboard</span>
                             </a>
                         </li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-stack"></i>
                                 <span>Components</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="component-alert.html">Alert</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-badge.html">Badge</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-breadcrumb.html">Breadcrumb</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-button.html">Button</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-card.html">Card</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-carousel.html">Carousel</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-dropdown.html">Dropdown</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-list-group.html">List Group</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-modal.html">Modal</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-navs.html">Navs</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-pagination.html">Pagination</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-progress.html">Progress</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-spinner.html">Spinner</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="component-tooltip.html">Tooltip</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-collection-fill"></i>
                                 <span>Extra Components</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="extra-component-avatar.html">Avatar</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="extra-component-sweetalert.html">Sweet Alert</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="extra-component-toastify.html">Toastify</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="extra-component-rating.html">Rating</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="extra-component-divider.html">Divider</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-grid-1x2-fill"></i>
                                 <span>Layouts</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="layout-default.html">Default Layout</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="layout-vertical-1-column.html">1 Column</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="layout-vertical-navbar.html">Vertical with Navbar</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="layout-horizontal.html">Horizontal Menu</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-title">Forms &amp; Tables</li>

                         <li class="sidebar-item active has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-hexagon-fill"></i>
                                 <span>Halaman Form </span>
                             </a>
                             <ul class="submenu active">
                                 <li class="submenu-item active">
                                     <a href="#">Input Judul</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="form-element-input-group.html">Input Group</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="form-element-select.html">Select</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="form-element-radio.html">Radio</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="form-element-checkbox.html">Checkbox</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="form-element-textarea.html">Textarea</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-item  ">
                             <a href="form-layout.html" class='sidebar-link'>
                                 <i class="bi bi-file-earmark-medical-fill"></i>
                                 <span>Form Layout</span>
                             </a>
                         </li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-pen-fill"></i>
                                 <span>Form Editor</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="form-editor-quill.html">Quill</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="form-editor-ckeditor.html">CKEditor</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="form-editor-summernote.html">Summernote</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="form-editor-tinymce.php">TinyMCE</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="sidebar-item  ">
                             <a href="tabel_judul_mahasiswa.php" class='sidebar-link'>
                                 <i class="bi bi-grid-1x2-fill"></i>
                                 <span>Table</span>
                             </a>
                         </li>
                         <li class="sidebar-item  ">
                             <a href="table-datatable.php" class='sidebar-link'>
                                 <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                 <span>Datatable</span>
                             </a>
                         </li>

                         <li class="sidebar-title">Extra UI</li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-pentagon-fill"></i>
                                 <span>Widgets</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="ui-widgets-chatbox.html">Chatbox</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="ui-widgets-pricing.html">Pricing</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="ui-widgets-todolist.html">To-do List</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-egg-fill"></i>
                                 <span>Icons</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="ui-icons-fontawesome.html">Fontawesome</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="ui-icons-dripicons.html">Dripicons</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-bar-chart-fill"></i>
                                 <span>Charts</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="ui-chart-chartjs.html">ChartJS</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="ui-chart-apexcharts.html">Apexcharts</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-item  ">
                             <a href="ui-file-uploader.html" class='sidebar-link'>
                                 <i class="bi bi-cloud-arrow-up-fill"></i>
                                 <span>File Uploader</span>
                             </a>
                         </li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-map-fill"></i>
                                 <span>Maps</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="ui-map-google-map.html">Google Map</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-title">Pages</li>

                         <li class="sidebar-item  ">
                             <a href="application-email.php" class='sidebar-link'>
                                 <i class="bi bi-envelope-fill"></i>
                                 <span>Email Application</span>
                             </a>
                         </li>

                         <li class="sidebar-item  ">
                             <a href="application-chat.php" class='sidebar-link'>
                                 <i class="bi bi-chat-dots-fill"></i>
                                 <span>Chat Application</span>
                             </a>
                         </li>

                         <li class="sidebar-item  ">
                             <a href="application-gallery.php" class='sidebar-link'>
                                 <i class="bi bi-image-fill"></i>
                                 <span>Photo Gallery</span>
                             </a>
                         </li>

                         <li class="sidebar-item  ">
                             <a href="application-checkout.php" class='sidebar-link'>
                                 <i class="bi bi-basket-fill"></i>
                                 <span>Checkout Page</span>
                             </a>
                         </li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-person-badge-fill"></i>
                                 <span>Authentication</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="auth-login.html">Login</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="auth-register.html">Register</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="auth-forgot-password.html">Forgot Password</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-item  has-sub">
                             <a href="#" class='sidebar-link'>
                                 <i class="bi bi-x-octagon-fill"></i>
                                 <span>Errors</span>
                             </a>
                             <ul class="submenu ">
                                 <li class="submenu-item ">
                                     <a href="error-403.html">403</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="error-404.html">404</a>
                                 </li>
                                 <li class="submenu-item ">
                                     <a href="error-500.html">500</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="sidebar-title">Raise Support</li>

                         <li class="sidebar-item  ">
                             <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                                 <i class="bi bi-life-preserver"></i>
                                 <span>Documentation</span>
                             </a>
                         </li>

                         <li class="sidebar-item  ">
                             <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                                 <i class="bi bi-puzzle"></i>
                                 <span>Contribute</span>
                             </a>
                         </li>

                         <li class="sidebar-item  ">
                             <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                                 <i class="bi bi-cash"></i>
                                 <span>Donate</span>
                             </a>
                         </li>

                     </ul>
                 </div>
                 <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
             </div>
         </div>
         <div id="main">
             <header class="mb-3">
                 <a href="#" class="burger-btn d-block d-xl-none">
                     <i class="bi bi-justify fs-3"></i>
                 </a>
             </header>

             <div class="page-heading">
                 <div class="page-title">
                     <div class="row">
                         <div class="col-12 col-md-6 order-md-1 order-last">
                             <h3>Input</h3>
                             <p class="text-subtitle text-muted">Give textual form controls like input upgrade with
                                 custom styles,
                                 sizing, focus states, and more.</p>
                         </div>
                         <div class="col-12 col-md-6 order-md-2 order-first">
                             <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                 <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">Input</li>
                                 </ol>
                             </nav>
                         </div>
                     </div>
                 </div>
                 <section class="section">

                     <form method="post" action="">
                         <div class="card">
                             <div class="card-header">
                                 <h4 class="card-title">Input Data Mahasiswa</h4>
                             </div>

                             <div class="card-body">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="basicInput">Nama Mahasiswa</label>
                                             <input type="text" class="form-control" id="basicInput" name="nama_mahasiswa">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Npm</label>
                                             <input type="text" class="form-control" id="basicInput" name="npm">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Jurusan</label>
                                             <input type="text" class="form-control" id="basicInput" name="jurusan">
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="basicInput">Tempat Tanggal Lahir</label>
                                             <input type="text" class="form-control" id="basicInput" name="tempat_tanggal_lahir">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Alamat</label>
                                             <input type="text" class="form-control" id="basicInput" name="alamat">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">No Telepon</label>
                                             <input type="text" class="form-control" id="basicInput" name="no_telepon">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="card">
                             <div class="card-header">
                                 <h4 class="card-title">Input Judul Skripsi </h4>
                             </div>
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="basicInput">Judul 1 </label>
                                             <input type="text" class="form-control" id="basicInput" name="judul_pertama">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 1:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_pertama1">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 2:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_pertama2">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 3:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_pertama3">
                                         </div>
                                     </div>

                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="basicInput">Judul 2</label>
                                             <input type="text" class="form-control" id="basicInput" name="judul_kedua">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 1:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_kedua1">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 2:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_kedua2">
                                         </div>
                                     </div>
                                     <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </section>
             </div>

             <footer>
                 <div class="footer clearfix mb-0 text-muted">
                     <div class="float-start">
                         <p>2021 &copy; Mazer</p>
                     </div>
                     <div class="float-end">
                         <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
                     </div>
                 </div>
             </footer>
         </div>
     </div>
     <script src="../../dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     <script src="../../dist/assets/js/bootstrap.bundle.min.js"></script>

     <script src="../../dist/assets/js/main.js"></script>
 </body>

 </html>