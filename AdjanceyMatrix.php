<?php


/**
* graph operation implementation.
* 
*/
class Graph
{
	
	private $len=0;
	private $graph=array();
	private $visited=array();

	function __construct() {
		$this->graph= array(
				array( 0, 1, 1, 0, 0, 0 ),
				array( 1, 0, 0, 1, 0, 0 ),
				array( 1, 0, 0, 1, 1, 1 ),
				array( 0, 1, 1, 0, 1, 0 ),
				array( 0, 0, 1, 1, 0, 1 )
		);
		$this->len=count($this->graph);
		$this->init();

	}

	function init()
	{
		for($i=0;$i<$this->len;$i++)
		{
			$this->visited[$i]=0;
		}
	}

	function depthFirstSearch($vertex)
	{
		$this->visited[$vertex]=1;

			for($i=0;$i<$this->len;$i++)
			{
				if($this->graph[$vertex][$i] ==1 && !$this->visited[$i])
				{
					$this->depthFirstSearch($i);
				}
			}

		echo "$vertex <br>";
	}

	function breathFirstSearch($start)
	{
		$this->init();
		$queue=array();

		array_push($queue, $start);

		while(count($queue)){

			$t=array_shift($queue);
			var_dump($queue);

			foreach ($this->graph[$t] as $key => $vertex) {
				if(!$this->visited[$key] && $vertex==1)
					$this->visited[$key]=1;
					array_push($queue,$key);
			}
		}
		print_r($this->visited);

	}


}

$graph=new Graph();
$graph->depthFirstSearch(2);

?>



