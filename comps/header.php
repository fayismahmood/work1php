<?php
function pageHeader(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/Header.css">
        <link rel="stylesheet" href="css/iconfont/css/iconfont.css">
        <script src="css/bootstrap/bootstrap.bundle.min.js"></script>
        <title>Document</title>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="img/logo.png" width="160px"/>
              </a>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            New Car
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Samp1</a></li>
                            <li><a class="dropdown-item" href="#">Samp12</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Samp1</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            New Bike
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Samp1</a></li>
                            <li><a class="dropdown-item" href="#">Samp12</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Samp1</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News and Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1">Compare</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Market Place
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Samp1</a></li>
                            <li><a class="dropdown-item" href="#">Samp12</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Samp1</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <svg height="20px" viewBox="0 0 384 512"><path d="M384 448H0s0-26 2-40c2-11 17-25 81-49 63-23 60-12 60-55 0-28-14-11-23-64-4-21-6-7-14-40-4-17 3-19 2-27s-2-16-4-33c-2-21 18-76 88-76s90 55 88 76c-2 17-3 25-4 33s6 10 2 27c-8 33-10 19-14 40-9 53-23 36-23 64 0 43-3 32 60 55 64 24 79 38 81 49 2 14 2 40 2 40z"/></svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <svg   height="20px"  viewBox="0 0 288 512"><path d="M144 32c80 0 144 64 144 144 0 112-144 304-144 304S0 288 0 176C0 96 64 32 144 32zm0 191c26 0 47-21 47-47s-21-47-47-47-47 21-47 47 21 47 47 47z"/></svg>
                        </a>
                    </li>
                </ul>
              </div>
            </div>
        </nav>
        <nav class="subnavbar primary">
            <div></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1"> Automatic Car </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1">  Electric Bike  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1"> Scooter </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1"> SUV </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1">  Budget Car  </a>
                </li>
            </ul>
            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-sm" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">
                        <svg height="20px"  viewBox="0 0 384 512"><path d="M274 305l110 110-33 33-109-110v-17l-7-6c-25 21-58 34-93 34C63 349 0 286 0 207S63 64 141 64c79 0 142 64 142 143 0 36-13 68-34 93l7 5h18zm-132 0c55 0 99-43 99-98s-44-99-99-99-98 44-98 99 43 98 98 98z"/></svg>
                    </span>
                </div>
            </form>
        </nav>
    </header>
    
    
    <?php
}
    function pageFooter(){
        ?>
            <footer>
        <div class="services">
                <div>new car</div>
                <div>new bikes</div>
                <div>new scooters</div>
                <div>sell old car</div>
                <div>new car</div>
                <div>new bikes</div>
                <div>new scooters</div>
                <div>sell old car</div>
                <div>new car</div>
                <div>new bikes</div>
                <div>new scooters</div>
                <div>sell old ca</div>
        </div>
        <div class="followUs">
            <h6>Follow Us</h6>
            <img src="img/social.png" alt="" srcset="">
            <div>MotoBuzz © Privacy Policy</div>
        </div>
        <div class="contactUs">
            <h6>Contact Us</h6>
            <div>+91 9400 140 888</div>
            <div>support@motobuzz.in</div>
        </div>
    </footer>
</body>
</html>
        
        
        
        
        <?php
    }


?>