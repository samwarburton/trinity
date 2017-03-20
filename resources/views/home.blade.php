@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Projects / <a href="/project/new">Create New Project</a></div>

                <div class="panel-body">
                    @foreach($projects as $project)

                    <a href="/project/{{$project->id}}">{{$project->name}}</a></br>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
