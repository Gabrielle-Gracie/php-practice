 <?php




// class Task
// {

// 	public $description;


// 	public $completed = false;


// 	public function __construct($description)
// 	{
// 		$this->description = $description; 
// 	}


// 	public function complete()
// 	{
// 		$this->completed = true;
// 	}


// 	public function isComplete()
// 	{
// 		return $this->completed;
// 	}

// }


// $tasks = [

// 	new Task('Go to market'),
// 	new Task('Complete assignment'),
// 	new Task('Cook dinner')

// ];

// $tasks[0]->complete();

// require 'function.php';

 require 'vendor/autoload.php';

 require 'core/bootstrap.php';



// require 'Task.php';






// dd($tasks);


// $router = new Router;


// require 'routes.php';







require Router::load('routes.php')
->direct(Request::uri(), Request::method());




