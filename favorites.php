<?php
@include 'conn.php';

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `favs` WHERE id = '$remove_id'");
  header('location:favorites.php');
};
if(isset($_GET['delete_all'])){
  mysqli_query($conn, "DELETE FROM `favs`");
  header('location:favorites.php');
}
?>
<!DOCTYPE php>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cars website</title>
    <link rel="stylesheet" href="12.css"/>
    <link rel="stylesheet" href="style.css" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
  </head>
  <body>
    <!------------------------HEADER-------------------------->

    <?php require_once("php\header.php")?> 
  <!-- ADDED -->
    <!------------------------END OF HEADER------------------->
    <div class="cart">
    <table>
    <thead>
    
    <!-- <th>image</th> -->
    <th>name</th>
    <th>price</th>
    <!-- <th>action</th> -->

 </thead>



 <tbody>



    <?php 

    

    $select_cart = mysqli_query($conn, "SELECT * FROM `favs`");


    if(mysqli_num_rows($select_cart) > 0){

       while($fetch_cart = mysqli_fetch_assoc($select_cart)){

    ?>



    <tr>

       <!-- removed img -->

       <td><?php echo $fetch_cart['name']; ?></td>

       <td><?php echo $fetch_cart['price']; ?>/-</td>

       <td>

        
 

       </td>

      

      <!-- removed remove btn -->

    </tr>

    <?php

     

       };

    };

    ?>

    <tr class="table-bottom">

       <td><a href="index.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>

       <td colspan="3"></td>

       

       <td><a href="favorites.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>

    </tr>



 </tbody>



</table>
    </div>
<br>


     
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
        </div>
      </div>
    </div>
  </section>

  <!-- footer section ends here -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js.js"></script>
</body>
</html>