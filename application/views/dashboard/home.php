<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-compatible" content="IE=edge">
	<title>Halaman Home</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?=base_url();?>/images/1.jpg" alt=""/>
    </div>
    <div class="item">
      <img src="<?=base_url();?>/images/2.jpg" alt=""/>
    </div> 
          <div class="item">
      <img src="<?=base_url();?>/images/3.jpg" alt=""/>
    </div> 
          <div class="item">
      <img src="<?=base_url();?>/images/4.jpg" alt=""/>
    </div> 
          <div class="item">
      <img src="<?=base_url();?>/images/5.jpg" alt=""/>
    </div>    
  </div>
 

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
</body>	