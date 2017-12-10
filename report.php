<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Report</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/jquery/jquery-ui-1.12.1.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <link href="css/datatables.min.css" rel="stylesheet">
  <link href="lib/datatable/buttons.dataTables.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="preloader"></div>

  <?php
    include("nav_header.php");
  ?>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <h4><strong>STP Report</strong></h4>
        <?php
          require_once(__DIR__ . '/classes/stp.class.php');

          $stpClass  = new STPClass();
          $data     = $stpClass->show_checklist();
          $data_num = count($data);

          // Show if exists
          if ($data_num!=0) {
            $data_table = "<table class='table table-bordered table-striped' id='datatable'>
              <thead>
                <tr>
                ";
            $stp_checklist = STPClass::$stp_arr;
            foreach ($stp_checklist as $key => $value) {
              $data_table .= "<th><center>$value</center></th>";
            }
            $data_table .= "
                </tr>
                  </thead>
                  <tbody>";
            foreach ($data as $stp_data) {
              $data_table .= "<tr>";
              foreach ($stp_checklist as $key => $value) {
                $mark = '';
                switch ($stp_data[$value]) {
                  case '0':
                    $mark = '√';
                    break;
                  case '1':
                    $mark = '∆';
                    break;
                  case '2':
                    $mark = 'x';
                    break;
                  default:
                    $mark = $stp_data[$value];
                    break;
                }
                $data_table .= "<td>$mark</th>";
              }
              $data_table .= "</tr>";
            }
            $data_table .= "</tbody></table>";
            echo $data_table;
          }
          // No data found?
          else {
            echo "<p>No Data Found!</p>";
          }
        ?>
      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
            Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-ui-1.12.1.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="js/datatables.min.js"></script>

  <script src="lib/datatable/dataTables.buttons.min.js"></script>
  <script src="lib/datatable/jszip.min.js"></script>
  <script src="lib/datatable/pdfmake.min.js"></script>
  <script src="lib/datatable/vfs_fonts.js"></script>
  <script src="lib/datatable/buttons.html5.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
