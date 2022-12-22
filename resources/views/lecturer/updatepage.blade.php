
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>FYP Management System</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/admin/assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="/admin/assets/vendors/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
        <link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="/admin/assets/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="/admin/assets/images/favicon.png" />
      </head>
      <body>
        <div class="container-scroller">
            <div class="row p-0 m-0 proBanner" id="proBanner">
              <div class="col-md-12 p-0 m-0">
              </div>
            </div>
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                  <a class="sidebar-brand brand-logo" href="/"><img src="/admin/assets/images/fyp-sprint-logo.png" alt="logo" /></a>
                  <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="/admin/assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
              <ul class="nav">

                <li class="nav-item nav-category">
                  <span class="nav-link">Lecturer</span>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href="/supervisee">
                    <span class="menu-icon">
                      <i class="mdi mdi-account-search"></i>
                    </span>
                    <span class="menu-title">Supervisee</span>
                  </a>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href="/examinee">
                    <span class="menu-icon">
                      <i class="mdi mdi-border-color"></i>
                    </span>
                    <span class="menu-title">Examinee</span>
                  </a>
                </li>
            </nav>
            @include("lecturer.topnavbar")
            <!-- partial -->
            <div class="main-panel">
              <div class="content-wrapper">
                <div class="row ">
                  <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Update Project</h4>
                        <form class="form-sample" action="update-project" method="POST">
                          @csrf
                          <p class="card-description"> Project Details </p>
                          <input type="hidden" name="id" value="{{$proj['proj_id']}}"/>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Project Title</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="title" value="{{$proj['proj_title']}}"/>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Project Type</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="type">
                                        <option value="{{$proj['proj_type']}}" selected hidden>{{$proj['proj_type']}}</option>
                                        <option value="Development">Development</option>
                                        <option value="Research">Research</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Student</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="stud">
                                        <option value="{{$proj['student']}}" selected hidden>{{$proj['student']}}</option>
                                        @foreach($stud as $s)
                                            <option style="color: #eeeeee;" value="{{$s->stud_name}}">{{$s->stud_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p class="card-description"> Update Project </p>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Start Date</label>
                                <div class="col-sm-9">
                                  <input type="date" class="form-control" name="start" value="{{$proj['start_date']}}"/>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">End Date</label>
                                <div class="col-sm-9">
                                  <input type="date" class="form-control" name="end" value="{{$proj['end_date']}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Progress</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="progress">
                                    <option value="{{$proj['proj_progress']}}" selected hidden>{{$proj['proj_progress']}}</option>
                                    <option value="Milestone 1">Milestone 1</option>
                                    <option value="Milestone 2">Milestone 2</option>
                                    <option value="Final Report">Final Report</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="status">
                                    <option value="{{$proj['proj_status']}}" selected hidden>{{$proj['proj_status']}}</option>
                                    <option value="On Track">On Track</option>
                                    <option value="Delayed">Delayed</option>
                                    <option value="Extended">Extended</option>
                                    <option value="Completed">Completed</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                          <button type="reset" class="btn btn-dark">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>
              </div>
          <!-- content-wrapper ends -->              
          <!-- partial -->
          </div>
                <!-- main-panel ends -->
              </div>
              <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            <script src="/admin/assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="/admin/assets/vendors/chart.js/Chart.min.js"></script>
            <script src="/admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
            <script src="/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
            <script src="/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
            <script src="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
            <script src="/admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="/admin/assets/js/off-canvas.js"></script>
            <script src="/admin/assets/js/hoverable-collapse.js"></script>
            <script src="/admin/assets/js/misc.js"></script>
            <script src="/admin/assets/js/settings.js"></script>
            <script src="/admin/assets/js/todolist.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
           

            
            <!-- End custom js for this page -->
            
            </div>
      </body>
    </html>

    
