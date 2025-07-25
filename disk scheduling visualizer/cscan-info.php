<?php include('../auth.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSCAN - Disk Scheduling Algorithms</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" href="images/icon.ico" type="image/x-icon">
</head>

<body>

  <header class="shadow-md">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand mr-5" href="index.php"><img src="images/heading.png" href="index.php" alt=""
            width="400px"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="cursor: pointer;">Visualize</a>
              <div class="dropdown-menu" id="custom-dropdown-menu">
                <a class="dropdown-item" href="FCFS/fcfs.php">FCFS</a>
                <a class="dropdown-item" href="SSTF/sstf.php">SSTF</a>
                <a class="dropdown-item" href="SCAN/scan.php">SCAN</a>
                <a class="dropdown-item" href="CSCAN/cscan.php">C-SCAN</a>
                <a class="dropdown-item" href="LOOK/look.php">LOOK</a>
                <a class="dropdown-item" href="CLOOK/clook.php">C-LOOK</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="py-3 mb-3">
    <div class="container">
      <h1>C-SCAN (Circular SCAN)</h1>
      </br>
      <p>CSCAN is a modified version of SCAN and deals with its inefficiency in servicing the requests. It moves the
        head from one end to other end servicing all the requests. As soon as the head reaches the other end, it returns
        to the beginning without servicing any requests and starts servicing again from the beginning to the other end.
      </p>
      </br>

      <h3> Advantages:</h3>
      <ul>
        <li>Better response time as well as almost equal waiting time.</li>
        <li>Works well with heavy loads.</li>
      </ul>
      </br>

      <h3> Disadvantages:</h3>
      <ul>
        <li>Not fair for servicing at extremes</li>
        <li>More seek movement compared to SCAN</li>
      </ul>

      <h3> Example: </h3>
      <ul>
        <li>Consider a disk containing 200 tracks (0-199) and the request queue includes the track number 176, 79, 34,
          60, 92, 11, 41, 114 respectively. <br> The current position of read//write head is 50, and direction is
          towards the larger value.</li>
        <li>Calculate the total number of cylinders moved by the head using CSCAN disk scheduling.</li>
        <li>As mentioned in the following example, the disk contains 200 tracks. So, we take a track line between 0 to
          199.</li>
        <li>The current position of the read/write head is 50. So, we start at 50, then move the read/write head. When
          all the requests are addressed, <br>then we calculate a total number of cylinders moved by the head.</li>
        <br>
        <img src="images/cscan-eg-graph.png" alt="graph of example">
        <br><br>
        <li>
          Total Number of cylinders moved by head <br>
          = (60-50)+(79-60)+(92-79)+(114-92)+(176-114)+(199-176)+(199-0)+(11-0)+(34-11)+(41-34) <br>
          = 389
        </li>
      </ul>

      <h3>Steps to Implement Algorithm:</h3>
      <ol>
        <li>Let Request array represents an array storing indexes of tracks or queries that have been requested in
          ascending order of their time of arrival. 'head' is the position of disk head.</li>
        <li>The head services only in the right direction from 0 to the size of the disk.</li>
        <li>While moving in the left direction do not service any of the tracks.</li>
        <li>When we reach the beginning(left end) reverse the direction.</li>
        <li>While moving in the right direction it services all tracks one by one.</li>
        <li>While moving in the right direction calculate the absolute distance of the track from the head.</li>
        <li>Increment the total seek count with this distance.</li>
        <li>Currently serviced track position now becomes the new head position.</li>
        <li>Go to step 6 until we reach the right end of the disk.</li>
        <li>If we reach the right end of the disk reverse the direction and go to step 3 until all tracks in the request
          array have not been serviced.</li>
      </ol>
      <p><b> Time Complexity: O ( N * logN ) &emsp; Auxiliary Space: O ( N ) </b></p>

      <a class="simulate" href="CSCAN/cscan.php">Visualize</a>
    </div>
  </div>

  <div class="footer">
    <div class="container">
      <div class="row py-3 text-light">
        <div class="col-lg-3">
          <a href="index.php"><img src="images/footer.png" class="footer-logo img-fluid" width="200" draggable="false"
              alt="Logo"></a>
        </div>
        <div class="col-lg">
          <h3>Disk Scheduling</h3>
          <p>Disk scheduling is the process of determining the order in which the read/write operations to a computer's
            disk drive are carried out.</p>
        </div>
        <div class="col-lg-2">
          <h3>Quick Links</h3>
          <div class="footer-links">
            <a href="fcfs-info.php">FCFS</a>
            <a href="sstf-info.php">SSTF</a>
            <a href="scan-info.php">SCAN</a>
            <a href="cscan-info.php">C-SCAN</a>
            <a href="look-info.php">LOOK</a>
            <a href="clook-info.php">C-LOOK</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('navbar-scrolled', 'shadow');
      } else {
        nav.classList.remove('navbar-scrolled', 'shadow');
      }
    });
  </script>

</body>

</html>