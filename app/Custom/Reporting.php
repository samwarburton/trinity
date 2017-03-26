<?php

namespace App\Custom;

use App\Task;

class Reporting {



	public function getPercentage(){

		$total_tasks = Task::all()->count();
		$completed_tasks = Task::where('completed', true)->count();

		$total = $completed_tasks / $total_tasks * 100;

		return $total_tasks;

	}







}





?>