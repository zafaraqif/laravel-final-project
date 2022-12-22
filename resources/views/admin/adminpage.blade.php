
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
                          <h4 class="card-title"> Final Year Project 1 </h4>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th> Project Title and Type </th>
                                  <th> Supervisor</th>
                                  <th> Examiners </th>
                                  <th> Student </th>
                                  <th> Action </th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach($data as $d)
                                  <tr>
                                    <td>{{Str::limit($d['proj_title'], 35, '...')}} <br/> <span style="font-size: 12px;"> {{$d['proj_type']}} </span></td>                                      <td>{{$d['supervisor']}}</td>
                                      <td>{{$d['examiner1']}}<br/>{{$d['examiner2']}}</td>
                                      <td>{{$d['student']}}</td>
                                      <td><a href="{{'/delete/'.$d['proj_id']}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                  </tr>
                                  @endforeach
                              </tbody>
                            </table>
                            <div>
                                @if ($data->hasPages())
                                <nav>
                                    <ul class="pagination">
                                        {{-- Previous Page Link --}}
                                        @if ($data->onFirstPage())
                                            <li class="page-item disabled" aria-disabled="true">
                                                <span class="page-link">@lang('pagination.previous')</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                                            </li>
                                        @endif
                                        
                                        {{-- Next Page Link --}}
                                        @if ($data->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled" aria-disabled="true">
                                                <span class="page-link">@lang('pagination.next')</span>
                                            </li>
                                        @endif
                                    </ul>
                                    </nav>
                                @endif
                              </div>
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
