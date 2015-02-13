<?php 

class Product{

	 public $productID="";
	 public $productName="";
	 public $username="";
	 public $image="";
	 public $price;
	 public $stock;
	 public $desc;

	//constructor
	public function __construct($newID,$newName,$newUser,$newImage,$newPrice,$newStock,$newDesc){
		$this->productID=$newID;
		$this->productName=$newName;
		$this->username=$newUser;
		$this->image=$newImage;
		$this->price=$newPrice;
		$this->stock=$newStock;
		$this->desc=$newDesc;
	}
	/*
	//setters
	public function setUsername($newName){
		$username=$newName;
	}
	
	public function setProductID($newPD){
		$productID=$newPD;
	}
	
	public function setProductName($newName){
		$productName=$newName;
	}
	
	public function setImage($newImage){
		$image=$newImage;
	}
	public function setPrice($newPrice){
		$price=$newPrice;
	}
	
	public function setStock($newStock){
		$stock=$newStock;
	}
	public function setDesc($newDesc){
		$desc=$newDesc;
	}

	//getters
	public function getProductID(){
		return $productID;
	}
	public function getProductName(){
		return $productName;
	}
	public function getImage(){
		return $image;
	}
	public function getPrice(){
		return $price;
	}
	public function getStock(){
		return $stock;
	}
	public function getDesc(){
		return $desc;
	}
	public function getUsername(){
		return $username;
	}*/
}


?>