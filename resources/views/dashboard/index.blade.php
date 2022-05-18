@extends('dashboard.layouts.main')

@section('container')
<!-- page content -->

<div class="right_col" role="main">
    <!-- top tiles -->

    <div class="row" style="display: inline-block;" >
        <!-- Dashboard START -->
        <!-- Dashboard END -->
        <div class="">
            <div class="row" style="display: inline-block;">
                <div class="top_tiles d-flex flex-row bg-info mb-3">
                    <div class="card w-75">
                        <div class="card-body">
                          <h5 class="card-title">Schedule</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="/newschedule" class="btn btn-primary">Buat</a>
                        </div>
                      </div>
                      <div class="card w-75">
                        <div class="card-body">
                          <h5 class="card-title">Personal</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="/newpersonal" class="btn btn-primary">Buat</a>
                        </div>
                      </div>
                </div>


          </div>
        </div>
          <!-- /top tiles -->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Default Example <small>Users</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
                  <p class="text-muted font-13 m-b-30">
                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                  </p>
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>


                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
            </div>
          </div>

        </div>
        <!-- /page content -->
@endsection
