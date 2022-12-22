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
                    <h4 class="card-title"> Examinee List </h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Project Title and Type </th>
                            <th> Student </th>
                            <th> Supervisor </th>
                            <th> Project Period </th>
                            <th> Duration </th>
                            <th> Progress </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($ex1 as $e)
                          <tr>
                            <td>{{Str::limit($e['proj_title'], 35, '...')}} <br/> <span style="font-size: 12px;"> {{$e['proj_type']}} </span></td>                            <td>{{$e['student']}}</td>
                            <td>{{$e['supervisor']}}</td>
                            <td>{{($e['start_date'] == '')? 'UNINITIALIZED' : $e['start_date']." to"}} <br/> {{($e['end_date'] == '')? '' : $e['end_date']}}</td>
                            <td>{{($e['month_duration'] == '')? 'UNINITIALIZED' : $e['month_duration']." Month(s)"}} </td>
                            <td>{{($e['proj_progress'] == '')? 'UNINITIALIZED' : $e['proj_progress']}}</td>
                
                            @if($e['proj_status'] == '')
                              <td>UNINITIALIZED</td>
                            @else
                              @if($e['proj_status'] == 'On Track')
                                <td><div class="badge badge-outline-primary">{{$e['proj_status']}}</div></td>
                              @elseif($e['proj_status'] == 'Delayed')
                                <td><div class="badge badge-outline-warning">{{$e['proj_status']}}</div></td>
                              @elseif($e['proj_status'] == 'Extended')
                                <td><div class="badge badge-outline-danger">{{$e['proj_status']}}</div></td>
                              @elseif($e['proj_status'] == 'Completed')
                                <td><div class="badge badge-outline-success">{{$e['proj_status']}}</div></td>
                              @endif
                            @endif
                            </tr>
                          @endforeach
                          @foreach($ex2 as $e)
                          <tr>
                            <td>{{Str::limit($e['proj_title'], 35, '...')}} <br/> <span style="font-size: 12px;"> {{$e['proj_type']}} </span></td>                            <td>{{$e['student']}}</td>
                            <td>{{$e['supervisor']}}</td>
                            <td>{{($e['start_date'] == '')? 'UNINITIALIZED' : $e['start_date']." to"}} <br/> {{($e['end_date'] == '')? '' : $e['end_date']}}</td>
                            <td>{{($e['month_duration'] == '')? 'UNINITIALIZED' : $e['month_duration']." Month(s)"}} </td>
                            <td>{{($e['proj_progress'] == '')? 'UNINITIALIZED' : $e['proj_progress']}}</td>
                
                            @if($e['proj_status'] == '')
                              <td>UNINITIALIZED</td>
                            @else
                              @if($e['proj_status'] == 'On Track')
                                <td><div class="badge badge-outline-primary">{{$e['proj_status']}}</div></td>
                              @elseif($e['proj_status'] == 'Delayed')
                                <td><div class="badge badge-outline-warning">{{$e['proj_status']}}</div></td>
                              @elseif($e['proj_status'] == 'Extended')
                                <td><div class="badge badge-outline-danger">{{$e['proj_status']}}</div></td>
                              @elseif($e['proj_status'] == 'Completed')
                                <td><div class="badge badge-outline-success">{{$e['proj_status']}}</div></td>
                              @endif
                            @endif
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
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