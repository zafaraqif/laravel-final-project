<!DOCTYPE html>
  <html lang="en">
    <head>
      @include("admin.admincss")
    </head>
    <body>
      <div class="container-scroller">
          <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
            </div>
          </div>
          <!-- partial:partials/_sidebar.html -->
          @include("admin.navbar")
          @include("admin.topnavbar")
          <!-- partial -->
          <div class="main-panel">
              <div class="content-wrapper">
                <div class="row ">
                  <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add New Project</h4>
                        <form class="form-sample" action="create-project" method="POST">
                          @csrf
                          <p class="card-description"> Assign Project </p>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Project Title</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="title" placeholder="Enter project title"/>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Project Type</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="type">
                                    <option value="none" selected disabled hidden>Choose project type</option>
                                    <option style="color: #eeeeee;" value="Development">Development</option>
                                    <option style="color: #eeeeee;" value="Research">Research</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Supervisor</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="sv">
                                    <option value="none" selected disabled hidden>Choose supervisor</option>
                                    @foreach($lect as $l)
                                        <option style="color: #eeeeee;" value="{{$l->name}}">{{$l->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Student</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="stud">
                                    <option value="none" selected disabled hidden>Choose student</option>
                                    @foreach($stud as $s)
                                      <option style="color: #eeeeee;" value="{{$s->stud_name}}">{{ $s->stud_name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Examiner 1</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="ex1">
                                    <option value="none" selected disabled hidden>Choose examiner 1</option>
                                    @foreach($lect as $l)
                                        <option style="color: #eeeeee;" value="{{$l->name}}">{{$l->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Examiner 2</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="ex2">
                                    <option value="none" selected disabled hidden>Choose examiner 2</option>
                                    @foreach($lect as $l)
                                        <option style="color: #eeeeee;" value="{{$l->name}}">{{$l->name}}</option>
                                    @endforeach
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
      @include("admin.adminscript")
  </body>
</html>