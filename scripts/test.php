<?php
require 'firebaseLib.php';
require 'objects/Product.php';

$path='/products';
$firebase = new Firebase('https://popcart.firebaseio.com', 'u6V7Q6zAxWp6vdhQSmq4pNX4MSUL7mtPwfqtYFgR');

$product=new Product("1","BestItem","benjamin","haha.jpg",15.0,16,"Best Item in the Univ");

$productsArray=json_decode($firebase->get($path),true);
$productsArray[]=$product;
$firebase->set($path,$productsArray);
echo $firebase->get($path);


?>