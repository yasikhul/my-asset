@extends('layouts.layout')
@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid mt-5">
        <div class="row mb-2">
          <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="text-center">DataTable with default features</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Manufcature</th>
                                <th>Model</th>
                                <th>Assignee</th>
                                <th>Dept</th>
                            </tr>
                        </thead>
                        <tbody>
                               
                        </tbody>
                    </table>
              </div>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
@endsection