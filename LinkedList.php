<?php

class node{
	public $data;
	public $next;
}

class linkedList{	
	
	public $head;
	
	public function __construct()
	{
		$this->head=null;
	}
	
	public function checkForEmptyList()
	{
		if($this->head==null){
			return true;	
		}		
				
		return false;
		
	}
	
	public function intialize($data)
	{
		    $node=new node();
			$node->data=$data;
			$node->next=null;
			
			$this->head=new node();
			$this->head->data='';
			$this->head->next=$node;		
	}
	
	public function insertNodeAtFirst($data)
	{
		if($this->checkForEmptyList()){
			$this->intialize($data);
		}
		else {
			
			 $firstNode=$this->head->next;		
			 
			 $newNode=new node();
			 $newNode->data=$data;
			 $newNode->next=$firstNode;	 		 
			 
			 $this->head->next=$newNode;	
			
		}
		 
	}
	
 	public function findLastNode()
	{
		$cur=$this->head->next;		
		$prev=null;
		
		while($cur!=null){
			$prev=$cur;					
			$cur=$cur->next;		
		}		
		
		return $prev;
	}
	
	public function findNodeAtAPosition($pos)
	{
		$index=0;
		
		$cur=$this->head->next;		
		$prev=$cur;
		
		while($cur!=null){
			if($index==$pos)
			 break;
			$prev=$cur;					
			$cur=$cur->next;	
			
			$index++;	
		}	
		
		return $prev;
	}
	
	public function findNodeAtBeforePosition($pos)
	{
		$index=0;
		
		$cur=$this->head;		
		$prev=$cur;
		
		while($cur!=null){
			if($index==$pos-1)
			 break;
			$prev=$cur;					
			$cur=$cur->next;	
			
			$index++;	
		}	
		
		return $prev;
	}
	
	public function  insertAtEnd($data)
	{
		if($this->checkForEmptyList()){
			$this->intialize($data);
		}
		else{
			
			$lastNode=$this->findLastNode();
			
			
			$node=new node();
			$node->data=$data;
			$node->next=null;
			
			$lastNode->next=$node;		
			
		}
	}
	
	public function insertAtPosition($pos,$data)
	{
		if($this->checkForEmptyList()){
			$this->intialize($data);
		}
		else{
			
			$nodeAtPosistion=$this->findNodeAtAPosition($pos);
			$nodeBeforePosistion=$this->findNodeAtBeforePosition($pos);
			//var_dump($nodeAtPosistion);
			//var_dump($nodeBeforePosistion);
			
			
			$node=new node();
			$node->data=$data;
			$node->next=$nodeAtPosistion;
			
			$nodeBeforePosistion->next=$node;		
			
		}
	}
	
	public function traverseNodes()
	{
		$cur=$this->head->next;
		
		
		while($cur!=null)
		{
			
			$data=$cur->data;
			$cur=$cur->next;
			echo $data.'<br/>';
			
		}		
		
	}
}


$list=new linkedList();
$list->insertNodeAtFirst(5);

$list->insertAtEnd(7);
$list->insertNodeAtFirst(6);
$list->insertAtPosition(1, 8);

$list->traverseNodes();



?>

