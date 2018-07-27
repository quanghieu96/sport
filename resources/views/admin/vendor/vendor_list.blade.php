@extends('admin.shared.master')
@section('content')
    <div class="clearfix"></div>

    <div class="row float-xs-right">
        <div class="col-md-8 col-sm-8 col-xs-8">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type</th>
                            <th>Descript</th>
                            <th>Status</th>
                            <th>Create date</th>
                            <th>Upadte At</th>
                        </tr>
                        </thead>

                        <tbody>
                        @for($i=0;$i<count($products);$i++)
                        <tr>
                            <td>{{ $products[$i]->id }}</td>
                            <td>{{ $products[$i]->type }}</td>
                            <td>{{ $products[$i]->description }}</td>
                            <td>{{ $products[$i]->status }}</td>
                            <td>{{ $products[$i]->created_at}}</td>
                            <td>{{ $products[$i]->updated_at}}</td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    @endsection