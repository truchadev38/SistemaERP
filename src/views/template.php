<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alert System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="src/views/vendors/feather/feather.css">
  <link rel="stylesheet" href="src/views/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="src/views/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="src/views/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="src/views/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="src/views/js/vendors/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="src/views/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="src/views/images/favicon.png" />
</head>

<body>
  <?php
  if (!isset($_SESSION['rol'])) {
    $template = new Template();
    $template->cambiarVistas();
  } else {
      echo '<div class="container-scroller">';
        include 'src/views/modules/layout/header.view.php';
          echo '<div class="container-fluid page-body-wrapper">';
          include 'src/views/modules/layout/menu.view.php';
            echo '<div class="main-panel">';
              echo '<div class="content-wrapper">';
                echo '<div class="row">';
                  $template = new Template();
                  $template->cambiarVistas();
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        include 'src/views/modules/layout/footer.view.php';      
      echo '</div>';
  }
  ?>
  <!-- plugins:js -->
  <script src="src/views/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="src/views/vendors/chart.js/Chart.min.js"></script>
  <script src="src/views/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="src/views/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="src/views/js/vendors/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="src/views/js/vendors/off-canvas.js"></script>
  <script src="src/views/js/vendors/hoverable-collapse.js"></script>
  <script src="src/views/js/vendors/template.js"></script>
  <script src="src/views/js/vendors/settings.js"></script>
  <script src="src/views/js/vendors/todolist.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="src/views/js/vendors/dashboard.js"></script>
  <script src="src/views/js/vendors/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!--<script src="src/views/vendors/axios/index.js"></script>-->
</body>

</html>