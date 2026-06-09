<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Programmer</title>
          <link rel="stylesheet" href="../js_css/style.css" />
          <script defer src="../js_css/script.js"></script>
     </head>

     <body>
          <?php include '../parts/header.php'; ?>

          <main>
               <!-- Section 0: Overview -->
               <section class="section">
                    <h2>Programming Overview</h2>
                    <p>
                         I have been a pasionate programmer from the age of 15, where I taught myself HTML, CSS and JS
                         for web design. I also explored wordpress and php. At the age of 16 I undertook a project using
                         algorithms to judge the stockmarket. This taught me about softwares like MySQL, MongoDB,
                         Postman and Docker. All of this was done in Node JS. I then chose to study Compsci at Alevel
                         and began learning python along with basic assembly, SQL and declarative languages.
                    </p>
               </section>

               <!-- Section 1: GitHub Commits -->
               <section class="section github-feed">
                    <h2>Latest GitHub Commits</h2>
                    <div id="github-commits" class="github-commits">
                         <p>Loading commits...</p>
                    </div>
               </section>

               <!-- Section 2: Projects -->
               <section class="section">
                    <h2>My Projects</h2>
                    <div class="gallery">
                         <div class="gallery-item">
                              <img src="../images/programming/code1.jpg" alt="Project 1" />
                              <p class="caption">Dijkstra & A* Search Algorithms</p>
                         </div>
                         <div class="gallery-item">
                              <img src="../images/programming/code2.jpg" alt="Project 2" />
                              <p class="caption">Python Physics Engine</p>
                         </div>
                         <div class="gallery-item">
                              <img src="../images/programming/code3.jpg" alt="Project 3" />
                              <p class="caption">Project Euler§</p>
                         </div>
                         <div class="gallery-item">
                              <img src="../images/programming/code4.jpg" alt="Project 4" />
                              <p class="caption">PoW and PoS Blockchain</p>
                         </div>
                         <!-- Add more projects here -->
                    </div>
               </section>
          </main>

          <?php include '../parts/footer.php'; ?>
     </body>

</html>