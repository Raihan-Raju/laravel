
<?php $__env->startSection('content'); ?>

<div class="container">
          
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Manage Seles</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Seles</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Manage </a>
                </li>
              </ul>
            </div>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                     <a href="<?php echo e(url('/selesadd')); ?>"> <h4 class="card-title">Add Items</h4></a>
                      <button
                        class="btn btn-primary btn-round ms-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#addRowModal"
                      >
                        <i class="fa fa-plus"></i>
                        Add Seles
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Modal -->
  <!-- -------------popup--------- -->
                    <div
                      class="modal fade"
                      id="addRowModal"
                      tabindex="-1"
                      role="dialog"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header border-0">
                            <h5 class="modal-title">
                              <span class="fw-mediumbold"> New</span>
                              <span class="fw-light">  items</span>
                            </h5>
                            <button
                              type="button"
                              class="close"
                              data-dismiss="modal"
                              aria-label="Close"
                            >
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="small">
                              Create a new items using this form, make sure you
                              fill them all
                            </p>
                            <form>
                              <div class="row">
                                <div class="col-sm-12">

                             
                                  <div class="form-group form-group-default">
                                    <label>Customer Name </label>
                                    <input
                                      id="addName"
                                      type="text"
                                      class="form-control"
                                      placeholder="items name"
                                    />
                                  </div>
                                  <div class="form-group form-group-default">
                                    <label>Invoice Number </label>
                                    <input
                                      id="addName"
                                      type="number"
                                      class="form-control"
                                      placeholder="items name"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6 pe-0">
                                  <div class="form-group form-group-default">
                                    <label>Items Name</label>
                                    <input
                                      id="addPosition"
                                      type="text"
                                      class="form-control"
                                      placeholder="fill number"
                                    />
                                  </div>
                                  <div class="form-group form-group-default">
                                    <label>Quantity</label>
                                    <input
                                      id="addPosition"
                                      type="Number"
                                      class="form-control"
                                      placeholder="fill number"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-group-default">
                                    <label>Taka</label>
                                    <input
                                      id="addOffice"
                                      type="text"
                                      class="form-control"
                                      placeholder="amount tk"
                                    />
                                  </div>

                                  <div class="form-group form-group-default">
                                    <label>image</label>
                                    <input
                                      id="addOffice"
                                      type="file"
                                      class="form-control"
                                      placeholder="items image"
                                    />
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <button type="submit" class="btn btn-success ">Submit</button>
                        </div>
                      </div>
                    </div>
<!-- -------------popup--------- -->
                    <div class="table-responsive">
                      <table
                        id="add-row"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>ID#</th>
                            <th>Customer Name</th>
                            <th>Invoice Number</th>
                            <th>Items Name</th>
                            <th>Quentity</th>
                            <th>Taka</th>
                            <th>Image</th>
                           
                            <th style="width: 10%">Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <tr>
                            <td>01</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>360</td>
                            <td>tyhrd</td>
                            <td>
                              <div class="form-button-action">
                                <button
                                  type="button"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button
                                  type="button"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-danger"
                                  data-original-title="Remove"
                                >
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                        
                          
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          </div>
         
        </div>

       

    
      

<?php $__env->stopSection(); ?>
<?php echo $__env->make('masteradmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\resruren\resources\views/admin_pages/Seles/selesmanage.blade.php ENDPATH**/ ?>