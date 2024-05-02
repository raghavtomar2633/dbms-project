<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="Style.css"/>
    
    <title>HOTEL BOOKING | HOTELS</title>
  </head>
  <body>
    <nav>
      <div class="nav__logo">KINGS INN</div>
      <ul class="nav__links">
        <li class="link"><a href="http://localhost/COR/">Home</a></li>
        <li class="link"><a href="#">Catalogue</a></li>
        <li class="link"><a href="http://localhost/COR/contact.php">Contact Us</a></li>
        <li class="link"><a href="http://localhost/cor/about.php">About</a></li>
        <li class="link"><a href="http://localhost/COR/login.php">Login</a></li>
     </ul>
    </nav>
    <?php
    require_once('connect.php');
    if(isset($_GET['submit'])){
      $location = $_GET['location'];
      $check_out_date = $_GET['check-out-date'];
      $check_in_date =  $_GET['check-in-date'];
      $guest_count = $_GET['guest-count'];
      $class = $_GET['class'];


      $sql = 'INSERT INTO trip (location,check_in,check_out,no_of_guest,class) VALUES (?,?,?,?,?)';
      $stmt = $conn->prepare($sql);

      $stmt->bind_param('sssss',$location,$check_in_date,$check_out_date,$guest_count,$class);
      $stmt->execute();
    }
    ?>
    <header class="section__container header__container">
      <div class="header__image__container">
        <div class="header__content">
          <h1>Enjoy Your Dream Vacation</h1>
          <p>Book Hotels, and stay packages at lowest price.</p>
        </div>
        <div class="booking__container">
          <form action='index.php'>   
            <div class="form__group">
              <div class="input__group">
                <input type="text" name='location' />
                <label>Location</label>
              </div>
              <p>Where are you going?</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="datetime-local" name='check-in-date'/>
                <label>Check In</label>
              </div>
              <p>Add date and time</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="datetime-local" name='check-out-date'/>
                <label>Check Out</label>
              </div>
              <p>Add date and time</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="text" name='guest-count' />
                <label>Guests</label>
              </div>
              <p>Add no. of guests</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="text" name='class'/>
                <label>Room type</label>
              </div>
              <p>Add Room type</p>
            </div>
            <button class="btn" type="submit" name='submit'>SUBMIT</button>
          </form>
        </div>
      </div>
    </header>

    <section class="section__container popular__container">
      <h2 class="section__header">Popular Hotels</h2>
      <div class="popular__grid">
        <div class="popular__card">
         <a href="https://www.hoteltheroyalplaza.com/"> <img src="https://media.istockphoto.com/id/104731717/photo/luxury-resort.jpg?s=612x612&w=0&k=20&c=cODMSPbYyrn1FHake1xYz9M8r15iOfGz9Aosy9Db7mI=" alt="popular hotel"/></a>
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>The Royal plaza</h4>
              <h4>&#8377;9000 Per Day/Night </h4>
            </div>
            <p>CONNAUGHT PLACE,DELHI</p>
            <button class="btn"><i class="ri-search-line"></i></button>
          </div>
        </div>
        <div class="popular__card">
         <a href="https://www.ritzparis.com/"> <img src="https://media.istockphoto.com/id/119926339/photo/resort-swimming-pool.jpg?s=612x612&w=0&k=20&c=9QtwJC2boq3GFHaeDsKytF4-CavYKQuy1jBD2IRfYKc=" alt="popular hotel" /></a>
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Ritz Paris</h4>
              <h4>&#8377;10000 Per Day/Night</h4>
            </div>
            <p>INDIA GATE,DELHI</p>
          </div>
        </div>
        <div class="popular__card">
          <a href="https://www.radissonhotels.com/en-us/hotels/radisson-blu-new-delhi-airport"><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/328920641.jpg?k=f5ac737d457669aa6a3d21fb551de8ceeb1b929aca8ea51daef053df8b640be8&o=&hp=1" /></a>
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>The Radisson blue</h4>
              <h4>&#8377;15000 Per Day/Night</h4>
            </div>
            <p>MAHIPALPUR,DELHI</p>
          </div>
        </div>
        <div class="popular__card">
         <a href="https://www.itchotels.com/in/en/itcmaurya-new-delhi"><img src="https://gos3.ibcdn.com/28ea220af52311e794f3025f77df004f.jpg" alt="popular hotel"/></a>
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>HOTEL ITC MAURYA</h4>
              <h4>&#8377;25000 Per Day/Night</h4>
            </div>
            <p>NARAINA, DELHI</p>
          </div>
        </div>
        <div class="popular__card">
         <a href="https://www.ritzcarlton.com/"> <img src="https://cdn.britannica.com/96/115096-050-5AFDAF5D/Bellagio-Hotel-Casino-Las-Vegas.jpg" alt="popular hotel" /></a>
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>The Ritz-Carlton</h4>
              <h4>&#8377;30000 Per Day/Night</h4>
            </div>
            <p>PUNJABI BAGH,DELHI</p>
          </div>
        </div>
        <div class="popular__card">
          <a href="https://www.marinabaysands.com/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9GhULm-3x91IkRVcb1bG9hFmWcIFqR9oCfGwwnfGX1g&s" alt="popular hotel" /></a>
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Marina Bay Sands</h4>
              <h4>&#8377;12000 Per Day/Night</h4>
            </div>
            <p>RAJOURI GARDEN,DELHI</p>
          </div>
        </div>
      </div>
    </section>

    <section class="client">
      <div class="section__container client__container">
        <h2 class="section__header">What our client say</h2>
        <div class="client__grid">
          <div class="client__card">
            <img src="https://media-del1-1.cdn.whatsapp.net/v/t61.24694-24/424425257_1513200979259682_4254519079427530401_n.jpg?ccb=11-4&oh=01_ASAppuafB66i4trSj0KURXYcEIRTB4-yX-q29sHv70MZXw&oe=662A26F8&_nc_sid=e6ed6c&_nc_cat=103" alt="client" />
            <p>
              The booking process was seamless, and the confirmation was
              instant. I highly recommend KINGS INN for hassle-free hotel bookings.
            </p>
          </div>
          <div class="client__card">
            <img src="https://media-del1-1.cdn.whatsapp.net/v/t61.24694-24/421387459_421920970259437_8335685135366833563_n.jpg?ccb=11-4&oh=01_Q5AaIO1zARKH3NZkedYS3-iDiKd6BbU5hVfmRXkCCPlXpKSa&oe=66335895&_nc_sid=e6ed6c&_nc_cat=106" alt="client" />
            <p>
              The website provided detailed information about hotel, including
              amenities, photos, which helped me make an informed decision.
            </p>
          </div>
          <div class="client__card">
            <img src="https://media-del1-1.cdn.whatsapp.net/v/t61.24694-24/427477533_941087887599409_7706163645025697257_n.jpg?ccb=11-4&oh=01_Q5AaIM4Ls0XQb0iLS4RTau5JUDM2fb4G6Xy5rjIF160FuN43&oe=6631DC69&_nc_sid=e6ed6c&_nc_cat=107" alt="client" />
            <p>
              I was able to book a room within minutes, and the hotel exceeded
              my expectations. I appreciate Apna hotel efficiency and reliability.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container">
      <div class="reward__container">
        <p>100+ Discount Codes</p>
        <h4>Join rewards and discover amazing discounts on your booking</h4>
      </div>
    </section>
    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>KINGS INN</h3>
          <p>
            KINGS INN is a premiem hotel booking website that offers a seamless and
            convenient way to find and book accommodations worldwide.
          </p>
          <p>
            With a user-friendly interface and a vast selection of hotels,
            KINGS INN aims to provide a stress-free experience for travelers
            seeking the perfect stay.
          </p>
        </div>
        <div class="footer__col">
          <h4>Company</h4>
          <p><a href="http://localhost/cor/about.php">About Us</a></p>
          <p><a href="http://localhost/cor/about.php">Our Team</a></p>
          <p>Blog</p>
          <p><a href="http://localhost/COR/">Book</a></p>
          <p><a href="http://localhost/COR/contact.php">Contact Us</a></p>
        </div>
        <div class="footer__col">
          <h4>Legal</h4>
          <p><a href="http://localhost/COR/faq.php">FAQs</a></p>
          <p><a href="http://localhost/COR/terms.php">Terms & Conditions</a></p>
          <p><a href="http://localhost/COR/privacy.php">Privacy Policy</a></p>
        </div>
        <div class="footer__col">
          <h4>Resources</h4>
          <p>Social Media</p>
          <p><a href="http://localhost/COR/contact.php">Help Center</a></p>
          <p>Partnerships</p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 KINGS INN All Rights Reserved.
      </div>
    </footer>
    <script src="index.js"></script>
  </body>
</html>
