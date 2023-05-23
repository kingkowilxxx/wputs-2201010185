<?php
include './database/koneksi.php';
session_start();
if (isset($_SESSION["login"])) {
  if (!$_SESSION["NAMA"] == "") {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>
        Dashboard
      </title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    </head>

    <body class="">
      <div class="wrapper">
        <div class="sidebar">
          <div class="sidebar-wrapper">
            <div class="logo">
              <a href="javascript:void(0)" class="active simple-text logo-mini">
              </a>
              <a href="javascript:void(0)" class="simple-text logo-normal">
                Kampusku
              </a>
            </div>
            <ul class="nav">
              <li>
                <a href="./mhs/datamhs.php">
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg></i>
                  <p>
                    Data Mahasiswa</p>
                </a>
              </li>
              <li>
                <a href="./mhs/datadosen.php">
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                      <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                      <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                    </svg></i>
                  <p>
                    Data Dosen</p>
                </a>
              </li>
              <li>
                <a href="./map.html">
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                      <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                    </svg></i>
                  <p>Data Matakuliah</p>
                </a>
              </li>
              <li>
                <a href="./user/datauser.php">
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg></i>
                  <p>Data User</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-toggle d-inline">
                  <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <a class="navbar-brand" href="./dashboard.php">Dashboard</a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
              <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto">
                  <li class="search-bar input-group">
                  <a href="./logout.php"><button class="btn btn-light mt-2">Logout</button></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
          <div class="content">
            <div class="row">
              <div class="col-12">
                <div class="card card-chart">
                  <div class="card-header ">
                    <div class="row">
                      <div class="col-sm-6 text-left">
                        <h5 class="card-category">Welcome</h5>
                        <h2 class="card-title">Selamat Datang <b>
                                    <?php echo $_SESSION["NAMA"] ?></b></h2>
                      </div>
                    </div>
                  </div>
                  <div class="card-body" style="height:200px">
                    <div class="container">
                        <p class="m-auto m-4">Selamat datang di website KAMPUSKU. Kampusku adalah website untuk mengelola data kampus dengan CRUD (Create, Update, Read dan Delete) seperti data mahasiswa, data dosen, data matakuliah dan data user. Website ini dikembangkan oleh : </p> <br>
                        <h4>Nama : I Made Dharma Putra</h4>
                         <h4>NIM : 2201010506</h4>
                         <h4>Kls : M</h4>
                      <canvas id="chartBig1"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-chart">
                  <div class="card-header">
                  <h5 class="card-category">List Users</h5>
                            <h2 class="card-title">Total Daftar User <b>
                                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbUSER");
                                    echo mysqli_num_rows($stt); ?></b></h2>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="chartLinePurple"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-chart">
                  <div class="card-header">
                  <h5 class="card-category">List Mahasiswa</h5>
                            <h2 class="card-title">Total Daftar Mahasiswa <b>
                                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbMHS");
                                    echo mysqli_num_rows($stt); ?></b></h2>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="CountryChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-chart">
                  <div class="card-header">
                  <h5 class="card-category">List Dosen</h5>
                            <h2 class="card-title">Total Daftar User <b>
                                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbUSER");
                                    echo mysqli_num_rows($stt); ?></b></h2>
                  </div>
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="chartLineGreen"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="container-fluid">
              <ul class="nav">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link">
                    I Made Dharma Putra
                  </a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link">
                    About Us
                  </a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link">
                    Blog
                  </a>
                </li>
              </ul>
              <div class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
                <a href="javascript:void(0)" target="_blank">I Made Dharma Putra</a> for a better web.
              </div>
            </div>
        </div>
      </div>
      </footer>
      <script src="../assets/js/core/jquery.min.js"></script>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <script src="../assets/js/plugins/chartjs.min.js"></script>
      <script src="../assets/js/plugins/bootstrap-notify.js"></script>
      <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
      <script src="../assets/demo/demo.js"></script>
      <script>
        $(document).ready(function() {
          $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



            $('.fixed-plugin a').click(function(event) {
              if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                  event.stopPropagation();
                } else if (window.event) {
                  window.event.cancelBubble = true;
                }
              }
            });

            $('.fixed-plugin .background-color span').click(function() {
              $(this).siblings().removeClass('active');
              $(this).addClass('active');

              var new_color = $(this).data('color');

              if ($sidebar.length != 0) {
                $sidebar.attr('data', new_color);
              }

              if ($main_panel.length != 0) {
                $main_panel.attr('data', new_color);
              }

              if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
              }

              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data', new_color);
              }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
              var $btn = $(this);

              if (sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                sidebar_mini_active = false;
                blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
              } else {
                $('body').addClass('sidebar-mini');
                sidebar_mini_active = true;
                blackDashboard.showSidebarMessage('Sidebar mini activated...');
              }

              // we simulate the window Resize so the charts will get updated in realtime.
              var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
              }, 180);

              // we stop the simulation of Window Resize after the animations are completed
              setTimeout(function() {
                clearInterval(simulateWindowResize);
              }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
              var $btn = $(this);

              if (white_color == true) {

                $('body').addClass('change-background');
                setTimeout(function() {
                  $('body').removeClass('change-background');
                  $('body').removeClass('white-content');
                }, 900);
                white_color = false;
              } else {

                $('body').addClass('change-background');
                setTimeout(function() {
                  $('body').removeClass('change-background');
                  $('body').addClass('white-content');
                }, 900);

                white_color = true;
              }


            });

            $('.light-badge').click(function() {
              $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
              $('body').removeClass('white-content');
            });
          });
        });
      </script>
      <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

        });
      </script>
      <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
      <script>
        window.TrackJS &&
          TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "black-dashboard-free"
          });
      </script>
    </body>

    </html>


<?php
  } else {
    header("location: login.php");
  }
} else {
  header("location: login.php");
}
?>