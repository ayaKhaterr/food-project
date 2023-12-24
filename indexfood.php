<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: indexl.php");
}

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-compatible" content="IE=edge">
   <meta name= "viewport" content="width=device-width, initial-scale=1.0">
   <title>ISTANBUL RESTAURANT</title>
   <!--style2 link-->
   <link rel ="stylesheet" href="./style.css">
   <!--fonrawsome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />"

   </head>
   <body>
   <span class="up">UP</span>
    <script scr="main.js"></script>
    <!--Header start-->
    <header>
        <div id="navbar">
            <img src="picture proj/1111/701965.png"  alt="ISTANBUL RESTAURANT">
            <nav>
                <ul>
                    
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">contact</a></li>
                    <a href="logout.php" class="btn btn-warning">Logout</a>
                </ul>
            </nav>
            
        </div>
        
        <div class="content">
            <h1>WELCOME TO <span class="primary-text">ISTANBUL RESTAURANT</span> </h1>
            <h3>here you can find turkish delicacies food</h3>
            <a href="#" class="btn btn-primary">Book a Table</a>
        </div>

    
    <!--header end-->
    </header>


    <main>

        <!--about start-->
        <section id="about">
            <div class="container">
                <div class="title">
                    <h2>THE ISTANBUL HISTORY</h2>
                    <p> more than twenty years of experiance </p>
                </div>
                <div class="about-content">
                    <div>   
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolore incidunt similique aut? Qui omnis cupiditate rem eum, magnam, asperiores maxime quam mollitia velit quia aspernatur dicta facere similique suscipit!</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolore incidunt similique aut? Qui omnis cupiditate rem eum, magnam, asperiores maxime quam mollitia velit quia aspernatur dicta facere similique suscipit!</p>
                        <a href="#" class="btn btn-secondary">LEARN MORE</a>
                    </div>
                    <img src="picture proj/1111/240_F_324727233_GwGkDp3eOeEIETimy5wbSp2983GLrkwy.jpg"  alt="">
                </div>
           </div>
        </section>
        <!--about end-->
        <!--WEEKLY FEATURED FOOD start-->
        <section id="featured">
            <div class="container">
                    <div class="title">
                        <h2>WEEKLY FEATYRED FOOD</h2>
                    </div> 
                <div class="featured-items">
                    <div>
                          <h2>Breakfast</h2>
                          <img src="picture proj/turkishfood16-735x459.jpg.webp" height="200" width="200"  alt="Menemen (Scrambled Eggs with Tomatoes and Peppers)">
                        <div>
                            <h3>Menemen</h3>
                            <p> is a popular traditional Turkish dish that includes eggs, tomato, green peppers, and spices such as ground black and red pepper cooked in olive oil and served with bread </p>
                            <p><del>$55.00</del><span class="primary-text">$18.00</span></p>
                        </div>
                    </div>
                    <div>
                        <h2>Lunch</h2>
                        <img src="picture proj/turkishfood2-735x459.jpg.webp" height="200" width="200" alt="Kofte (Meatballs)">
                        <div>
                           <h3>kofte</h3>
                           <p> this meal meatballs from ground lamb or beef, or a mixture of the two, flavoured with onion, parsley and cuminyou can often find them in casseroles, coated in egg and fried, over salads, or in sandwiches served with rice</p>
                           <p><del>$150.00</del><span class="primary-text">$100.00</span></p>
                        </div>
                    </div>
                    <div>
                        <h2>Dessert</h2>
                        <img src="picture proj/1111/e4e0f18addf75647ad2ff521a466d734.jpg" height="200" width="200" alt="baklava">
                        <div>
                           <h3>Baklava</h3>
                           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero odio reiciendis quae consectetur animi porro eum. Dolore quisquam voluptatum nihil.</p>
                           <p><del>$100.00</del><span class="primary-text">$55.00</span></p>
                        </div>
                    </div>
                </div> 
            </div>

        </section>
        <!--menu start-->
        <section id="menu">
            <div class="container">
                <div class="title">
                    <h2>OUR MENU</h2>
                </div>
                <div class="menu-items">
                    <div claa="menu-items-left">
                        <h2>Breakfast</h2>
                        <div class="menu-item">
                            <img src="picture proj/1111/8ccf3cc223adfad57e75e15dc4c5cfa1.jpg" alt="cilbir">
                            <div>
                                <h3>Cilbir<span class="primary-text">$20.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="picture proj/1111/17fac3abc0f44c68f4a18e421ea747ed.jpg"  alt="gozleme">
                            <div>
                                <h3>Gozleme<span class="primary-text">$40.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="picture proj/1111/2655f1b95e3f646e9402f5ebd67f41bd.jpg" alt="kaymak">
                            <div>
                                <h3>Kaymak<span class="primary-text">$50.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="picture proj/1111/97e9be58cb6901a5594b41d06cc3c833.jpg"  alt="Menemen">
                            <div>
                                <h3>Menemen<span class="primary-text">$18.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                    </div>
                    <div class="menu-items-middle">
                        <h2>Lunch</h2>
                        <div class="menu-item">
                            <img src="picture proj/1111/7_taco_soup-5ba402f34cedfd0050bb947f.webp" alt="taco soup">
                            <div>
                                <h3>Taco Soup<span class="primary-text">$60.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="picture proj/1111/8_stuffed_breast-5ba402fb46e0fb0057ad085f.webp"  alt="grilled stuffed breast with bacon">
                            <div>
                                <h3>Grilled Stuffed Breast <span class="primary-text">$75.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="picture proj/1111/turkey-reuben-sandwich-2937621-hero-01-d98a70a112204ec09ef00183b5cbfe29.webp"  alt=" reuben sandwich">
                            <div>
                                <h3>Lighter Reuben Sandwich<span class="primary-text">$65.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="picture proj/1111/oven-fried-turkey-cutlets-with-parmesan-cheese-3061836-hero-01-7d161a3e86bc4cd19fd0c9567925402b.webp"  alt="panko breaded cutlets">
                            <div>
                                <h3>Panko Breaded Cutlets<span class="primary-text">$80.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                    </div>
                    <div class="menu-items-right">
                        <h2>Dessert</h2>
                        <div class="menu-item">
                            <img src="picture proj/1111/29e71f75385c742ed6f79a8347d9cca5.jpg" alt="yogurt cake">
                            <div>
                                <h3>Yogurt Cake<span class="primary-text">$30.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="picture proj/1111/3128421d25b383f254d2150a936a88bb.jpg" alt="coffee brownies">
                            <div>
                                <h3>Coffee Brownies<span class="primary-text">$25.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="picture proj/1111/e4e0f18addf75647ad2ff521a466d734.jpg" alt="baklava">
                            <div>
                                <h3>Baklava<span class="primary-text">$55.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img src="picture proj/1111/download.jpg" alt="delight ice cream">
                            <div>
                                <h3>Delight Ice Cream<span class="primary-text">$33.00</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, minima?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn">EXPLORE FULL MENU</button>
            </div>
        </section>
        <!--menu end-->
        <!--daytime start-->
        <section id="daytime">
            <div class="container">
                  <div class="daytime-items">
                      <div class="daytime-item">
                          <img src="picture proj/1111/4424257.png" alt="BREAKFAST">
                          <h3>BREAKFAST</h3>
                          <p>8:00 AM TO 10:00 AM</p>
                       </div>
                     <div class="daytime-item">
                         <img src="picture proj/1111/3778570.png" alt="LUNCH">
                         <h3>Lunch</h3>
                         <p>4:00 PM TO 7:00 PM</p>
                      </div>
                       <div class="daytime-item">
                          <img src="picture proj/1111/4252424.png" alt="DINNER">
                          <h3>DINNER</h3>
                          <p>9:00 PM TO 1:00 AM</p>
                       </div>
                       <div class="daytime-item">
                         <img src="picture proj/1111/2484525.png" alt="DESSERT">
                         <h3>DESSERT</h3>
                         <p>ALL DAY</p>
                        </div>
                   </div>
            </div>

        </section>
        <!--daytime end-->
        <!--gallary start-->
        <section id="gallery">
            <div class="contianer">
                <h2>OUR Turkish FOOD GALLERY</h2>
                <div class="img-gallery">
                    <img src="picture proj/1111/pexels-photo-2673353.jpg">
                    <img src="picture proj/1111/pexels-photo-5702781.jpg">
                    <img src="picture proj/1111/pexels-photo-5848019.jpg">
                    <img src="picture proj/1111/pexels-photo-5847973.jpg">
                    <img src="picture proj/1111/pexels-photo-6053925.jpg">
                    <img src="picture proj/1111/pexels-photo-10953422.jpg">
                    <img src="picture proj/1111/free-photo-of-turkish-market-on-a-rainy-day.jpg">
                    <img src="picture proj/1111/pexels-photo-8916497.jpg">
                    <img src="picture proj/1111/pexels-photo-7813739.jpg">
                    <img src="picture proj/1111/free-photo-of-black-and-white-picture-of-a-street-and-buildings-in-city.jpg">
                </div>
            </div>
        </section>
        <!--gallary end-->
        <section id="book">
            <div class="container">
                <div class="container-time">
                     <h2>TIME OPEN</h2>
                     <h3>Monday-Friday</h3>
                     <p>7:00 am to 11:00 am (Breakfast)</p>
                     <p>11:00 am to 10:00 pm (Lunch/Dinner)</p>

                     <h2>TIME OPEN</h2>
                     <h3>Saturday-sunday</h3>
                     <p>9:00 am to 1:00 am (Breakfast)</p>
                     <p>1:00 am to 10:00 pm (Lunch/Dinner)</p>

                     <hr>
                     <h4>Call US:0123456789</h4>
                </div>
                <div class="container-form1">
                    <form action="index.php" method="post">
                        <h2 class="heading heading-black">Book a Table</h2>

                        <div class="form-field">
                            <p>Your Name</p>
                            <input type="text" name="Yourname" placeholder="Yourname">

                        </div>
                        <div class="form-field">
                            <p>Your Email</p>
                            <input type="text" name="Youremail" placeholder="Youremail">

                        </div>
                        <div class="form-field">
                            <p>Date</p>
                            <input type="Date" name="Date" >

                        </div>
                        <div class="form-field">
                            <p>Time</p>
                            <input type="Time" name="Time">

                        </div>
                        <div class="form-field">
                            <p>HowManyPeaple</p>
                            <select name="select" id="#">
                                <option value="1">1 person</option>
                                <option value="2">2 person</option>
                                <option value="3">3 person</option>
                                <option value="4">4 person</option>
                                <option value="5">5 person</option>
                                <option value="+5">+5 person</option>
                            </select>    

                        </div>
                        <button class="btn">submit</button>
                    </form>
                </div>

            </div>
        </section>
        <!--contact us start-->

        <section id="contact">
            
            <div class="container">
                <div class="contact-content">
                    <div class="contact-info">
                        <div>
                            <h3>ADDRESS</h3>
                            <p><i class="fa-solid fa-location-dot"></i>6 October,Egypt</p>
                            <p><i class="fa-solid fa-phone"></i>123456789</p>
                            <p><i class="fa-regular fa-envelope"></i>support@istanbul_restaurant.com</p>
                        </div>
                        <div>
                            <h3>WORKING HOURS</h3>
                            <p>8:00 am to 11:00 pm on weekdays</p>
                            <p>11:00 am to 1:00 am on weekengs</p>
                        </div>
                        <div>
                            <h3>FOLLOW US</h3>
                            <a href="#"><i><i class="fa-brands fa-facebook"></i></i></a>
                            <a href="#"><i><i class="fa-brands fa-twitter"></i></i></a>
                            <a href="#"><i><i class="fa-brands fa-instagram"></i></i></a>

                        </div>
                    </div>
                    <form>
                        <input type="text" name="NAME" id="NAME" placeholder="Full Name" required>
                        <input type="email" name="email" id="email" placeholder="Email Address" required>
                        <input type="text" name="subject" id="subject" placeholder="subject" required>
                        <textarea name="Message" id="Message" cols="30" rows="5" placeholder="Message"></textarea>
                        <button type="submit" class="btn">SEND MESSAGE</button>
                    </form>
                </div>

            </div> 
        </section>


        <!--contact us end-->
    </main>
    <footer id="footer">
      
         <a href="#"><i><i class="fa-brands fa-facebook"></i></i></a>
         <a href="#"><i><i class="fa-brands fa-twitter"></i></i></a>
         <a href="#"><i><i class="fa-brands fa-instagram"></i></i></a>
         <p>Cpyright &copy; 2023 All rights reserved | Made by <b>aya alaa</b></p>
    </footer>

   </body>
   
</html>

