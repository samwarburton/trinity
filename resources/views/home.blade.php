@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Overview</div>
                {{$numberOfTasks}}

                <div class="panel-body">
                  <p> {{$projects->count()}} Active Projects</p>
                </div>
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Projects</div>


                <div class="panel-body">
                    <a href="/project/new">Create New Project</a></br></br> 
                    <table class="table table-bordered">
                    @foreach($projects as $project)
                    <tr>
                    <td>{{$project->name}}</td>
                    <td><a href="/project/{{$project->id}}">View</a></td>
                    <td><a href="/project/{{$project->id}}/edit">Edit</a></td>
                    
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
