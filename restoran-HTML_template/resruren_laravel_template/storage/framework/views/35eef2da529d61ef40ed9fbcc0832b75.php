<?php $__env->startSection('content'); ?>

<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                
                <h3 class="fw-bold mb-3">Dashboard</h3>
                
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
              </div>
            </div>
            <div class="row row-card-no-pd">
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>Total Seles</b></h6>
                        <p class="text-muted">All Seles Value</p>
                      </div>
                      <h4 class="text-info fw-bold">$170</h4>
                    </div>
                    <div class="progress progress-sm">
                      <div
                        class="progress-bar bg-info w-75"
                        role="progressbar"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                      <p class="text-muted mb-0">Change</p>
                      <p class="text-muted mb-0">75%</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>Total Revenue</b></h6>
                        <p class="text-muted">All Customs Value</p>
                      </div>
                      <h4 class="text-success fw-bold">$120</h4>
                    </div>
                    <div class="progress progress-sm">
                      <div
                        class="progress-bar bg-success w-25"
                        role="progressbar"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                      <p class="text-muted mb-0">Change</p>
                      <p class="text-muted mb-0">25%</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>Total Cost</b></h6>
                        <p class="text-muted">Fresh Cost Amount</p>
                      </div>
                      <h4 class="text-danger fw-bold">15</h4>
                    </div>
                    <div class="progress progress-sm">
                      <div
                        class="progress-bar bg-danger w-50"
                        role="progressbar"
                        aria-valuenow="50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                      <p class="text-muted mb-0">Change</p>
                      <p class="text-muted mb-0">50%</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>All items</b></h6>
                        <p class="text-muted">Available_items</p>
                      </div>
                      <h4 class="text-secondary fw-bold">12</h4>
                    </div>
                    <div class="progress progress-sm">
                      <div
                        class="progress-bar bg-secondary w-25"
                        role="progressbar"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                      <p class="text-muted mb-0">Change</p>
                      <p class="text-muted mb-0">25%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Daily Seles Statistics</div>
                      <div class="card-tools">
                        <a
                          href="#"
                          class="btn btn-label-success btn-round btn-sm me-2"
                        >
                          <span class="btn-label">
                            <i class="fa fa-pencil"></i>
                          </span>
                          Export
                        </a>
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                          <span class="btn-label">
                            <i class="fa fa-print"></i>
                          </span>
                          Print
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                      <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-primary">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Daily Sales</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-sm btn-label-light dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Export
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-category">March 25 - April 02</div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                      <h1>$4,578.58</h1>
                    </div>
                    <div class="pull-in">
                      <canvas id="dailySalesChart"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body pb-0">
                    <div class="h1 fw-bold float-end text-primary">+5%</div>
                    <h2 class="mb-2">17</h2>
                    <p class="text-muted">Users online</p>
                    <div class="pull-in sparkline-fix">
                      <div id="lineChart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Our Website visits</div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Page name</th>
                            <th scope="col">Visitors</th>
                            <th scope="col">Unique users</th>
                            <th scope="col">Bounce rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">/Tuhin/</th>
                            <td>4,569</td>
                            <td>340</td>
                            <td>
                              <i class="fas fa-arrow-up text-success me-3"></i>
                              46,53%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/Mamun/index.html</th>
                            <td>3,985</td>
                            <td>319</td>
                            <td>
                              <i
                                class="fas fa-arrow-down text-warning me-3"
                              ></i>
                              46,53%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/Abdulla/charts.html</th>
                            <td>3,513</td>
                            <td>294</td>
                            <td>
                              <i
                                class="fas fa-arrow-down text-warning me-3"
                              ></i>
                              36,49%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/Shakil/tables.html</th>
                            <td>2,050</td>
                            <td>147</td>
                            <td>
                              <i class="fas fa-arrow-up text-success me-3"></i>
                              50,87%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/Jakir/profile.html</th>
                            <td>1,795</td>
                            <td>190</td>
                            <td>
                              <i class="fas fa-arrow-down text-danger me-3"></i>
                              46,53%
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/RAkib/</th>
                            <td>4,569</td>
                            <td>340</td>
                            <td>
                              <i class="fas fa-arrow-up text-success me-3"></i>
                              46,53%
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Top Products</div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="d-flex">
                      <div class="avatar">
                        <img
                          src="assets/img/hero copy.png"
                          alt="..."
                          class="avatar-img rounded-circle"
                        />
                      </div>
                      <div class="flex-1 pt-1 ms-2">
                        <h6 class="fw-bold mb-1">Pizza</h6>
                        <small class="text-muted">Cascading Style Sheets</small>
                      </div>
                      <div class="d-flex ms-auto align-items-center">
                        <h4 class="text-info fw-bold">+$17</h4>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar">
                        <img
                          src="assets/img/about-3.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        />
                      </div>
                      <div class="flex-1 pt-1 ms-2">
                        <h6 class="fw-bold mb-1">Kacci</h6>
                        <small class="text-muted">The Best Donuts</small>
                      </div>
                      <div class="d-flex ms-auto align-items-center">
                        <h4 class="text-info fw-bold">+$300</h4>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar">
                        <img
                          src="assets/img/bg-hero.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        />
                      </div>
                      <div class="flex-1 pt-1 ms-2">
                        <h6 class="fw-bold mb-1">Barger</h6>
                        <small class="text-muted"
                          >vagitable_Barger</small
                        >
                      </div>
                      <div class="d-flex ms-auto align-items-center">
                        <h4 class="text-info fw-bold">+$350</h4>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="pull-in">
                      <canvas id="topProductsChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('masteradmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\resruren\resources\views/admin_pages/dashbord.blade.php ENDPATH**/ ?>