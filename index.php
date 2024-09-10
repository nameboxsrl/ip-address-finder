<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Check your location's IP">
    <meta name="author" content="Precup Vasile">

    <title>Find out your location's IP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> YOUR COMPANY LTD <span class="light">IP Finder</span> 
                </a>
            </div>

            
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 id="userIPv4" class="brand-heading"></h1>
                        <p class="intro-text">Your location's IP</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>How to request IP unblocking?</h2>
                <p>If you entered the wrong cPanel or email password and access to the server was restricted by the firewall, please send us your IP address <strong></strong><span id="userIPv4Footer" class="footer-ip"></span></strong> to [your support email] to have it unblocked.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Company LTD</p>
            <!-- Display IP address also in the footer -->
            
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

    <script>
        // Function to get the user's IPv4 address using JavaScript
        function getUserIPv4() {
            // Make a request to a third-party service to get the IP address
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'https://api.ipify.org?format=json', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var ip = response.ip;
                    document.getElementById('userIPv4').innerText = ip;
                    // Update the IP address in the footer area as well
                    document.getElementById('userIPv4Footer').innerText = ip;
                } else {
                    // Unable to get the user's IP address
                    document.getElementById('userIPv4').innerText = '';
                    document.getElementById('userIPv4Footer').innerText = '';
                }
            };
            xhr.send();
        }

        // Call the function to get the IPv4 address when the page loads
        getUserIPv4();
    </script>

</body>

</html>
