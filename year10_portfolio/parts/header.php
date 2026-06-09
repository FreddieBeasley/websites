  <!DOCTYPE html>
  <html lang="en">

       <body>
            <nav class="nav-container">
                 <div class="nav__main">
                      <h1 class="nav__logo nav__logo-desktop"><a href="index.php"><img class="logo"
                                     src="./images/all/navigation/logo.png" alt=""></a></h1>
                      <h1 class="nav__logo nav__logo-mobile"><a href="index.php"><img class="logo-mobile"
                                     src="./images/all/navigation/logo-mobile.png" alt=""></a></h1>
                      <div class="hamburger" onclick="openNav()">
                           <span id="openOne" class="bars"></span>
                           <span id="openTwo" class="bars"></span>
                           <span id="openThree" class="bars"></span>
                      </div>
                 </div>
                 <div id="myMobileNav" class="overlay">
                      <a href="javascript:void(0)" id="cross" class="close-btn" onclick="closeNav()">
                           &times;
                      </a>
                      <div class="nav__list">
                           <div class="nav__list__item">
                                <button class="nav__list__item__btn">Services</button>
                                <div class="nav__list__item__dropdown">
                                     <a class="nav__list__item__dropdown__item" href="#">Creation</a>
                                     <a class="nav__list__item__dropdown__item" href="#">Maintenance</a>
                                </div>
                           </div>
                           <div class="nav__list__item">
                                <button class="nav__list__item__btn">About Us</button>
                                <div class="nav__list__item__dropdown">
                                     <a class="nav__list__item__dropdown__item" href="#">Who are we</a>
                                     <a class="nav__list__item__dropdown__item" href="#">Where are we</a>
                                     <a class="nav__list__item__dropdown__item" href="#">Blog</a>
                                </div>
                           </div>
                           <div class="nav__list__item">
                                <button class="nav__list__item__btn">Contact Us</button>
                                <div class="nav__list__item__dropdown">
                                     <div class="nav__list__item__dropdown__item-container">
                                          <a class="nav__list__item__dropdown__item nav__list__item__dropdown__item__secondary"
                                               href="contact-form.php" target="_blank"><img
                                                    src="images/all/navigation/form.png"
                                                    alt="web development somerset form icon" /></a>
                                     </div>
                                     <div class="nav__list__item__dropdown__item-container">
                                          <a class="nav__list__item__dropdown__item nav__list__item__dropdown__item__secondary"
                                               href="https://twitter.com/FreddieBeasle10" target="_blank"><img
                                                    src="images/all/navigation/twitter.png"
                                                    alt="web development somerset twitter icon" /></a>
                                     </div>
                                     <div class="nav__list__item__dropdown__item-container">
                                          <a class="nav__list__item__dropdown__item nav__list__item__dropdown__item__secondary"
                                               href="https://www.facebook.com/profile.php?id=100074981395503"
                                               target="_blank"><img src="images/all/navigation/facebook.png"
                                                    alt="web development somerset facebook icon" /></a>
                                     </div>
                                     <div class="nav__list__item__dropdown__item-container">
                                          <a class="nav__list__item__dropdown__item nav__list__item__dropdown__item__secondary"
                                               href="https://www.instagram.com/freazley07o8/" target="_blank"><img
                                                    src="images/all/navigation/instagram.png"
                                                    alt="web development somerset instagram icon" /></a>
                                     </div>
                                </div>
                           </div>
                      </div>
                 </div>
            </nav>
       </body>

  </html>