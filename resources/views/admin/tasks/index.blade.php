@extends('layouts.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Task</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Tasks</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card-header">
                    <a href="{{route($route_pref.'.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Create Task </a>
                </div>

                <div class="card-body">
                    <table id="example1" class="table datatable table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>title</th>

                            <th>Description</th>
                            <th>assigned name</th>
                            <th>admin name</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rows as $row)
                            <tr>
                                <td>{{$row['title']??''}}</td>

                                <td>{{$row['description']??''}}</td>
                                <td>
                                 {{$row['users']['name']??''}}

                                </td>
                                <td>

{{$row['admins']['name']??''}}
                                </td>
                            </tr>

                        @endforeach
                        </tbody>

                    </table>
                    <dev class="pagination">
                        {{$rows->links()}}
                    </dev>
                </div>
            </div>
        </section>

    </div>
@endsection

