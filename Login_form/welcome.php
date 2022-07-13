<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php"); #try to put logout.php there
}

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive e-commerce website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo">fahion<span>.</span></a>

    <form action="">
        <input type="search" id="search-bar">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="menu-bar" class="fas fa-bars"></div>
        <div id="theme-toggler" class="fas fa-moon"></div>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="logout.php" class="fas fa-user"></a>
    
    </div>

</header>

<!-- header section ends -->

<!-- navbar section  -->

<nav class="navbar">

    <div class="user">
        <img src="images/user-img.png" alt="">
        <?php echo "<h3>Welcome " . $_SESSION['username'] . "</h3>"; ?>  
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#products">products</a>
        <a href="#featured">featured</a>
        <a href="#deal">deal</a>
        <a href="#review">review</a>
    </div>

    <div id="close" class="fas fa-times"></div>

</nav>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span>special offer</span>
        <h3>sale upto 50% off</h3>
        <a href="#products" class="btn">shop now</a>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- category section starts  -->

<section class="category">

    <h1 class="heading"> shop by <span>category</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/cat-1.jpg" alt="">
            <div class="content">
                <span>upto 50% off</span>
                <h3>for womans</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/cat-2.jpg" alt="">
            <div class="content">
                <span>upto 50% off</span>
                <h3>for mans</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
        
    </div>

</section>

<!-- category section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>

<div class="swiper-container product-slider gap">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-1.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>man's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-2.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>woman's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-3.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>man's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-4.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>woman's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-5.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>man's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<div class="swiper-container product-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-6.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>woman's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-7.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>man's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-8.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>woman's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-9.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>man's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/p-10.png" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 250 reviews )</span>
                    </div>
                    <h3>woman's clothing</h3>
                    <div class="price">$15.99 <span>$18.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

</section>

<!-- products section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> products </h1>

    <div class="box-container">

        <div class="box">
            <div class="image-container">
                <div class="small-image">
                    <img src="images/f-1-1.png" class="small-image-1" alt="">
                    <img src="images/f-1-2.png" class="small-image-1" alt="">
                    <img src="images/f-1-3.png" class="small-image-1" alt="">
                </div>
                <div class="big-image">
                    <img src="images/f-1-1.png" class="big-image-1" alt="">
                </div>
            </div>
            <div class="content">
                <h3>man's clothing</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>( 250 reviews )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quasi nesciunt, error fuga facilis autem rerum cumque animi rem natus.</p>
                <div class="price">$15.99 <span>$18.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <div class="small-image">
                    <img src="images/f-2-1.png" class="small-image-2" alt="">
                    <img src="images/f-2-2.png" class="small-image-2" alt="">
                    <img src="images/f-2-3.png" class="small-image-2" alt="">
                </div>
                <div class="big-image">
                    <img src="images/f-2-1.png" class="big-image-2" alt="">
                </div>
            </div>
            <div class="content">
                <h3>woman's clothing</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>( 250 reviews )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quasi nesciunt, error fuga facilis autem rerum cumque animi rem natus.</p>
                <div class="price">$15.99 <span>$18.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <div class="small-image">
                    <img src="images/f-3-1.png" class="small-image-3" alt="">
                    <img src="images/f-3-2.png" class="small-image-3" alt="">
                    <img src="images/f-3-3.png" class="small-image-3" alt="">
                </div>
                <div class="big-image">
                    <img src="images/f-3-1.png" class="big-image-3" alt="">
                </div>
            </div>
            <div class="content">
                <h3>man's clothing</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>( 250 reviews )</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quasi nesciunt, error fuga facilis autem rerum cumque animi rem natus.</p>
                <div class="price">$15.99 <span>$18.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

    </div>

</section>

<!-- featured section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

    <h1 class="heading"> special <span>deal</span> </h1>

    <div class="row">

        <div class="content">
            <span class="discount">upto 50% off</span>
            <h3 class="text">deal of the day</h3>
            <div class="count-down">
                <div class="box">
                    <h3 id="days">00</h3>
                    <span>days</span>
                </div>
                <div class="box">
                    <h3 id="hours">00</h3>
                    <span>hours</span>
                </div>
                <div class="box">
                    <h3 id="minutes">00</h3>
                    <span>minutes</span>
                </div>
                <div class="box">
                    <h3 id="seconds">00</h3>
                    <span>seconds</span>
                </div>
            </div>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="image">
            <img src="images/counter-img.png" alt="">
        </div>

    </div>

</section>

<!-- deal section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customers <span>review</span> </h1>

<div class="swiper-container review-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nihil aut praesentium qui non, magnam perspiciatis commodi fugit cumque quos, deserunt quidem esse fuga facilis exercitationem, dolorum itaque corrupti tempore.</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nihil aut praesentium qui non, magnam perspiciatis commodi fugit cumque quos, deserunt quidem esse fuga facilis exercitationem, dolorum itaque corrupti tempore.</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nihil aut praesentium qui non, magnam perspiciatis commodi fugit cumque quos, deserunt quidem esse fuga facilis exercitationem, dolorum itaque corrupti tempore.</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nihil aut praesentium qui non, magnam perspiciatis commodi fugit cumque quos, deserunt quidem esse fuga facilis exercitationem, dolorum itaque corrupti tempore.</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<!-- review section ends -->

<!-- footer section starts  -->

<section class="footer">

<div class="footer-container">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">products</a>
            <a href="#">featured</a>
            <a href="#">deal</a>
            <a href="#">review</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my favorite</a>
            <a href="#">my order</a>
            <a href="#">my cart</a>
        </div>

        <div class="box">
            <h3>donwload links</h3>
            <a href="#">windows store</a>
            <a href="#">app store</a>
            <a href="#">google store</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">example@gmail.com</a>
            <a href="#">mumbai, india - 400104</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> mr. web designer </span> | all rights reserved </div>

</div>

</section>

<!-- footer section ends -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>
<body>
     <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?> 
    <a href="logout.php">Logout</a>
</body>
</html>