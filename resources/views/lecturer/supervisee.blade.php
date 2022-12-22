
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include("lecturer.lectcss")
      </head>
      <body>
        <div class="container-scroller">
            <div class="row p-0 m-0 proBanner" id="proBanner">
              <div class="col-md-12 p-0 m-0">
              </div>
            </div>
            <!-- partial:partials/_sidebar.html -->
            @include("lecturer.navbar")
            @include("lecturer.topnavbar")
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                  <div class="row ">
                    <div class="col-12 grid-margin">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title"> Supervisee List </h4>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th> Project Title and Type </th>
                                  <th> Student </th>
                                  <th> Project Period </th>
                                  <th> Duration </th>
                                  <th> Progress </th>
                                  <th> Status </th>
                                  <th> Action </th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach($sv as $s)
                                  <tr>
                                      <td>{{Str::limit($s['proj_title'], 35, '...')}} <br/> <span style="font-size: 12px;"> {{$s['proj_type']}} </span></td>
                                      <td>{{$s['student']}}</td>
                                      <td>{{($s['start_date'] == '')? 'UNINITIALIZED' : $s['start_date']." to"}} <br/> {{($s['end_date'] == '')? '' : $s['end_date']}}</td>
                                      
                                      @if($s['month_duration'] == '0' || $s['month_duration'] == '1')
                                        <td>{{$s['month_duration']." Month"}}</td>
                                      @elseif($s['month_duration'] == '')
                                        <td>UNINTIALIZED</td>
                                      @else
                                       <td>{{$s['month_duration']." Months"}}</td>
                                      @endif
                                      
                                      <td>{{($s['proj_progress'] == '')? 'UNINITIALIZED' : $s['proj_progress']}}</td>
                          
                                      @if($s['proj_status'] == '')
                                        <td>UNINITIALIZED</td>
                                      @else
                                        @if($s['proj_status'] == 'On Track')
                                          <td><div class="badge badge-outline-primary">{{$s['proj_status']}}</div></td>
                                        @elseif($s['proj_status'] == 'Delayed')
                                          <td><div class="badge badge-outline-warning">{{$s['proj_status']}}</div></td>
                                        @elseif($s['proj_status'] == 'Extended')
                                          <td><div class="badge badge-outline-danger">{{$s['proj_status']}}</div></td>
                                        @elseif($s['proj_status'] == 'Completed')
                                          <td><div class="badge badge-outline-success">{{$s['proj_status']}}</div></td>
                                        @endif
                                      @endif
                                                                 
                                      <td><a href="{{'/update/'.$s['proj_id']}}"><button type="button" class="btn btn-primary">Update</button></a></td>
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
            @include("lecturer.lectscript")
      </body>
    </html>
