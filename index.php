<?php
session_start();
require_once('php/CreateDb.php');
require_once('php/component.php');

//create instance of createdb class
$database=new CreateDb("Productdb","Producttb");

if(isset($_POST['addtocart'])){
  //print_r($_POST['product_id']);
if(isset($_SESSION['cart'])){
  print_r($_SESSION['cart']);
  $item_array_id=array_column($_SESSION['cart'],"product_id");
  print_r($item_array_id);
  if(in_array($_POST['product_id'],$item_array_id)){
    echo"<script>alert('Product is already in cart..')</script>";
    echo"<script>window.location='index.php'</script>";
  }else{
    $count=count($_SESSION['cart']);
    $item_array=array(
      'product_id'=>$_POST['product_id']
    );
    $_SESSION['cart'][$count]=$item_array;
    print_r($_SESSION['cart']);
  }
}else{
  $item_array=array(
    'product_id'=>$_POST['product_id']
  );
  $_SESSION['cart'][0]=$item_array;
  print_r($_SESSION['cart']);
}

}


?>

<?php
	// Include the database connection file and HTML 
    // include("index.html");
    // include("cookies.php");
    include("database.php");
    include("search_result.php");
?>

<?php
@include 'conn.php';
if(isset($_POST['add_to_fav'])){



  $product_name = $_POST['product_name'];

  $product_price = $_POST['product_price'];

  $product_image = $_POST['product_image'];

  $product_quantity = 1;

  $select_cart = mysqli_query($conn, "SELECT * FROM `favs` WHERE name = '$product_name'");
  $message=false;

  if(mysqli_num_rows($select_cart) > 0){
    echo '<script>alert("Product already added to fav . ")</script>';
 }
  else{
     $insert_product =  "INSERT INTO `favs`(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
     mysqli_query($conn, $insert_product);
     echo '<script>alert("Product added to fav successfully :) . ")</script>';
  }
  
}

?>

<!-- anything at the top is added -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cars website</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
     integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" 
     crossorigin="anonymous">
    </script>
    <script src="jquery_cookie.js"></script>
    <script src="main.js"></script>
  </head>
  <body>
<!------------------------HEADER-------------------------->
  <?php require_once("php\header.php")?> 
  <!-- ADDED -->
    
    <!------------------------END OF HEADER------------------->

    <!-------LOGIN FORM------------------------------->

    <div class="login-form-container">
      <span class="fas fa-times" id="close-login-form"> </span>

      <form action="">
        <h3>user login</h3>
        <input class="box" type="email" placeholder="Email" />
        <input class="box" type="password" placeholder="Password" />
        <input type="submit" value="login now" class="btn" />
      </form>
    </div>

    <!-------------------REGISTERATION FORM----------------------->

    <div class="register-form-container">
      <span class="fas fa-times" id="close-register-form"> </span>

      <form action="">
        <h3>user registeration</h3>
        <input class="box" type="text" placeholder="Name" />
        <input class="box" type="email" placeholder="Email" />
        <input class="box" type="password" placeholder="Password" />
        <input type="submit" value="Register" class="btn" />
      </form>
    </div>

    <!----------------------HOME SECTON START--------------------->

    <section class="home" id="home">
      <h1 class="home-parallax" data-speed="-2">Find your car</h1>
      <img
        class="home-parallax"
        data-speed="5"
        src="./assets/9693_Three-audi-car-in-different-colors.jpg"
        alt=""
      />
      <a href="#featured" class="btn home-parallax" data-speed="7"
        >Explore cars</a
      >
    </section>

    <!------------------------------ICONS SECTION------------------->
    <section class="icons-container">
      <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
          <h3>150+</h3>
          <p>branches</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
          <h3>4770+</h3>
          <p>cars sold</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
          <h3>590+</h3>
          <p>happy clients</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
          <h3>890+</h3>
          <p>new cars</p>
        </div>
      </div>
    </section>

    <!-- vehicles carousel section starts here -->
    <section class="vehicles" id="vehicles">
      <h1 class="heading">popular <span>vehicles</span></h1>
      <div class="swiper vehicles-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="assets\car-png-39063.png" alt="" />
            <div class="content">
              <h3>new model</h3>
              <div class="price"><span>price:</span>$65000/-</div>
              <p>
                <span class="fas fa-circle"></span>new
                <span class="fas fa-circle"></span>2023
                <span class="fas fa-circle"></span>automatic
                <span class="fas fa-circle"></span>petrol
                <span class="fas fa-circle"></span>183mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="assets\red-sports-car-png-1.png" alt="" />
            <div class="content">
              <h3>new model</h3>
              <div class="price"><span>price:</span>$65000/-</div>
              <p>
                <span class="fas fa-circle"></span>new
                <span class="fas fa-circle"></span>2023
                <span class="fas fa-circle"></span>automatic
                <span class="fas fa-circle"></span>petrol
                <span class="fas fa-circle"></span>183mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="assets\car-png-16841.png" alt="" />
            <div class="content">
              <h3>new model</h3>
              <div class="price"><span>price:</span>$65000/-</div>
              <p>
                <span class="fas fa-circle"></span>new
                <span class="fas fa-circle"></span>2023
                <span class="fas fa-circle"></span>automatic
                <span class="fas fa-circle"></span>petrol
                <span class="fas fa-circle"></span>183mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="assets\car-png-39061.png" alt="" />
            <div class="content">
              <h3>new model</h3>
              <div class="price"><span>price:</span>$65000/-</div>
              <p>
                <span class="fas fa-circle"></span>new
                <span class="fas fa-circle"></span>2023
                <span class="fas fa-circle"></span>automatic
                <span class="fas fa-circle"></span>petrol
                <span class="fas fa-circle"></span>183mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="assets\car-png-16834.png" alt="" />
            <div class="content">
              <h3>new model</h3>
              <div class="price"><span>price:</span>$65000/-</div>
              <p>
                <span class="fas fa-circle"></span>new
                <span class="fas fa-circle"></span>2023
                <span class="fas fa-circle"></span>automatic
                <span class="fas fa-circle"></span>petrol
                <span class="fas fa-circle"></span>183mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="assets\car-png-39072.png" alt="" />
            <div class="content">
              <h3>new model</h3>
              <div class="price"><span>price:</span>$65000/-</div>
              <p>
                <span class="fas fa-circle"></span>new
                <span class="fas fa-circle"></span>2023
                <span class="fas fa-circle"></span>automatic
                <span class="fas fa-circle"></span>petrol
                <span class="fas fa-circle"></span>183mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- vehicles carousel section ends here -->

    <!-- services section starts here -->
    <section class="services" id="services">
      <h1 class="heading">our <span>services</span></h1>
      <div class="box-container">
        <div class="box">
          <i class="fas fa-car"></i>
          <h3>car selling</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor
            sit amet.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-tools"></i>
          <h3>parts repair</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor
            sit amet.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-car-crash"></i>
          <h3>car insurance</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor
            sit amet.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-car-battery"></i>
          <h3>battery replacement</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor
            sit amet.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-gas-pump"></i>
          <h3>oil change</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor
            sit amet.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-car"></i>
          <h3>car rental</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor
            sit amet.
          </p>
        </div>
      </div>
    </section>

    <!-- services section ends here -->

    <!-- featured section starts here -->

    <section class="featured" id="featured">
      <h1 class="heading"><span>featured </span>cars</h1>
      <div class="featured-slider">
        <div class="wrapper"> 
          <?php
          $result=$database->getData();
          while($row=mysqli_fetch_assoc($result)){

            component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);

          }
         
          ?>
          </section>
 <!-- featured section ends here -->

 <!-- coming soon section starts here -->
 <section class="soon">
 <h1 class="heading"><span>coming </span>soon</h1>
 <div class="soon-wrapper">
<?php
$select_products = mysqli_query($conn, "SELECT * FROM `products`");

if(mysqli_num_rows($select_products) > 0){
   while($fetch_product = mysqli_fetch_assoc($select_products)){
?> 
<div class="soon-cards">
 <form action="" method="post">
  
 <img src="<?php echo $fetch_product['image']; ?>"> 
        <h3 class=""><?php echo $fetch_product['name']; ?></h3>
        <p class="price"> <?php echo $fetch_product['price']. '$'; ?></p>
        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
        <input type="hidden" id="fav"   value="add to fav" name="add_to_fav" >
        <button type="submit" class="btn" >Add to favorites</button>
       
   </form>
   </div>
   <?php
        };  
    };
?>
 </div>
<style>
  .soon {
    margin-top: 3rem;
  }
  .soon-wrapper{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  .soon-cards {
    text-align: center;
    padding: 2rem;
    box-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.2);
    border: 1px solid #ccc;
    border-radius: 0.5rem;
    width: 30%;
    margin: 1%;
    transition: transform 0.2s ease-in-out;
  }

  .soon img {
    height: 15rem;
    width: 100%;
    /* object-fit: contain; */
    margin-bottom: 1rem;
  }

  .soon-cards:hover {
    transform: scale(1.05);
  }

  .soon h3 {
    font-size: 2.2rem;
    color: #333;
    margin-bottom: 0.5rem;
  }

  .soon .price {
    font-size: 2.5rem;
    color: #333;
    margin-top: 1rem;
  }

</style>
</section>

    <!-- coming soon section starts here -->

    <!-- contact section starts here -->
    <section class="contact" id="contact">
      <h1 class="heading"><span>contact </span>us</h1>
      <div class="row">
        <iframe
          class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2seg!4v1680908546849!5m2!1sen!2seg"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
        <h3 class="heading">get in touch <span>+5555555</span></h3>
      </div>
    </section>
    <!-- contact section ends here -->

    <!-- COOKIES ADDED -->
    <div>
    <?php if(!isset($_COOKIE['home_cookie_bar'])){ ?>
    <div class="stripPopup">
        <div class="container">
            <div class="contentWrap"> <span>We use cookies on this site to enhance your user experience.</span> <abbr>By
            clicking on any link on this web page, you are giving us consent for us to set cookies.</abbr></div>
            <div class="btnWrap"> <a href="javascript:void(0);" class="btn3 yesiagree">Yes, I agree</a> 
                                  <a href="#" class="btn3">No, I want to find out more</a></div>
    </div>
    <?php } ?>
    </div>
    <!-- COOKIES END HERE -->
    <!-- footer section starts here -->

    <section class="footer" id="footer">
      <div class="box-container">
        <div class="box">
          <a href="https://www.instagram.com/"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a href="https://www.facebook.com/"
            ><i class="fa-brands fa-facebook-f"></i
          ></a>
          <div class="box">
            <a href="#home"><i class="fas fa-arrow-right"></i>home </a>
            <a href="#vehicles"><i class="fas fa-arrow-right"></i>vehicles </a>
            <a href="#services"><i class="fas fa-arrow-right"></i>services </a>
            <a href="#contact"><i class="fas fa-arrow-right"></i>contact </a>
            <a href="feedback.php"><i class="fas fa-arrow-right"></i>feedback </a>

          </div>
        </div>
      </div>
    </section>

    <!-- footer section ends here -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"
     integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" 
     crossorigin="anonymous">
    </script>
    <script src="jquery_cookie.js"></script>
    <script src="main.js"></script> -->
  </body>
</html>