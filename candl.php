<?php require_once 'includes/header.php'?>
<header>
    <h1 class="header-title">SparkyLight</h1>
    <div class="navPlusInput">
    <div class="search-div">
    <span class="material-symbols-outlined">
search
</span>
        <input type="text">
     
    </div>
    <ul class="navbar-list">

        <li href="#" ><span class="material-symbols-outlined">
home
</span></li>
      
        <li href="#"><span class="material-symbols-outlined">
shopping_cart
</span></li>

        <li href="#"><span class="material-symbols-outlined">
favorite
</span></li>
   
       
<a href="login_form.php"> <button class="btn"><?php
session_start();
if(isset($_SESSION["email"])){ $email=$_SESSION["email"];
    $email=substr($email,0,strpos($email,'@'));
    echo  $email;
 }else{echo "Login";} ?></button></a>
 <form action="Candl.php" method="post" style="margin-bottom: 0px; border-bottom:0px;">
 <input type="submit" value="logOut" name="logOut" class="btn"></form>
<?php if(isset($_POST['logOut']))
session_destroy();    ?>
     </ul>
     
</div>
</header>
<main class="main">
        <button class="main-button"> 
            <a href="">Shop Now</a>
        </button>
 </main>
 <div class="collections">
       <div>
        <div class="collec"><h3>  Christmas Collection</h3></div>
        <img src="assets/christmasCollec.jpeg" alt="cg" >
        <div class="middle"><button ><a href="">View Products</a></button>  </div>
       </div>
       <div>
       <div class="collec"><h3>Autumn Collection</h3></div>
        <img src="assets/autumnpic.jpg" alt="cg">
        <div class="middle"><button ><a href="">View Products</a></button>   </div>
       </div>
       <div>
       <div class="collec"><h3>Cozy Collection</h3></div>
        <img src="assets/cozyyyy.jpg" alt="cg">
        <div class="middle"><button ><a href="">View Products</a></button>   </div>
       </div>
    </div>
    <div class="aboutus">
        <video src="assets/okkkkk.mov" width="20%" autoplay muted loop></video>
        <div class="aboutusP">
            <h1>SparkyLight</h1>
            <p>
            SparklyLight is an online marketplace where you can find the best selection of scented candles sourced from Morocco and around the globe. <br> We have handpicked each and every brand on our site – 
            we appreciate quality products produced by artisans; and we know that you do, too. We are your go-to, one-stop shop – whether you’re looking for the perfect gift or just looking to treat yourself.<br>
            Quite simply, we love candles. A candle is special. No matter how advanced our world becomes, nothing will replace it. The feeling of calm and comfort that comes with lighting a wick and letting 
            the aroma unfold around you; becoming entranced by the flicker of the flame – that can never be replicated.
    
            </p>    
        </div>
    </div>
    
    <section class="icons-conta">
<div class="icons">
<img src="assets/Screenshot 2024-01-08 at 01.12.29.png" alt="">
 <div class="info">
<h3>organic</h3>
 <span>ecofriendly</span>
</div> 
</div>
<div class="icons">
<img src="assets/Screenshot 2024-01-08 at 01.12.42.png" alt="">
 <div class="info">
 <h3>ARTISANAL</h3>
 <span></span>
</div> 
</div><div class="icons">
<img src="assets/Screenshot 2024-01-08 at 01.12.59.png" alt="">
 <div class="info">
 <h3>best perfume</h3>
 <span>on all orders</span>
</div> 
</div>

<div class="bestseller">
      <h1>Our best sellers</h1>
    <div class="bestsellercontainer">
        <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img_5terre.jpg">
          <img src="assets/bestseller5.jpeg" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">Rosy candle-Clover collection   <h3>40 MAD</h3></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img_forest.jpg">
          <img src="assets/bestseller9.jpeg" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Tobacco & vanilla-108am collection   <h3>40 MAD</h3></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img_lights.jpg">
          <img src="assets/bestseller2.jpeg" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">cocount & Amorica collection   <h3>40 MAD</h3></div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img_5terre.jpg">
          <img src="assets/bestseller3.jpeg" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">Pear candle-Clover collection
          <h3>40 MAD</h3>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img_5terre.jpg">
          <img src="assets/bestseller4.jpeg" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">Ginger candle-Clover collection
          <h3>40 MAD</h3>
        </div>
      </div>    
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img_5terre.jpg">
          <img src="assets/amande.jpeg" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">Amandy-cozy collection  
          <h3>40 MAD</h3> 
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img_5terre.jpg">
          <img src="assets/milkandhoney.jpeg" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">Milk & Honney-108am collection
          <h3>40 MAD</h3> 
          </div>
      </div>
    </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_5terre.jpg">
            <img src="assets/bestseller7.jpeg" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">wooody-cozy collection
              <h3>40 MAD</h3>
          </div>
        </div>
      </div>
    </div>  
    </div>

<div class="testimonilas" >
  <div class="inner" >
 <h1>Review</h1>
 <div class="border" ></div>
 <div class="row">
  <div class="col">
    <div class="testimonila">
      <img src="assets/profile8.jpeg" alt="profile1" width="100%" >
      <div class="name">Clara Addison</div>
      <div class="stars">
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star-outline"></ion-icon>
      <ion-icon name="star-outline"></ion-icon>
      </div>
      <p>Good service <br> </p>
    </div>
  </div>
  <div class="col">
    <div class="testimonila">
      <img src="assets/profile3.jpeg" alt="profile1" width="100%">
      <div class="name">Paul </div>
      <div class="stars">
      <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
      </div>
      <p> It has a good smell <br> </p>
    </div>
  </div>
  <div class="col">
    <div class="testimonila">
      <img src="assets/profile9.jpeg" alt="profile1" width="100%">
      <div class="name">Sarah</div>
      <div class="stars">
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star"></ion-icon>
      <ion-icon name="star-outline"></ion-icon>
      </div>
      <p> Ginger candle smells so good (:</p>
    </div>
  </div>

 </div>
  </div>