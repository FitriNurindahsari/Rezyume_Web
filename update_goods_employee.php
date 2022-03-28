<?php
  include 'koneksi.php';
  session_start();
  $goods = "SELECT * FROM goods";
  $data_goods = $conn->query($goods);
  $qselect_goods = "SELECT * FROM goods WHERE id_goods = ".$_GET['id_goods'];
  foreach($conn->query($qselect_goods) as $value){
    $data_select_goods=$value;
  } ;
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../rezyume_web/assets/img/icon.png">
    <link rel="icon" type="image/png" href="../rezyume_web/assets/img/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Update Goods
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../rezyume_web/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Demo -->
    <link href="../rezyume_web/assets/demo/demo.css" rel="stylesheet" />
    <link href="../rezyume_web/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  
  <body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="green" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
        <div class="logo"><a href="index.php" class="simple-text logo-normal">
            Rezyume
          </a></div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="goods_employee.php">
                <i class="material-icons">content_paste</i>
                <p>Goods</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-panel" style="background-image: url(../rezyume_web/img/1.jpg);">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:;" style="color: white;">Goods</a>
            </div>
          </div>
        </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Goods</h4>
                </div>
                <div class="card-body">
                  <?php include "read_message.php" ?>
                </div>
                  <form action ="simpan_goods_employee.php" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="id_goods" value="<?php echo $data_select_goods["id_goods"] ?>">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" id="name_goods" name="name_goods" value="<?php echo $data_select_goods["name_goods"] ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Deskription</label>
                          <input type="text" class="form-control" id="deskription_goods" name="deskription_goods" value="<?php echo $data_select_goods["deskription_goods"] ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Selled</label>
                          <input type="text" class="form-control" id="selled_goods" name="selled_goods" value="<?php echo $data_select_goods["selled_goods"] ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="text" class="form-control" id="price_goods" name="price_goods" value="<?php echo $data_select_goods["price_goods"] ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total</label>
                          <input type="text" class="form-control" id="total_goods" name="total_goods" value="<?php echo $data_select_goods["total_goods"] ?>" required>
                        </div>
                      </div>
                    </div>
                    <label for="images">Image </label>
                    <input type="file" name="images" id="images" class="form-control-file" required><br>
                    <button type="submit" style="background-color: green; color:white; border:none; border-radius: 5px; padding: 10px 15px;">Update</button>
                    <a href="goods_employee.php" style="background-color: grey; color:white; border:none; border-radius: 5px; padding: 13px 20px;" class="button" type="submit">Batal</a>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Data Goods -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Data Goods</h4>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th><th>Name</th><th>Deskription</th><th>Selled</th><th>Price</th><th>Total</th><th>Image</th><th>Edit</th>
                    </thead>
                    <tbody>
                      <?php
                        foreach($data_goods as $index => $value){
                          echo "<tr>
                            <td>".$value['id_goods']."</td>
                            <td>".$value['name_goods']."</td>
                            <td>".$value['deskription_goods']."</td>
                            <td>".$value['selled_goods']."</td>
                            <td>".$value['price_goods']."</td>
                            <td>".$value['total_goods']."</td>"
                      ?>
                      <td><img src="<?php echo $value['images'] ?>" alt="image goods" style="max-width: 50px"></td>
                      <!--Tombol Update-->
                      <td><a href="update_goods_employee.php?id_goods=<?php echo $value['id_goods'] ?>" type="button" class="close">
                        <span class="fa fa-pencil"></span>
                      </a></td>
                      <!--Tombol Hapus-->
                      <td><a href="hapus_goods_employee.php?id_goods=<?php echo $value['id_goods'] ?>" type="button" class="close">
                          <span class="fa fa-trash"></span>
                      </a></td>
                      <?php
                          "</tr>";
                        }
                      ?>
                    </tbody>
                    <?php
                      $sql = mysqli_query($conn, "SELECT SUM(total_goods)FROM goods");
                      while($total = mysqli_fetch_array($sql)) {
                    ?>
                      <th colspan="5">Sub Total</th>
                      <th><?php echo "Rp." . number_format($total['SUM(total_goods)']) ;?></th>
                    <?php
                      }
                    ?> 
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="container" style="color:white;">
          <small>Copyright by &copy; 2021 - Ryzume</small>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green active" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../rezyume_web/assets/js/core/jquery.min.js"></script>
  <script src="../rezyume_web/assets/js/core/popper.min.js"></script>
  <script src="../rezyume_web/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../rezyume_web/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../rezyume_web/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../rezyume_web/assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../rezyume_web/assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard -->
  <script src="../rezyume_web/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select -->
  <script src="../rezyume_web/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker -->
  <script src="../rezyume_web/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin -->
  <script src="../rezyume_web/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags -->
  <script src="../rezyume_web/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload -->
  <script src="../rezyume_web/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin -->
  <script src="../rezyume_web/assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin -->
  <script src="../rezyume_web/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders -->
  <script src="../rezyume_web/assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../rezyume_web/assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../rezyume_web/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../rezyume_web/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../rezyume_web/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods -->
  <script src="../rezyume_web/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          //mensimulasikan jendela Resize sehingga grafik akan diperbarui secara realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          //menghentikan simulasi Window Resize setelah animasi selesai.
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>