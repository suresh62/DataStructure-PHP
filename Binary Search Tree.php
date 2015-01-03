<?php

class TreeNode
{
	public $leftPointer;
	public $rightPointer;
	public $data;
	
	public function __construct()
	{
		$this->leftPointer=null;
		$this->rightPointer=null;
		$this->data='';
	}
	
}


class BinarySearchTree
{
	public $root;
	
	public function __construct()
	{
		$this->root=null;
	}
	
	
	public function checkIfTreeHasARoot()
	{
		if($this->root!=null){
	     	return true;	
		}		 
		return false;
		
	}
	
	public function insert($data)
	{
		$parentNode=null;
		
		if($this->checkIfTreeHasARoot()){
			
			$parentNode=$this->root;
			$currentNode=new TreeNode();
			
			if($data>=$parentNode->data)
			{
				$currentNode->leftPointer=null;
				$currentNode->rightPointer=null;
				$currentNode->data=$data;
				
				$parentNode->rightPointer=$currentNode;
			}
			else {
				$currentNode->leftPointer=null;
				$currentNode->rightPointer=null;
				$currentNode->data=$data;
				
				$parentNode->leftPointer=$currentNode;
			}	
		}
		else {
			$this->root=new TreeNode();
			$this->root->data=$data;
			$this->root->leftPointer=null;
			$this->root->rightPointer=null;
		}
		
	}
	
	public function preOrderTraversal($node)
	{
		echo $node->data.'<br/>';
	
		
		if($node->leftPointer!=null)
		{
			$this->preOrderTraversal($node->leftPointer);
			
			
		}
		
		if($node->rightPointer!=null)
		{
			$this->preOrderTraversal($node->rightPointer);
		}		
	}	
	
}



$bst=new BinarySearchTree();
$bst->insert(8);
$bst->insert(3);
$bst->insert(10);
$bst->insert(1);
$bst->insert(6);
$bst->insert(4);
$bst->insert(7);
$bst->insert(14);
$bst->insert(3);

$bst->preOrderTraversal($bst->root);

?>