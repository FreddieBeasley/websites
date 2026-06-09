<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Home | Freddie Beasley</title>
          <link rel="stylesheet" href="js_css/style.css">
          <script defer src="js_css/script.js"></script>
     </head>

     <body>
          <?php include 'parts/header.php'; ?>

          <section class="hero alt-hero">
               <div class="hero-overlay">
                    <h1>Freddie Beasley</h1>
                    <p>Rugby Player · Programmer · Academic</p>
               </div>
          </section>

          <section class="intro fade-in">
               <div class="intro-content">
                    <img src="images/other/portrait1.jpg" alt="Portrait of Freddie Beasley" class="intro-img">
                    <div>
                         <h2>Welcome</h2>
                         <p>I’m Freddie — a passionate rugby player, dedicated programmer, and committed student
                              striving for excellence both in and out of the classroom. My journey is shaped by a love
                              for sport, a curiosity for technology, and a drive to succeed academically. I’m always
                              looking to grow, take on new challenges, and make a positive impact wherever I can.</p>
                    </div>
               </div>
          </section>

          <section class="intro fade-in">
               <div class="intro-content">
                    <div>
                         <p>I currently serve as Head Boy at Millfield School, a role I’m honoured to hold alongside my
                              responsibilities as a Prefect and the Rugby Club Captain. These positions have given me
                              the opportunity to contribute to the school community, lead by example, and support others
                              both on and off the field.</p>
                    </div>
                    <img src="images/other/portrait2.jpg" alt="Portrait of Freddie Beasley" class="intro-img">
               </div>
          </section>

          <section class="section-cards">
               <div class="card fade-in">
                    <img src="images/rugby/rugby1.jpg" alt="Rugby action">
                    <h3>Rugby</h3>
                    <p>Watch highlights, explore game photos, and follow my athletic development.</p>
                    <a href="pages/rugby.php" class="card-btn">Explore Rugby</a>
               </div>
               <div class="card fade-in">
                    <img src="images/programming/code1.jpg" alt="Code editor">
                    <h3>Programming</h3>
                    <p>Check out my GitHub activity and browse my latest coding projects.</p>
                    <a href="pages/programmer.php" class="card-btn">See Programming</a>
               </div>
               <div class="card fade-in">
                    <img src="images/academic/achievements/achievement1.jpg" alt="Academic award">
                    <h3>Academic</h3>
                    <p>Review my achievements, grades, and feedback from teachers.</p>
                    <a href="pages/student.php" class="card-btn">View Academics</a>
               </div>
          </section>

          <?php include 'parts/footer.php'; ?>
     </body>

</html>