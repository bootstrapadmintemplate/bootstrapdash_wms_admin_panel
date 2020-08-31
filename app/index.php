<!DOCTYPE html>
<html lang="en">
<!-- head -->
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/app/partials/_head.php";?>
  <body>
    <div class="container-scroller">
      <!-- top navbar -->
      <?php include "{$_SERVER['DOCUMENT_ROOT']}/app/partials/_top_navbar.php";?>
      <div class="container-fluid page-body-wrapper">
      <!-- sidebar nav -->
      <?php include "{$_SERVER['DOCUMENT_ROOT']}/app/partials/_sidebar.php";?>
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page title header starts -->
            <div class="row page-title-header">
              <div class="col-md-12">
                <div class="page-header-toolbar">
                  <div class="filter-wrapper">
                  </div>
                </div>
              </div>
            </div>
            <!-- Page title header Ends-->

            <!-- Doughnut chart starts -->
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                <div class="p-4 border-bottom bg-light">
                    <h4 class="card-title mb-0">Doughnut chart - unique items in categories</h4>
                  </div>
                  <div class="card-body">
                      <div class="d-flex flex-column">
                      <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                      <div class="d-flex pt-3 border-top mt-5">
                        <div id="doughnut-chart-legend"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Doughnut chart ends -->

            <!-- Stacked bar chart starts -->
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="p-4 border-bottom bg-light">
                      <h4 class="card-title mb-0">Stacked Bar chart - Distribute and Receive quantity by categories</h4>
                    </div>
                    <div class="card-body">
                      <canvas id="stackedbarChart" style="height:250px"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Stacked bar chart ends -->

          <!-- content-wrapper ends -->
          <!-- footer -->
            <?php include "{$_SERVER['DOCUMENT_ROOT']}/app/partials/_footer.php";?>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/app/partials/_included_scripts.php";?>
  </body>
</html>