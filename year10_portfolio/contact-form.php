<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <script src="./js/main.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="./css/contact-form.css" />
          <link rel="stylesheet" href="./css/parts.css">
          <title>Wells Website Developement</title>
     </head>

     <body>
          <?php include "parts/header.php" ?>
          <section class="form">
               <div class="form-container">
                    <div class="form-box">
                         <div class="form-box__left">
                              <img src="images/contact-form/clear.jpg" alt="" />
                         </div>
                         <form action="https://formsubmit.co/a504c464a6c067b6296432804a9d6165" method="POST"
                              class="form-box__right">
                              <h2>GET IN TOUCH</h2>
                              <input type="text" class="field" name="Name" placeholder="Your Name" required />
                              <input type="email" class="field" name="Email" placeholder="Emial Address" required />
                              <input type="text" class="field" name="Phone no." placeholder="Phone no." required />
                              <textarea class="field field__large" name="Message" placeholder="How can we help you?"
                                   required></textarea>
                              <button type="submit" class="form-box__right__btn">send</button>
                         </form>
                    </div>
               </div>
          </section>
          <?php include "parts/footer.php" ?>
     </body>

</html>