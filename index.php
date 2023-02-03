<?php
//put setion id in every setion to make it access to pages
session_start();

	include("connecton.php");
	include("function.php");
//functio login and con is connecton
	$user_data = check_login($con);

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BOOKSTORE</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    </head>
    <body>
        <!-- create nav bar-->
        <section id="header">
            <div>
                <ul id="navbar">
                    <li><a  class="active " href="index.php">Home</a></li>
                    <li><a href="#bookshop">Shop</a></li>
                    <li><a href="#contactstore">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <a href="#" class="active" id ="close"><i class="fas fa-times" aria-hidden="true" ></i></a>
                    <div class="cart-box">
                        <div class="cart-icon">
                          <i  id ="lg-bag"class="fas fa-shopping-cart fa-2x"></i>
                        </div>
                        <div class="whole-cart-window hide">
                          <h3>Shopping Bag</h3>
                          <div class="cart-wrapper">
                            <div class="cart-item">
                                       <img src="assets/images/book-1.png">
                                       <div class="details">
                                           <h5>Item Name</h5>
                                           <p>
                                            <span class="quantity">Quantity: 1</span>
                                               <span class="price">Price: $15.00</span>
                                            </p>
                                       </div>
                                       <div class="cancel"><i class="fas fa-window-close"></i></div>
                                    </div>

                            <!-- item 2 -->
                            <div class="cart-item">
                                        <img src="./assets/images/book-2.png">
                                        <div class="details">
                                            <h3>Item Name</h3>

                                             <span class="quantity">Quantity: 1</span>
                                                <span class="price">Price: $23.44</span>
                                            </p>
                                        </div>
                                        <div class="cancel"><i class="fas fa-window-close"></i></div>
                              </div>
                          </div>
                                      <div class="subtotal">Subtotal: $0.00</div>
                                       <div class="checkout">Checkout</div>
                                       <div class="view-cart">View Cart</div>
                        </div>
                  </div>
                </ul>
            </div>
            <div id="mobile">
                <i id="bar" class="fa fa-bars"></i>
                <a class=" active" href="cart.html"></a><i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
        </section>
        <br>

        <section id="hero">
            <h2>BUY AND</h2>
            <h2>GET NEW</h2>
            <h2>FAVORITES</h2>
            <h1> BOOKS </h1>
            <h2>COLLECTION </h2>
            <br>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="./assets/images/feature-1.png" alt="" >
                <h6>Free shipping</h6>
            </div>
            <div class="fe-box">
                <img src="./assets/images/feature-2.png" alt="" >
                <h6>Secure payment</h6>
            </div>
            <div class="fe-box">
                <img src="./assets/images/feature-3.png" alt="" >
                <h6>Best price</h6>
            </div>
            <div class="fe-box">
                <img src="./assets/images/feature-4.png" alt="" >
                <h6>Easy Return</h6>
            </div>
        </section>


        <section id="prodect1" class="section-p1">
          <h2 id ="bookshop">Purpler collection</h2>
          <p>Best collection of books</p>
          <div class="pro-container" >

            <div  data-id="1" class ="pro" onclick="window.location.href='sprodect.html';">
                <img src ="./assets/images/book-1.png" alt="">
                <div class="des">
                 <h5>Black night</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$15</h4></span>
                 <span class="add-to-cart-btn">Add to cart</span>
                </div>


            </div>



            <div data-id="2"  class ="pro" onclick="window.location.href='sprodect2.html';">
                <img src="./assets/images/book-2.png" alt="">
                <div class="des">
                 <h5>About the first night</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>

                  </div>
                  <span id="prics" class="price"><h4>$25</h4></span>
                 </div>
                 <span class="add-to-cart-btn">Add to cart</span>


            </div>
            <div data-id="3" class ="pro"  onclick="window.location.href='sprodect3.html';">
                <img src="./assets/images/book-3.png" alt="">
                <div class="des">
                 <h5 id ='name'>Open the sky</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span id="prics" class="price"><h4>$15</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div data-id="4" class ="pro">
                <img src="./assets/images/book-4.png" alt="">
                <div class="des">
                 <h5>Book hardcover</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$35</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div data-id="5" class ="pro">
                <img src="./assets/images/book-5.png" alt="">
                <div class="des">
                 <h5>The big book of science</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$20</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div data-id="6"  class ="pro">
                <img src="./assets/images/book-6.png" alt="">
                <div class="des">
                 <h5>By the Air</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$15</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div data-id="7" class ="pro">
                <img src="./assets/images/book-7.png" alt="">
                <div class="des">
                 <h5>Murdering last year</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$15</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>
            </div>
            <div data-id="8" class ="pro">
                <img src="./assets/images/book-8.png" alt="">
                <div class="des">
                 <h5>Stay healthy</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$5</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div data-id="9" class ="pro">
                <img src="./assets/images/book-9.png" alt="">
                <div class="des">
                 <h5>Self care</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>

                 </div>
                 <span class="price"><h4>$10</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div  data-id="10" class ="pro" class="card-item">
                <img src="./assets/images/book-10.png" alt="">
                <div class="des">
                 <h5>Welcome to space</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$15</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div data-id="11" class ="pro">
                <img src="./assets/images/book-11.png" alt="">
                <div class="des">
                 <h5>Monsoon</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>

                 </div>
                 <span class="price"><h4>$15</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div data-id="12" class ="pro">
                <img src="./assets/images/book-12.png" alt="" >
                <div class="des">
                 <h5>Every thing you never</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$20</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div data-id="13" class ="pro">
                <img src="./assets/images/book-13.png" alt="" >
                <div class="des">
                 <h5>Graphic Design school</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$40</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div data-id="14" class ="pro">
                <img src="./assets/images/book-14.png" alt="" >
                <div class="des">
                 <h5>food position</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>

                 </div>
                 <span class="price"><h4>$20</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>
            </div>

            <div  data-id="15" class ="pro" >
                <img src="./assets/images/book-15.png" alt="" >
                <div class="des" >
                 <h5>Design</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                 </div>
                 <span class="price"><h4>$9</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>
            <div  data-id="16" class ="pro" >
                <img src="./assets/images/book-16.png" alt="" >
                <div class="des" >
                 <h5>World news</h5>
                 <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>

                 </div>
                 <span class="price"><h4>$10</h4></span>
                </div>
                <span class="add-to-cart-btn">Add to cart</span>

            </div>

          </div>
        </section>
    <footer class="section-p1">
    <div class="col">
        <h4 id ="contactstore">Contact</h4>
        <p><strong>Phone : </strong>+96657358548</p>
        <p><strong>Hours :</strong> 10:00 - 18:00 , Mon - Sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>

            </div>
        </div>


    </div>
    <div class="col">
        <h4>
            About
        </h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Condition</a>

    </div>
    <div class="col">
        <h4>
           My Account
        </h4>
        <a href="signup.php">Sign In</a>
        <a href="login.php">Login</a>
        <a href="#">View Cart</a>
        <a href="#">Track My order</a>
        <a href="#">Help</a>


    </div>
    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="./assets/images/apps.webp" alt=" " width="90s"><br>


            <img src="./assets/images/google2.png" alt=" " width="90">
        </div>
        <br>
        <p>Secured Payment Gateway</p>
        <img src="./assets/images/payment-mehtod.png" alt="" width="250">

    </div>
    <div class="copyRight">
        <p>@ 2022, Alya ibrahim  </p>
    </div>

    </footer>




        <script src="script.js"></script>
    </body>
    </html>
