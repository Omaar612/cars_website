<?php

function component($productname,$productprice,$productimg,$productid){
  $element='
  <form action="index.php" method="post">
          <div class="box" style="width:33rem; margin:1rem;">
              <img src='.$productimg.' alt="image not found" />
              <h3>'.$productname.'</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">$'.$productprice.'</div>
              <button type="submit" class="btn" name="addtocart">Book Now</button>
              <input type="hidden" name="product_id" value='.$productid.'>
              
          </div>
          </form>
       
  ';
echo $element;
}


function cartElement($productimg,$productname,$productprice,$productid){
  $element='
  <form action="cart.php?action=remove&id='.$productid.'" method="post" class="cart-items">
    <div class="border rounded">
      <div class="row bg-white">
        <div class="col-md-3">
          <img src="'.$productimg.'" alt="image1" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h5 class="pt-2">'.$productname.'</h5>
          <h5 class="pt-2">$'.$productprice.'</h5>
          
          <button type="submit" class="btn btn-danger mx-2" name="remove" style="font-size:1.3rem; background:#dc492b; padding:0.5rem;">Remove</button>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </form>
  ';
  echo $element;
}



?>
