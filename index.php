<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IOT-FMS</title>
    </head>

    <body>

        <script src="js/script.js" async></script> 

        <!-- Sidebar -->
        
        <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
            <button class="w3-bar-item w3-button w3-large w3-indigo" style = "padding:13px"
            onclick="w3_close()">Hide &larr;</button>
            <h3 class = "w3-container">Menu</h3>
            <a href="index.php" class="w3-bar-item w3-button" style = "border-bottom:1px solid #9099A2">Home Page</a>
            <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()" style = "border-bottom:1px solid #9099A2">
                    Facilities <i class="fa fa-caret-down"></i>
            </button>
            <div id="demoAcc" class="w3-hide w3-cyan w3-card">
                <a href="php/test.php" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">Air Conditioners</a>
                <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">Lights</a>
                <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">Projectors</a>
                <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">Computers</a>
            </div>
            <button class="w3-button w3-block w3-left-align" onclick="myAccFuncx()" style = "border-bottom:1px solid #9099A2">
                    Room Reservation <i class="fa fa-caret-down"></i>
            </button>
            <div id="demoAccx" class="w3-hide w3-cyan w3-card">
                <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">Lecture</a>
                <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">Labotary</a>
                <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">Library</a>
                <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">Building Administration</a>
            </div>  
            <button class="w3-button w3-block w3-left-align" onclick="myAccFuncxx()" style = "border-bottom:1px solid #9099A2">
                    Reports <i class="fa fa-caret-down"></i>
            </button>      
            <div id="demoAccxx" class="w3-hide w3-cyan w3-card">
                <a href="sendreports.php" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">Report a facility in your room</a>
                <a href="viewreports.php" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">View reported facilities</a>
                <a href="viewhistoryreports.php" class="w3-bar-item w3-button" style = "border-bottom:1px solid #111">History of resolved reported facilities</a>
            </div>  
            <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #9099A2">Class Classification</a>
            <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #9099A2">Data Tables</a>
            <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #9099A2">Privacy Policy</a>
            <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #9099A2">Terms and Conditions</a>
            <a href="#" class="w3-bar-item w3-button" style = "border-bottom:1px solid #9099A2">Go back to APCIS &larr;</a>

            <p class = "w3-container" class="w3-bar-item w3-button" style = "padding-top:5px;">NU-Asia Pacific College &copy; <?php echo date("Y");?> </p> 
    
        </div>
      
        <!-- Navigation Bar -->
        <div id="main">
            <div class="w3-container w3-col w3-row w3-cyan l12" style = "position:fixed">
                <button id="openNav" class="w3-circle w3-cyan w3-medium" onclick = "w3_open()">&#9776;</button>
                <h4 class = "w3-text-indigo" style = "display:inline-block"><a href = "index.php">NU-APC</a></h4>
                <span class = "w3-text-black"><font size = "4"> FMS</font></span> 
                <div class = "w3-dropdown-hover" style = "float:right">
                <button class="w3-button w3-cyan" style = "padding:15px"><span class = "glyphicon glyphicon-user">
                </span> Account <span class = "glyphicon glyphicon-collapse-down"></button>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                    <a href="#" class="w3-bar-item w3-button w3-indigo" style = "border-bottom:1px solid #9099A2">Settings</a>
                    <a href="#" class="w3-bar-item w3-button w3-indigo" style = "border-bottom:1px solid #9099A2">Help</a>
                    <a href="#" class="w3-bar-item w3-button w3-indigo" style = "border-bottom:1px solid #9099A2">Logout</a>
                </div>
            </div>
        </div>
      
    <footer>

    </footer>
</html>