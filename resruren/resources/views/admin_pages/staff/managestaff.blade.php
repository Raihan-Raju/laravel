@extends('masteradmin')
@section('content')

<div class="container">
          
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Manage Employee (Staff)</h3>
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
                  <a href="#">Item's</a>
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
                     <a href="{{url('/addstaff')}}"> <h4 class="card-title">Add Employee</h4></a>
                      <button
                        class="btn btn-primary btn-round ms-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#addRowModal"
                      >
                        <i class="fa fa-plus"></i>
                        Add Employee
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
                              <span class="fw-light">  Employee</span>
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
                              Create a new Employee using this form, make sure you
                              fill them all
                            </p>
                            <form>
                              <div class="row">
                                <div class="col-sm-12">

                                <!-- <div class="form-group form-group-default">
                                    <label>ID#</label>
                                    <input
                                      id="id"
                                      type="text"
                                      class="form-control"
                                      placeholder=""
                                    />
                                  </div> -->
                                  <div class="form-group form-group-default">
                                    <label>image</label>
                                    <input
                                      id="addOffice"
                                      type="file"
                                      class="form-control"
                                      placeholder="items image"
                                    />
                                  </div>

                                  <div class="form-group form-group-default">
                                    <label>Employee Name </label>
                                    <input
                                      id="addName"
                                      type="text"
                                      class="form-control"
                                      placeholder="items name"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6 pe-0">
                                  <div class="form-group form-group-default">
                                    <label>Position(title)</label>
                                    <input
                                      id="Position"
                                      type="text"
                                      class="form-control"
                                      placeholder="Position"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-group-default">
                                    <label>Selary</label>
                                    <input
                                      id="addOffice"
                                      type="text"
                                      class="form-control"
                                      placeholder="Selary amount tk"
                                    />
                                  </div>

                                 
                                </div>
                              </div>
                            </form>
                          </div>
                         
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
                            <th>Image</th>
                            <th>Employee Name</th>
                            <th>Possition(title)</th>
                            <th>Selary</th>
                           
                           
                            <th style="width: 10%">Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <tr>
                            <td>01</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Manager</td>
                            <td>36000tk</td>
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

       

    
      

@endsection