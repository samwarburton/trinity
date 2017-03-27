@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Project</div>

                <div class="panel-body">
                    
                    <form method="post" action="/project/{{$project->id}}/update">
                    	<div class="form-group">
                    		{{csrf_field()}}
                    		<input name="project_name" class="form-control" type="text" placeholder="Name" value="{{$project->name}}"></input></br>
                    		<textarea name="project_description" class="form-control" placeholder="Enter Description">{{$project->description}}</textarea></br>
                    		<input type="submit" class="btn btn-default" value="Update">
                            <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModal">
                              Delete
                            </button>
                    	</div>
                    </form>
<!-- Button trigger modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Warning</h4>
                          </div>
                          <div class="modal-body">
                            Are you sure you want to delete {{$project->name}}?                          </div>
                          <div class="modal-footer">
                            <form action='/project/{{$project->id}}/delete'>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete Project</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
