<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Student</title>
          <link rel="stylesheet" href="../js_css/style.css" />
          <script defer src="../js_css/script.js"></script>
     </head>

     <body>
          <?php include '../parts/header.php'; ?>

          <main>
               <!-- Section 0: Overview -->
               <section class="section">
                    <h2>Academic Overview</h2>
                    <p>
                         Academics have played a key role in shaping my work ethic, time management, and problem-solving
                         abilities. Below are highlights from my academic life, showcasing achievements, performance,
                         and feedback from educators.
                    </p>
               </section>

               <!-- Section 1: Academic Achievements -->
               <section class="section">
                    <h2>Academic Achievements</h2>
                    <div class="gallery">
                         <div class="gallery-item">
                              <img src="../images/academic/achievements/achievement1.jpg"
                                   alt="Awards and Certificates" />
                              <p class="caption">Certificates of distinction in science and computing</p>
                         </div>
                         <div class="gallery-item">
                              <img src="../images/academic/achievements/achievement2.jpg" alt="Maths Competition" />
                              <p class="caption">Top scorer in UKMT Maths Challenge</p>
                         </div>
                    </div>
                    <div class="centered">
                         <a href="moreAchievements.php" class="btn-more" target="_blank">View Full
                              Achievements</a>
                    </div>
               </section>

               <!-- Section 2: Grades -->
               <section class="section">
                    <h2>Grades</h2>
                    <p>
                         I consistently strive for academic excellence, especially in STEM subjects. Here’s a summary of
                         my recent results and reports.
                    </p>
                    <div class="gallery">
                         <div class="gallery-item">
                              <img src="../images/academic/grades/astar.png" alt="Grade Sheet" />
                              <p class="caption">OCR Mathematics</p>
                         </div>
                         <div class="gallery-item">
                              <img src="../images/academic/grades/astar.png" alt="Grade Sheet" />
                              <p class="caption">OCR Further Mathematics</p>
                         </div>
                         <div class="gallery-item">
                              <img src="../images/academic/grades/astar.png" alt="Grade Sheet" />
                              <p class="caption">CIE Computer Science</p>
                         </div>
                         <div class="gallery-item">
                              <img src="../images/academic/grades/astar.png" alt="Grade Sheet" />
                              <p class="caption">AQA Physics</p>
                         </div>
                    </div>
                    <div class="centered">
                         <a href="" class="btn-more" target="_blank">View Further Grades</a>
                    </div>
               </section>

               <!-- Section 3: Teacher Feedback -->
               <section class="section">
                    <h2>Teacher Feedback</h2>
                    <p>
                         I value the guidance and insight of my teachers, who have played an important role in my
                         development. Their feedback reflects my dedication and attitude toward learning.
                    </p>
                    <div class="gallery2">
                         <div class="gallery-item2">
                              <p class="caption">Mr Turner - Further Maths</p>
                              <img src="../images/academic/feedback/feedback1.png" alt="Teacher Comments" />
                         </div>
                         <div class="gallery-item2">
                              <p class="caption">Mr Wilson - Physics</p>
                              <img src="../images/academic/feedback/feedback2.png" alt="Teacher Comments" />
                         </div>
                         <div class="gallery-item2">
                              <p class="caption">Miss Rogers - Computer Science</p>
                              <img src="../images/academic/feedback/feedback3.png" alt="Teacher Comments" />
                         </div>
                         <div class="gallery-item2">
                              <p class="caption">Mr Shields - Computer Science</p>
                              <img src="../images/academic/feedback/feedback4.png" alt="Teacher Comments" />
                         </div>
                         <div class="gallery-item2">
                              <p class="caption">Mr Bradshaw - Maths</p>
                              <img src="../images/academic/feedback/feedback5.png" alt="Teacher Comments" />
                         </div>
                         <div class="gallery-item2">
                              <p class="caption">Dr Fiddes - Maths</p>
                              <img src="../images/academic/feedback/feedback6.png" alt="Teacher Comments" />
                         </div>
                    </div>
               </section>
          </main>

          <?php include '../parts/footer.php'; ?>
     </body>

</html>