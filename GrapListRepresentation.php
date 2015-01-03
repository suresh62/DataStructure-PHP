<?php

class graphNode{
	public $dest;
	public $next;
}

class Graph{

	public $graph=array();

	 function addEdge($source,$dest)
	 {
	 	//from source add a new node...
	 	$prevNode=array_key_exists($source, $this->graph)?$this->graph[$source]:null;

	 	$node=new graphNode();
	 	$node->dest=$dest;
	 	$node->next=$prevNode;	 	
	 	$this->graph[$source]=$node;


	 	
	 	//from destination add new node pointing to source..
	 	$prevNode=array_key_exists($dest, $this->graph)?$this->graph[$dest]:null;
	 	$node=new graphNode();
	 	$node->dest=$source;	
	 	$node->next=$prevNode;	 	 	
	 	$this->graph[$dest]=$node; 

	 	 	//var_dump($this->graph);	

	 }


}


$graph=new Graph();
$graph->addEdge(0,2);
$graph->addEdge(0,4);
$graph->addEdge(1,2);
$graph->addEdge(1,3);
$graph->addEdge(2,3);
$graph->addEdge(2,4);

var_dump($graph->graph);


?>