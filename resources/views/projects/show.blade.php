@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Projects </div>
                <div class="panel-body">

                <h3>{{$project->name}}</h3></br>
                <p>{{$project->description}}</p>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Task</div>
                <div class="panel-body">
                    <form method="post" action="/project/{{$project->id}}">
                        <div class="form-group">
                        {{csrf_field()}}
                        <input type="text" name="task_name" class="form-control" placeholder="Create New Task"></br>
                        <input class="btn btn-default" type="submit" value="Create Task">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$tasks->count()}} Tasks</div>
                <div class="panel-body">
                  <div class="container">
                    @foreach($tasks as $task)
                    <div class="row">
                    <p>{{$task->name}}</p> <a href="#">Delete</a> <a href="#">Mark as Complete</a>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Completed Tasks</div>
                <div class="panel-body">
                  <div class="container">
                    @foreach($tasks as $task)
                    <div class="row">
                    <p>{{$task->name}}</p> <a href="#">Delete</a> <a href="#">Mark as Complete</a>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
