@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <section class="content">
                <div class="container-fluid">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{$total}}</h3>

                                    <p>Total Records</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{$synced}}</h3>

                                    <p>Synced</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{($total-$synced)}}</h3>

                                    <p>Not synced</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{count($errors)}}</h3>

                                    <p>Sync Error</p>
                                </div>

                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{$employee_count}}</h3>

                                    <p>Employee</p>
                                </div>

                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        @foreach($readers as $reader)
                            <div class="col-lg-4 col-12">
                                <div class="panel panel-{{$reader->status==1 ? "success" : "danger"}}">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">{{$reader->description}}</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h3>{{$reader->ip}} : {{$reader->status==1 ? "" : "In Active"}}</h3>
                                        <p><b>Last Sync</b>  : {{$reader->lastRecord['date_time']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Employee Name</th>
                                            <th>Reader</th>
                                            <th>Employee Number</th>
                                            <th>Error</th>
                                        </tr>
                                        @foreach($errors as $error)
                                            <tr>
                                                <td>{{$error->employee_name}}</td>
                                                <td>{{$error->reader->description}}</td>
                                                <td>{{$error->employee_number}}</td>
                                                <td>{{$error->message}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

@endsection

