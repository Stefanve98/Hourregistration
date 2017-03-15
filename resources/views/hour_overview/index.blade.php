@extends('layout.index')

@section('content')
    <div class="x_title">
        <h2>Projects<small>Max .. Projects</small></h2>
        <ul class="nav navbar-right panel_toolbox">


            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <table class="table table-striped projects">
        <thead>
        <tr>
            <th style="width: 1%">#</th>
            <th style="width: 40%">Project Name</th>
            <th>Project Progress</th>
            <th>Status</th>
            <th style="width: 20%">#Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>#</td>
            <td>
                <a>Pesamakini Backend UI</a>
                <br />
                <small>Created 01.01.2015</small>
            </td>
            <td class="project_progress">
                <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                </div>
                <small>57% Complete</small>
            </td>
            <td>
                <button type="button" class="btn btn-success btn-xs">progress</button>
            </td>
            <td>
                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
            </td>
        </tr>
        <tr>
            <td>#</td>
            <td>
                <a>Pesamakini Backend UI</a>
                <br />
                <small>Created 01.01.2015</small>
            </td>
            <td class="project_progress">
                <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                </div>
                <small>57% Complete</small>
            </td>
            <td>
                <button type="button" class="btn btn-success btn-xs">Success</button>
            </td>
            <td>
                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
            </td>
        </tr>

        </tbody>
    </table>

@endsection