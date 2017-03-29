@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Project Overview </div>
                <div class="panel-body">

                <h3>{{$project->name}}</h3></br>
                <p><b>Deadline: </b> {{$project->deadline}}</p>
                <p><b>Description: </b>{{$project->description}}</p></br>
                <p><b>Key Outcomes: </b>{{$project->keyOutcomes}}</p></br>

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
                <div class="panel-heading">{{$incompleted_tasks->count()}} Incomplete Tasks</div>
                <div class="panel-body">
                  <div class="container">
                    @foreach($incompleted_tasks as $task)
                    
                    

                    <p>{{$task->name}} <a href="/project/{{$project->id}}/task/{{$task->id}}/complete">Mark Completed</a><a href="/project/{{$project->id}}/task/{{$task->id}}/delete">Delete</a> </p></br>

                    

                    


            

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
                <div class="panel-heading">{{$completed_tasks->count()}} Completed Tasks</div>
                <div class="panel-body">
                  <div class="container">
                    @foreach($completed_tasks as $task)
                    
                    

                    <p>{{$task->name}}  <a href="/project/{{$project->id}}/task/{{$task->id}}/delete">Delete</a> </p></br>

                    

                    


            

                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
