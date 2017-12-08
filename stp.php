<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>STP</title>
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

  <?php include("nav_header.php"); ?>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <h4><strong>STP Report</strong></h4>
        <form method="POST" action="process.php">
          <div class="col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                Comp A (bacwash): <br />
                <input class="form-check-input" type="radio" name="compA" value="0"> √
                <input class="form-check-input" type="radio" name="compA" value="1"> ∆
                <input class="form-check-input" type="radio" name="compA" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Comp B (Biofiltration): <br />
                <input class="form-check-input" type="radio" name="compB" value="0"> √
                <input class="form-check-input" type="radio" name="compB" value="1"> ∆
                <input class="form-check-input" type="radio" name="compB" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Comp C (Biofiltration): <br />
                <input class="form-check-input" type="radio" name="compC" value="0"> √
                <input class="form-check-input" type="radio" name="compC" value="1"> ∆
                <input class="form-check-input" type="radio" name="compC" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Comp D (Anaerobik): <br />
                <input class="form-check-input" type="radio" name="compD" value="0"> √
                <input class="form-check-input" type="radio" name="compD" value="1"> ∆
                <input class="form-check-input" type="radio" name="compD" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Bak 1 (In Let): <br />
                <input class="form-check-input" type="radio" name="bak1" value="0"> √
                <input class="form-check-input" type="radio" name="bak1" value="1"> ∆
                <input class="form-check-input" type="radio" name="bak1" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Bak 2 (anaerobik 1): <br />
                <input class="form-check-input" type="radio" name="bak2" value="0"> √
                <input class="form-check-input" type="radio" name="bak2" value="1"> ∆
                <input class="form-check-input" type="radio" name="bak2" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Bak 3 (anaerobik 2): <br />
                <input class="form-check-input" type="radio" name="bak3" value="0"> √
                <input class="form-check-input" type="radio" name="bak3" value="1"> ∆
                <input class="form-check-input" type="radio" name="bak3" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Bak 4 (biofiltration): <br />
                <input class="form-check-input" type="radio" name="bak4" value="0"> √
                <input class="form-check-input" type="radio" name="bak4" value="1"> ∆
                <input class="form-check-input" type="radio" name="bak4" value="2"> x
              </label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                Bak 5 (biofiltration): <br />
                <input class="form-check-input" type="radio" name="bak5" value="0"> √
                <input class="form-check-input" type="radio" name="bak5" value="1"> ∆
                <input class="form-check-input" type="radio" name="bak5" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Bak 6 (biofiltration): <br />
                <input class="form-check-input" type="radio" name="bak6" value="0"> √
                <input class="form-check-input" type="radio" name="bak6" value="1"> ∆
                <input class="form-check-input" type="radio" name="bak6" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Bak Kontrol 7 (out): <br />
                <input class="form-check-input" type="radio" name="bakKontrol7" value="0"> √
                <input class="form-check-input" type="radio" name="bakKontrol7" value="1"> ∆
                <input class="form-check-input" type="radio" name="bakKontrol7" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Submersible Pump 1: <br />
                <input class="form-check-input" type="radio" name="submerPump1" value="0"> √
                <input class="form-check-input" type="radio" name="submerPump1" value="1"> ∆
                <input class="form-check-input" type="radio" name="submerPump1" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Submersible Pump 2: <br />
                <input class="form-check-input" type="radio" name="submerPump2" value="0"> √
                <input class="form-check-input" type="radio" name="submerPump2" value="1"> ∆
                <input class="form-check-input" type="radio" name="submerPump2" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Chlorine: <br />
                <input class="form-check-input" type="radio" name="chlorine" value="0"> √
                <input class="form-check-input" type="radio" name="chlorine" value="1"> ∆
                <input class="form-check-input" type="radio" name="chlorine" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Box Panel: <br />
                <input class="form-check-input" type="radio" name="boxPanel" value="0"> √
                <input class="form-check-input" type="radio" name="boxPanel" value="1"> ∆
                <input class="form-check-input" type="radio" name="boxPanel" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Panel (wirring): <br />
                <input class="form-check-input" type="radio" name="panel" value="0"> √
                <input class="form-check-input" type="radio" name="panel" value="1"> ∆
                <input class="form-check-input" type="radio" name="panel" value="2"> x
              </label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                Exhaust Fan: <br />
                <input class="form-check-input" type="radio" name="exhaustFan" value="0"> √
                <input class="form-check-input" type="radio" name="exhaustFan" value="1"> ∆
                <input class="form-check-input" type="radio" name="exhaustFan" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Ruangan: <br />
                <input class="form-check-input" type="radio" name="ruangan" value="0"> √
                <input class="form-check-input" type="radio" name="ruangan" value="1"> ∆
                <input class="form-check-input" type="radio" name="ruangan" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Penerangan: <br />
                <input class="form-check-input" type="radio" name="penerangan" value="0"> √
                <input class="form-check-input" type="radio" name="penerangan" value="1"> ∆
                <input class="form-check-input" type="radio" name="penerangan" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Lantai: <br />
                <input class="form-check-input" type="radio" name="lantai" value="0"> √
                <input class="form-check-input" type="radio" name="lantai" value="1"> ∆
                <input class="form-check-input" type="radio" name="lantai" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Atap: <br />
                <input class="form-check-input" type="radio" name="atap" value="0"> √
                <input class="form-check-input" type="radio" name="atap" value="1"> ∆
                <input class="form-check-input" type="radio" name="atap" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Dinding: <br />
                <input class="form-check-input" type="radio" name="dinding" value="0"> √
                <input class="form-check-input" type="radio" name="dinding" value="1"> ∆
                <input class="form-check-input" type="radio" name="dinding" value="2"> x
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                Tangki: <br />
                <input class="form-check-input" type="radio" name="tangki" value="0"> √
                <input class="form-check-input" type="radio" name="tangki" value="1"> ∆
                <input class="form-check-input" type="radio" name="tangki" value="2"> x
              </label>
            </div>
            <div class="form-group">
              <label for="checkDate">Date: </label>
              <input type="text" class="form-control" id="checkDate" name="checkDate" placeholder="Date">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="checkDate">Note: </label>
              <textarea class="form-control" name="note"></textarea>
            </div>
            <div class="form-group">
              <label for="finding">Finding: </label>
              <textarea class="form-control" id="finding" name="finding"></textarea>
            </div>
            <input type="hidden" name="mode" value="add_stp">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
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

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
