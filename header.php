<link rel="stylesheet" href="style.css" />
 
 
 <!------------------------HEADER-------------------------->

 <header class="header" >
      <div id="menu-btn">
        <i class="fa-solid fa-bars"></i>
      </div>

      <a href="#" class="logo"><span>max</span>wheels </a>
      <nav class="navbar" style="text-decoration:none;">
        <a href="index.php">Home</a>
        <a href="#services">Services</a>
        <a href="feedback.php">Feedback</a>
        <a href="favorites.php"> Favorites</a>
        <a href="#contact">Contact</a>
      </nav>
       <!------------------Search-------------------------->
       <form action="index.php" method="get">
        <div type="box" class="search_box pull-down">
          <input name="find" type="text" placeholder="Search"/>
          <input type="submit" name="submit"/>

        </div>
      </form>
      <!-------------------------------------------------->
      <div id="login-btn">
        <a href="login.php">
        <button class="btn">Login</button>
        <i class="far fa-user"></i>
        </a>
      </div>
      <div id="register-btn">
        <a href="register.php">
        <button class="btn">Register</button>
        <i class="fa-solid fa-user-plus"></i>
        </a>
      </div>
      <div>
       <a href="cart.php"><button style="font-size:1.5rem; cursor:pointer; background:none;"><i class="fa-solid fa-cart-shopping"></i> Cart</button></a> </div>
    </header>
    <!------------------------END OF HEADER------------------->