<?php

namespace App;

use App\Task;
use App\Project;
use Auth;

class Report 
{	
	private $projects;
	private $tasks;

	 public function __construct()
    {
        $this->projects = new Project;
        $this->tasks = new Task;

		
    }


    public function percentageOfTasksComplete(){
    	$allTasks = $this->tasks::all();
    	$completedTasks = $this->tasks::where('completed', true)->get();
    	$numberOfCompletedTasks = $completedTasks->count();
    	$numberOfTasks = $allTasks->count();

    	return $numberOfTasks;

    }




	public function getAllProjects(){
		$id = Auth::id();
		$projects = $this->projects::where('user_id', $id)->get();
		return $projects;

	}

    public function taskCompletion(Task $task){
    	



    }




}
