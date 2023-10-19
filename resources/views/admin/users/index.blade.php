@extends('layouts.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">users</li>
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

                </div>

                <div class="card-body">
                <table id="example1" class="table datatable table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>

                        <th>Email</th>
                        <th>phone</th>
                        <th>number Task</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr>
                            <td>{{$row['name']??''}}</td>

                            <td>{{$row['email']??''}}</td>
                            <td>
                             {{$row['phone']}}

                            </td>
                            <td>
                            {{$row['tasks_count']??0}}

                            </td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>
                </div>
            </div>
        </section>

    </div>
@endsection
@section("js")
    <script>
        setInterval(function (){
            $.ajax({
                type:"get",
                url:"{{route('users.index')}}",
                success:function (data){
                    var tr="";
                   for (var i=0;i<data.length;i++){
                        tr+="<tr>" +
                            "<td>"+data[i]['name']+"</td>" +
                            "<td>"+data[i]['email']+"</td>" +
                            "<td>"+data[i]['phone']+"</td>" +
                            "<td>"+data[i]['tasks_count']+"</td>" +
                            "</tr>"

                   }
                    $('tbody').html(tr)
                }
            })

        },10000)

    </script>

@endsection

