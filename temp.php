<?php
/* this file is to view the products as we want it to */
	$products[1] = array(
    'name' => 'Photo 1',
    'price' => 500,
    'category' => 'oilpainting',
    'description' => 'this painting .......'
  );

  echo"
      <p>
        ".$products[1]['name']."<br>
        price: ".$products[1]['price']."<br>
        category:".$products[1]['category']."<br>
        ".$products[1]['description']."<br>
        </p>"
        
  ?>