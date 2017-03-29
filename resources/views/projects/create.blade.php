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
                    		<input name="project_name" class="form-control" type="text" placeholder="Project Name"></br>
                            <label>Deadline:</label>
                            <input name="deadline" class="form-control" type="date"></br>
                    		<textarea rows="10" name="project_description" class="form-control" placeholder="Description"></textarea></br>
                            <textarea rows="10" name="key_outcomes" class="form-control" placeholder="Key Outcomes"></textarea></br>
                    		<input type="submit" class="btn btn-default" value="Create">
                    	</div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
