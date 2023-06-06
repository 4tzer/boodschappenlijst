<?php

class Grocery 
{
public  $name;
public $productQuantity;
public $productPrice;
public $productTotalCost;



	public function __construct($name, $productQuantity, $productPrice){
		$this->productTotalCost = ($productQuantity *  $productPrice);
		}
	
	
}