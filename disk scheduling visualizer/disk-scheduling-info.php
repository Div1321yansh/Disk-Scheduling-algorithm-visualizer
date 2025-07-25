<?php include('../auth.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>What is Disk Scheduling Algorithms</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
</head>

<body>

    <header class="shadow-md">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand mr-5" href="index.php"><img src="images/heading.png" alt="" width="400px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">Simulate</a>
                            <div class="dropdown-menu" id="custom-dropdown-menu">
                                <a class="dropdown-item" href="fcfs-info.php">FCFS</a>
                                <a class="dropdown-item" href="sstf-info.php">SSTF</a>
                                <a class="dropdown-item" href="scan-info.php">SCAN</a>
                                <a class="dropdown-item" href="cscan-info.php">C-SCAN</a>
                                <a class="dropdown-item" href="look-info.php">LOOK</a>
                                <a class="dropdown-item" href="clook-info.php">C-LOOK</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-15">
                    <h1>What is Disk Scheduling?</h1>
                    <p>Disk scheduling is the process of determining the order in which the read/write operations to a computer's disk drive are carried out. When a program or operating system wants to access data stored on a disk, it sends a request to the disk controller. The disk controller then decides which request to service first</p>

                    <section>
                        <h2>Importance of Disk Scheduling</h2>
                        <ul>
                            <li>Enhances Disk Performance: Disk scheduling plays a crucial role in optimizing the performance of the disk. It ensures that read/write requests are serviced efficiently and in a timely manner, minimizing the waiting time for the disk to retrieve the data. This helps to improve overall system performance and reduce the response time of applications.</li>
                            <li>Prevents Resource Starvation: Disk scheduling prevents resource starvation by ensuring that all requests for disk access are serviced in a fair manner. This helps to prevent situations where one process monopolizes the disk, denying other processes the opportunity to access it.</li>
                            <li>Increases System Reliability: By managing disk requests effectively, disk scheduling helps to reduce the likelihood of disk failures and data corruption. It ensures that the disk is accessed in a controlled and orderly manner, reducing the risk of errors that could potentially cause data loss or system crashes.</li>
                            <li>Adapts to System Load: Different disk scheduling algorithms are designed to adapt to varying system loads and priorities. This ensures that the disk is utilized efficiently, even under heavy workloads, and that the most important tasks are given priority over less critical ones.</li>
                            <li>Enables Multi-Tasking: With disk scheduling, multiple processes can access the disk simultaneously without causing conflicts or performance issues. This allows the operating system to handle multiple tasks at the same time, improving system efficiency and productivity.</li>
                        </ul>
                    </section>

                    <h2>Important Terms</h2>
                    There are many Disk Scheduling Algorithms but before discussing them let’s have a quick look at some of the important terms:
                    <ul>
                        <li>Rotational Latency: Rotational Latency is the time taken by the desired sector of disk to rotate into a position so that it can access the read/write heads. So the disk scheduling algorithm that gives minimum rotational latency is better.</li>
                        <li>Disk Response Time: Response Time is the average of time spent by a request waiting to perform its I/O operation. Average Response time is the response time of the all requests. Variance Response Time is measure of how individual request are serviced with respect to average response time. So the disk scheduling algorithm that gives minimum variance response time is better.</li>
                        <li>Seek Time: Seek time is the time taken to locate the disk arm to a specified track where the data is to be read or write. So the disk scheduling algorithm that gives minimum average seek time is better.</li>
                        <li>Access Time: Disk Access Time is: Disk Access Time = Seek Time + Rotational Latency + Transfer Time</li>
                        <li>Transfer Time: Transfer time is the time to transfer the data. It depends on the rotating speed of the disk and number of bytes to be transferred.</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <div class="footer">
        <div class="container">
            <div class="row py-3 text-light">
                <div class="col-lg-3">
                    <a href="index.php"> <img src="images/footer.png" class="footer-logo img-fluid" width="200" draggable="false" alt="Logo"></a>
                </div>
                <div class="col-lg">
                    <h3>Disk Scheduling</h3>
                    <p>Disk scheduling is the process of determining the order in which the read/write operations to a computer's disk drive are carried out.</p>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
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
