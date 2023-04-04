 <?php  
session_start();
error_reporting(0);
include "dbinfo.php";
$ct=$_GET['ct'];
 //$rest_id=$_GET['rest_id'];
//echo $locid;
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop Grid || Katare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">        
		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="css/owl.carousel.css">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="css/owl.theme.css">
        
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="css/owl.transitions.css">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="css/animate.css">
        
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/nivo-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        
        <!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="css/normalize.css">
        
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="css/main.css">
        
        <!-- UI CSS
		============================================ -->          
        <link rel="stylesheet" href="css/jquery-ui.css">
        
        <!-- BX Slider CSS
		============================================ -->          
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        
        <!-- Meanmenu CSS
		============================================ -->          
        <link rel="stylesheet" href="css/meanmenu.min.css">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="style.css">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="css/responsive.css">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="product-grid">
        <!--Header Area Start-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="logo">
                            <a href="#"><img src="img/logo/logo-4.png" alt="Katare"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs">
                        <div class="search-form">
                            <form id="search-form" action="#">
                                <input type="search" placeholder="What do you want to search  . ." name="s" />
                                <button type="submit"><i class="fa fa-search"></i>Search</button>
                            </form>                                
                        </div>
                    </div>  
                    <div class="col-lg-5 col-md-5 col-sm-12">     
                        <div class="header-right-menu">    
                            <ul class="header-r-cart">
                                <li><a class="cart" href="cart.php"><i class="fa fa-shopping-cart"></i>Cart : £313.84<span>2</span></a>
                                    <div class="mini-cart-content">
                                        <div class="mini-top-sec">
                                            <div class="cart-image">
                                                <a href="#"><img alt="" src="img/product/p-4.jpg"></a>
                                            </div>
                                            <div class="cart-info">
                                                <a href="#"><h4>SparkFun Badgers Intel</h4></a>
                                                <h5>£156.87</h5><span class="quantity"><i class="fa fa-times"></i>1</span>
                                            </div>
                                            <div class="product-cancel"><a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        <div class="mini-top-sec">
                                            <div class="cart-image">
                                                <a href="#"><img alt="" src="img/product/p-1.jpg"></a>
                                            </div>
                                            <div class="cart-info">
                                                <a href="#"><h4>SparkFun Badgers Intel</h4></a>
                                                <h5>£156.87</h5><span class="quantity"><i class="fa fa-times"></i>1</span>
                                            </div>
                                            <div class="product-cancel"><a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        <div class="mini-bottom-sec">
                                            <p class="total-amount">Subtotal: <span>£313.84</span></p>
                                            <div class="button"><a href="checkout.php">CHECKOUT</a></div>
                                            <div class="button"><a href="cart.php">View Cart</a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="header-r-account header-menu">
                                <li><a href="account.php"><i class="fa fa-user"></i>My Account<i class="fa fa-angle-down"></i></a>
                                    <ul class="header-dropdown">
                                        <li><a href="account.php">Login</a></li>
                                        <li><a href="account.php">Register</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="settings header-menu">
                                <li><a href="#"><i class="fa fa-cog"></i></a>
                                    <ul class="header-dropdown">
                                        <li><a href="#" class="title"><i class="fa fa-globe"></i>Language</a></li>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#" class="title"><i class="fa fa-money"></i>Currency</a></li>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">US Dollar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End of Header Area-->
        <!--Mainmenu Area Start-->
        <div class="mainmenu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="mainmenu">
                            <nav>
                                <ul id="nav">
                                    <li class="current drop-down"><a href="index.php">HOME</a>
                                        <ul class="sub-menu">
                                            <li><a href="index-2.php">Homepage Version 2</a></li>
                                            <li><a href="index-3.php">Homepage Version 3</a></li>
                                            <li><a href="index-4.php">Homepage Version 4</a></li>
                                            <li><a href="index-5.php">Homepage Version 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-grid.php">Technologies <span>Hot</span></a>
                                        <div class="megamenu">
                                            <div class="megamenu-list clearfix">
                                                <span>
                                                    <a href="#" class="mega-title">Mobiles &amp; Tablets</a>
                                                    <a href="#">Android Mobiles</a>
                                                    <a href="#">Android Tablets</a>
                                                    <a href="#">Apple Mobiles</a>
                                                    <a href="#">Apple Ipads</a>
                                                    <a href="#">Windows Phones</a>
                                                    <a href="#">Cases &amp; Covers</a>
                                                </span>
                                                <span>											
                                                    <a href="#" class="mega-title">Computers &amp; Accessories</a>
                                                    <a href="#">Budget Laptops</a>
                                                    <a href="#">Business Laptops</a>
                                                    <a href="#">Laptop Accessories</a>
                                                    <a href="#">Laser Printers</a>
                                                    <a href="#">Inkjet Printers</a>
                                                </span>
                                                <span>											
                                                    <a href="#" class="mega-title">Home Furnishing</a>
                                                    <a href="#">Bedsheets</a>
                                                    <a href="#">Blankets &amp; Quilts</a>
                                                    <a href="#">Carpets &amp; Rugs</a>
                                                    <a href="#">Cushion Covers</a>
                                                    <a href="#">Table Covers And Mats</a>
                                                </span>
                                                <span>											
                                                    <a href="#" class="mega-title">Computers &amp; Accessories</a>
                                                    <a href="#">Budget Laptops</a>
                                                    <a href="#">Business Laptops</a>
                                                    <a href="#">Laptop Accessories</a>
                                                    <a href="#">Laser Printers</a>
                                                    <a href="#">Inkjet Printers</a>
                                                    <a href="#">Scanners</a>
                                                </span>
                                            </div>
                                            <div class="megamenu-image clearfix">
                                                <div class="col-lg-4 col-md-4 col-sm-4 mega-banner border-hover">
                                                    <a href="#"><img src="img/mega-b-1.jpg" alt=""></a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 mega-banner border-hover">
                                                    <a href="#"><img src="img/mega-b-2.jpg" alt=""></a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 mega-banner border-hover">
                                                    <a href="#"><img src="img/mega-b-3.jpg" alt=""></a>
                                                </div>
                                            </div>
										</div>
                                    </li>
                                    <li><a href="shop-grid.php">Mobile</a></li>
                                    <li><a href="shop-list.php">News <span class="green">New</span></a></li>
                                    <li class="drop-down"><a href="index.php">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="account.php">My Account</a></li>
                                            <li><a href="cart.php">Cart Page</a></li>
                                            <li><a href="checkout.php">Checkout Page</a></li>
                                            <li><a href="product-details.php">Product Details</a></li>
                                            <li><a href="shop-grid.php">Shop Grid</a></li>
                                            <li><a href="shop-list.php">Shop List</a></li>
                                            <li><a href="wishlist.php">Wishlist</a></li>
                                            <li><a href="404.php">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>        
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.php">HOME</a>
                                            <ul>
                                                <li><a href="index-2.php">Home 2</a></li>
                                                <li><a href="index-3.php">Home 3</a></li>
                                                <li><a href="index-4.php">Home 4</a></li>
                                                <li><a href="index-5.php">Home 5</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">SHOP</a>
                                            <ul>
                                                <li><a href="shop-grid.php">Shop Grid</a></li>
                                                <li><a href="shop-list.php">Shop List</a></li>
                                                <li><a href="product-details.php">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.php">ABOUT</a>
                                        <li><a href="#">PAGES</a>
                                            <ul>
                                                <li><a href="account.php">My Account</a></li>
                                                <li><a href="cart.php">Cart</a></li>
                                                <li><a href="checkout.php">Checkout</a></li>
                                                <li><a href="wishlist.php">Wishlist</a></li>
                                                <li><a href="404.php">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end -->	
        </div>
        <!--End of Mainmenu Area-->
        <!--Breadcrumbs Start-->
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-offset-3">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                            <li class="active">Electronic</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumbs-->
        <!--Category Service Area Start-->
        <section class="cat-service-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="cat-menu">
                            <ul id="category">
                                <li class="cat-title"><a href="#">Categories</a></li>
								<?php
$sql=mysql_query("SELECT * 
FROM categories  limit 9 ");
while($row=mysql_fetch_array($sql))
{
$cat_id=$row['cat_id'];
$cat_name=$row['cat_name'];
$cat_parent=$row['cat_parent'];
$cat_child=$row['cat_child'];
?> 
<li><a href="shop-grid.php?ct=<?php echo $cat_id;?>"><?php echo $cat_name;?><i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu clearfix">
                                        <li class="sub-sec col-md-6">
                                            <ul>  
                                                <li><a class="title" href="#">Mobiles</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li>
                                                <li><a href="#">Discount Tablets</a></li> 
                                            </ul>      
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>
                                                <li><a class="title" href="#">Tablets</a></li>
                                                <li><a href="#">Android</a></li>
                                                <li><a href="#">Apple</a></li>
                                                <li><a href="#">Windows</a></li>
                                                <li><a href="#">Discount</a></li>  
                                            </ul>
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Dextop</a></li>
                                                <li><a href="#">Android Mobiles</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li> 
                                            </ul>    
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Electronic</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li>
                                                <li><a href="#">Discount Tablets</a></li>  
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
<?php } ?>
                           <!--    <li><a href="#">Phone &amp; Tablet <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu clearfix">
                                        <li class="sub-sec col-md-6">
                                            <ul>  
                                                <li><a class="title" href="#">Mobiles</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li>
                                                <li><a href="#">Discount Tablets</a></li> 
                                            </ul>      
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>
                                                <li><a class="title" href="#">Tablets</a></li>
                                                <li><a href="#">Android</a></li>
                                                <li><a href="#">Apple</a></li>
                                                <li><a href="#">Windows</a></li>
                                                <li><a href="#">Discount</a></li>  
                                            </ul>
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Dextop</a></li>
                                                <li><a href="#">Android Mobiles</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li> 
                                            </ul>    
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Electronic</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li>
                                                <li><a href="#">Discount Tablets</a></li>  
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog.php">Apple &amp; Laptop <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu clearfix">
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Computer</a></li>
                                                <li><a href="#">Tablet</a></li>
                                                <li><a href="#">Discount</a></li>
                                                <li><a href="#">Windows</a></li>
                                                <li><a href="#">Tablets</a></li>  
                                            </ul>    
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>
                                                <li><a class="title" href="#">Electronic</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li>
                                                <li><a href="#">Discount Tablets</a></li>  
                                            </ul>    
                                        </li>                                        
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Mobiles</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li>
                                                <li><a href="#">Discount Tablets</a></li>  
                                            </ul>    
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>
                                                <li><a class="title" href="#">Dextop</a></li>
                                                <li><a href="#">Android Mobiles</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li> 
                                            </ul>    
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.php">Accessory <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu clearfix">
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">All in one</a></li>
                                                <li><a href="#">Mobiles</a></li>
                                                <li><a href="#">Discount</a></li>
                                                <li><a href="#">Windows</a></li>
                                                <li><a href="#">Tablets</a></li>  
                                            </ul>    
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Camera</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple </a></li>
                                                <li><a href="#">Windows Phones</a></li>
                                                <li><a href="#">Discount Tablets</a></li>  
                                            </ul>    
                                        </li>                                        
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Tablets</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li>
                                                <li><a href="#">Discount Tablets</a></li>  
                                            </ul>    
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Electronic</a></li>
                                                <li><a href="#"> Mobiles</a></li>
                                                <li><a href="#">Android </a></li>
                                                <li><a href="#"> Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li> 
                                            </ul>    
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Inverters pay <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu clearfix">
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Windows</a></li>
                                                <li><a href="#">Discharge</a></li>
                                                <li><a href="#">Discount</a></li>
                                                <li><a href="#">Apple</a></li>
                                                <li><a href="#">Tablets</a></li>  
                                            </ul>    
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Electronic</a></li>
                                                <li><a href="#">Android</a></li>
                                                <li><a href="#">Apple </a></li>
                                                <li><a href="#">Windows</a></li>
                                                <li><a href="#">Discount</a></li> 
                                            </ul>     
                                        </li>                                        
                                        <li class="sub-sec col-md-6">
                                            <ul>
                                                <li><a class="title" href="#">Phones</a></li>
                                                <li><a href="#">Android Tablets</a></li>
                                                <li><a href="#">Apple Mobiles</a></li>
                                                <li><a href="#">Windows Phones</a></li>
                                                <li><a href="#">Discount Tablets</a></li>
                                            </ul>  
                                        </li>
                                        <li class="sub-sec col-md-6">
                                            <ul>   
                                                <li><a class="title" href="#">Android</a></li>
                                                <li><a href="#"> Mobiles Discount</a></li>
                                                <li><a href="#">Android </a></li>
                                                <li><a href="#"> Mobiles</a></li>
                                                <li><a href="#"> Phones Windows</a></li> 
                                            </ul>    
                                        </li>
                                    </ul>
                                </li> -->
                                <li><a href="#">discharge</a></li>
                                <li><a href="#">Installment </a></li>
                                <li><a href="#">ACCESSORY</a></li>
                                <li><a href="#">all categories</a></li>
                            </ul>
                        </div>
                        <div class="p-widget-title top-title">
                            <div class="left-sidebar-title"><h3>Shop by</h3></div>
                        </div>
                        <aside class="widget-price">
                            <h3 class="sidebar-sub-title">Price Slider</h3>
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                            </div>	
                            <a href="#">Show</a>
                        </aside>
                        <aside class="widget-list">
                            <h3 class="sidebar-sub-title">Manufacturers</h3>
                            <ul id="product-list">
                                <li><a href="#">Ellectronic</a></li>
                                <li><a href="#">Fashion &amp; Beauty</a></li>
                                <li><a href="#">SmartPhone &amp; Tablets</a></li>
                                <li><a href="#">Sports &amp; Outdoors</a></li>
                                <li><a href="#">Automotive &amp; Motorcyle</a></li>
                                <li><a href="#">Jewery &amp; Watches</a></li>
                            </ul>
                        </aside>
                        <div class="p-widget-title compare">
                            <div class="left-sidebar-title"><h3>Compare Products</h3></div>
                        </div>
                        <aside><p>You have no item(s) to compare</p></aside>
                        <aside class="widget widget-tags">
                            <h3 class="sidebar-title"><span>Popular Tags</span></h3>
                            <ul>
                                <li><a href="#" class="medium">Apple (Macbook)</a></li>
                                <li><a href="#">Dell</a></li>
                                <li><a href="#" class="x-large">Acer</a></li>
                                <li><a href="#" class="large">HP</a></li>
                                <li><a href="#" class="m-large">Levono</a></li>
                                <li><a href="#" class="large">laptop</a></li>
                                <li><a href="#" class="ex-large">Sony</a></li>
                                <li><a href="#" class="sml">Nokia Lumia 630</a></li>
                            </ul>
                            <a class="n-a-btn" href="#">View All Tags</a>
                        </aside>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="cat-service-banner">
                            <a href="#">
                                <img src="img/banner/banner-29.jpg" alt="">
                            </a>
                        </div>
                        <div class="shop-item-filter">
                            <div class="shop-tab clearfix">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs navbar-left" role="tablist">
                                    <li role="presentation" class="active"><a href="#grid" class="grid-view" aria-controls="grid" role="tab" data-toggle="tab"></a></li>
                                    <li role="presentation"><a href="#list" class="list-view" aria-controls="list" role="tab" data-toggle="tab"></a></li>
                                </ul>
                                <div class="filters">
                                    <div class="filter-by">
                                        <h4>Short by </h4>
                                        <form action="#">
                                            <div class="select-filter">
                                                <select>
												<option value="">Brand</option>
                                                  <?php
$sql=mysql_query("SELECT *
FROM brands ");
while($row=mysql_fetch_array($sql))
{
$brand_id=$row['brand_id'];
$brand_name=$row['brand_name'];
?>
												<option value="<?php echo $brand_id;?>"><?php echo $brand_name;?></option>
<?php } ?>
                                                </select> 
                                            </div>
                                        </form>								
                                    </div>
                                    <div class="filter-by">
                                        <h4>Show </h4>
                                        <form action="#">
                                            <div class="select-filter">
                                                <select>
                                                  <option value="10">12</option>
                                                  <option value="20">16</option>
                                                  <option value="30">20</option>
                                                </select> 
                                            </div>
                                        </form>								
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div> 
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="grid">
                                <div class="row">
								<?php
$sql=mysql_query("SELECT *
FROM products
WHERE cat_id =$ct
OR cat_parent =$ct
OR cat_child =$ct ");
while($row=mysql_fetch_array($sql))
{
$product_id=$row['product_id'];
$product_name=$row['product_name'];
$product_price=$row['product_price'];
?>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-<?php echo $product_id;?>.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-8.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4 style="font-size:12px;"><a href="product-details.php"><?php echo strtok($product_name, "/");?></a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>RS.<?php echo $product_price;?></h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>    
<?php } ?>
                                  <!--  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">    
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-2.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-7.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-3.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-6.jpg" alt="">
                                                <p>New</p>
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-4.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-5.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-5.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-4.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">    
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-6.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-3.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-7.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-2.jpg" alt="">
                                                <p class="discount">Hot</p>
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">    
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-8.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-1.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-1.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-8.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">  
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-2.jpg" alt="">
                                                <img class="secondary-img" src="img/product/tab-p-7.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product">
                                            <a href="#">
                                                <img src="img/product/tab-p-3.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">      
                                        <div class="single-product">
                                            <a href="#">
                                                <img src="img/product/tab-p-4.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="list">
                                <div class="row product-list">
                                    <div class="col-md-12">
									<?php
$sql=mysql_query("SELECT *
FROM products
WHERE cat_id =$ct
OR cat_parent =$ct
OR cat_child =$ct ");
while($row=mysql_fetch_array($sql))
{
$product_id=$row['product_id'];
$product_name=$row['product_name'];
$product_price=$row['product_price'];
?>
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-<?php echo $product_id;?>.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php"><?php echo strtok($product_name, "/");?></a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>RS.<?php echo $product_price;?></h5>
                                                <p>Dell Latitude E6410 laptop running on cards, negligent die chip, designed from magnesium alloy, the material of the machine bayMay E6410 Notebook, Laptop for business, durability over time</p>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div> 
<?php } ?>
                                        
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-3.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <p>Dell Latitude E6410 laptop running on cards, negligent die chip, designed from magnesium alloy, the material of the machine bayMay E6410 Notebook, Laptop for business, durability over time</p>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/tab-p-4.jpg" alt="">
                                                <i class="fa fa-expand"></i>
                                            </a>    
                                            <div class="product-info">
                                                <h4><a href="product-details.php">SparkFun Badgers Intel</a></h4>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h5>$156.87</h5>
                                                <p>Dell Latitude E6410 laptop running on cards, negligent die chip, designed from magnesium alloy, the material of the machine bayMay E6410 Notebook, Laptop for business, durability over time</p>
                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <a class="wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                <a class="signal" href="#"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination clearfix">
                                    <p>Items 1 to <span>12</span> of <span>48</span> total</p>
                                    <ul>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End of Category Service Area-->
        <!--Brand Area Start-->
        <div class="brand-area">
            <div class="container">
                <div class="row">
                    <div class="brand-wrapper">
                        <div class="col-md-3">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/brand-1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/brand-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/brand-3.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/brand-4.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/brand-1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/brand-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/brand-3.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/brand-4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Brand Area-->
        <!--Footer Widget Area Start-->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row boder-b-footer">
                    <div class="footer-border"></div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <div class="footer-widget">
                            <h4>Our Support</h4>
                            <ul class="single-widget-list">
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">Advanced Search</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <div class="footer-widget">
                            <h4>My Account</h4>
                            <ul class="single-widget-list">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Special</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h4>BRANDS ARE FAVORITES</h4>
                            <ul class="single-widget-list favorite">
                                <li><span>Tablets:</span> Apple, Samsung, Sony, Asus, HP, Lenovo, <a href="#" class="more">Read more</a> ...</li>
                                <li><span>Phone:</span> Apple, Samsung, Sony,  FPT, Asus, BlackBerry, <a href="#" class="more">More</a> ...</li>
                                <li><span>Apple:</span> iPhone, iPad, <a href="#" class="more">More</a> ...</li>
                                <li><span>Notebook:</span> Apple (Macbook), Acer, Dell, HP, Lenovo,, Sony, <a  href="#" class="more">More</a> ...</li>
                                <li><span>Accessories:</span> Headset, leather bags and bumper, <a href="#" class="more">More</a> ...</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-sm col-xs-12">
                        <div class="footer-widget">
                            <h2><a href="#">Katare</a></h2>
                            <p>Please keep contact with us. There are many products waiting for you to enjoy!</p>
                            <p class="information"> <i class="fa fa-circle-o blue"></i>Addresss: 19th Floor, 40 Bank Street, <br>
                            Canary Wharf, London, E14</p>                            
                            <p class="information"> <i class="fa fa-circle-o dark-yellow"></i>Email: admin@katareinfo.com</p>
                            <p class="information"> <i class="fa fa-circle-o lemon"></i>Phone: <span>(+1)866-550-3669</span></p>
                            <p class="information"> <i class="fa fa-circle-o yellow"></i>Web: katareinfo.com</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">
                        <ul class="social-icons">
                            <li><i class="fa fa-facebook"></i><a href="#">FACEBOOK</a></li>
                            <li><i class="fa fa-instagram"></i><a href="#">instagram</a></li>
                            <li><i class="fa fa-flickr"></i><a href="#">flickr</a></li>
                            <li><i class="fa fa-youtube-play"></i><a href="#">youtube</a></li>
                            <li><i class="fa fa-twitter"></i><a href="#">twitter</a></li>
                            <li><i class="fa fa-google-plus"></i><a href="#">google+</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 hidden-sm hidden-xs">
                        <div class="footer-widget-bottom">
                            <h2>Support Payments</h2>
                            <div class="support-payments">
                                <i class="fa fa-cc-mastercard"></i>
                                <i class="fa fa-cc-amex"></i>
                                <i class="fa fa-cc-discover"></i>
                                <i class="fa fa-cc-visa"></i>
                                <i class="fa fa-cc-mastercard"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Footer Widget Area-->
        <!--Footer Area Start-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p>Copyright ©  <a href="#">Katare Informatics</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!--End of Footer Area-->
        
        <!-- jquery-1.11.3.min js
		============================================ -->         
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        
        <!-- bootstrap js
		============================================ -->         
        <script src="js/bootstrap.min.js"></script>
        
        <!-- owl.carousel.min js
		============================================ -->       
        <script src="js/owl.carousel.min.js"></script>
        
        <!-- nivo slider js
		============================================ -->       
		<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/nivo-slider/home.js" type="text/javascript"></script>
        
        <!-- wow js
		============================================ -->       
        <script src="js/wow.js"></script> 
        <script>
			new WOW().init();
		</script>  
            
        <!-- Price Slider js
		============================================ -->       
        <script src="js/price-slider.js"></script>        
        
        <!-- BX Slider js
		============================================ -->       
        <script src="js/jquery.bxslider.min.js"></script>
        
        <!--Countdown js-->
        <script src="js/jquery.countdown.min.js"></script>
        
        <!-- Scroll Up js
		============================================ -->         
        <script src="js/jquery.scrollUp.min.js"></script>        
        
        <!-- Elevate Zoom js
		============================================ -->         
        <script src="js/jquery.elevatezoom.js"></script>    
        
        <!-- Meanmenu js
		============================================ -->         
        <script src="js/meanmenu.js"></script>    
        
        <!-- plugins js
		============================================ -->         
        <script src="js/plugins.js"></script>
        
        <!-- main js
		============================================ -->           
        <script src="js/main.js"></script>
    </body>
</html>