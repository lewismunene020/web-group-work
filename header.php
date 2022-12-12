<?php
  include_once("config/config.php");


  function  showSuccessfulUpload($name , $description , $price , $quantity , $image , $msg=""){
         
    $output = '<div class="popup active">
           <div class="container display-upload">
               <h1>'.$msg.'</h1>
   
               <h2 class="product-label">Product Name : <b>'.$name.'</b></h2><br><br>
               <h2 class="product-label">Product Image :</h2>
               <img src="images/'.$image.'" alt="" width="200px" height="200px">
   
               <h2 class="product-label" >Product Description : <b>'.$description.'</b></h2><br>
               <h2 class="product-label" >Product Price : <b>'.$price.'</b></h2><br>
               <h2 class="product-label" >Product Quantity : <b>'.$quantity.'</b></h2><br>
           </div>
   </div>
   ';

   return $output;
}


?>