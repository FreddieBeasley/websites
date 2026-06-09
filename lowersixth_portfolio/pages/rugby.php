<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Rugby</title>
  <link rel="stylesheet" href="../js_css/style.css" />
  <script defer src="../js_css/script.js"></script>
</head>
<body>
<?php include '../parts/header.php'; ?>

<main>
  <!-- Section 0: Overview -->
  <section class="section">
    <h2>Rugby Overview</h2>
    <p>
      As a dedicated rugby player, I have represented Millfeild's 1st XV throughout the year. I have also captained numerous 1st XV games, U17 development matches, and have been appointed as the 1XV club captain for next seaon. I am currently part of the Bath Rugby U18s program, and have represent Bath academy at U17s and U16s.
    </p>
  </section>

  <!-- Section 1: Latest YouTube Videos -->
  <section class="section">
    <h2>Latest Rugby Highlights</h2>
    <div class="youtube-gallery" id="youtube-videos">
      <p>Loading latest videos...</p>
    </div>
    <div class="centered">
      <a href="https://www.youtube.com/@FreddieBeasleyRugby" target="_blank" class="btn-more"">See More Videos</a>
    </div>
  </section>
  
  <!-- Section 2: Photo Gallery -->
  <section class="section">
    <h2>Photo Gallery</h2>
    <div class="gallery">
    <div class="gallery-item">
        <img src="../images/rugby/rugby1.jpg" alt="Rugby Training" />
        <p class="caption">Scrum at St Josephs Festival</p>
      </div>
      <div class="gallery-item">
        <img src="../images/rugby/rugby2.jpg" alt="Rugby Training" />
        <p class="caption">Lineout at St Josephs Festival</p>
      </div>
      <div class="gallery-item">
        <img src="../images/rugby/rugby3.jpg" alt="Rugby Match" />
        <p class="caption">Strong defensive set</p>
      </div>
      <div class="gallery-item">
        <img src="../images/rugby/rugby4.jpg" alt="Rugby Match" />
        <p class="caption">Lower sixth photo at WSF</p>
      </div>
      <!-- More images here -->
    </div>

    <!-- More Button -->
    <div class="centered">
      <a href="moreRugby.php" class="btn-more">View More Rugby Photos</a>
    </div>
  </section>
</main>

<?php include '../parts/footer.php'; ?>
</body>
</html>