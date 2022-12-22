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
              <div class="col-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Software Engineering Students </h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Student ID </th>
                            <th> Student Name </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $display)
                            <tr>
                                <th>{{$display['stud_id']}}</th>
                                <td>{{$display['college_id']}}</td>
                                <td>{{$display['stud_name']}}</td>
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