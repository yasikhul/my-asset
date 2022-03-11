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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                              @php
                                  $no=1;
                              @endphp
                               @foreach ($data as $item)
                                  <tr>
                                    <td>{{ $no++ }}</td>
                                    <td> {{ $item->manufacture }} </td>
                                    <td> {{ $item->model }} </td>
                                    <td> {{ $item->assignee }} </td>
                                    <td> {{ $item->department }} </td>
                                    <td><a href="#" class="btn btn-success">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
                                  </tr>
                               @endforeach
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