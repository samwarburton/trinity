@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Project</div>

                <div class="panel-body">
                    
                    <form method="post" action="/project/new">
                    	<div class="form-group">
                    		{{csrf_field()}}
                    		<input name="project_name" class="form-control" type="text" placeholder="Name" value="{{$project->name}}"></input></br>
                    		<textarea name="project_description" class="form-control" placeholder="Enter Description">{{$project->description}}</textarea></br>
                    		<input type="submit" class="btn btn-default" value="Update">
                    	</div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
