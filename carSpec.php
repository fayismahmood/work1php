<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="css/bootstrap/bootstrap.js"></script>
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
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <nav>
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Cars</li>
                          <li class="breadcrumb-item active">BMW X5</li>
                          <li class="breadcrumb-item active"> Specifications and Features </li>
                        </ol>
                    </nav>
                    <div class="innerGrid">
                        <img height="150" src="img/1.png" />
                        <div class="contentSeg">
                            <div><h5>BMW X5 Specifications <i><svg height="25px" viewBox="0 0 384 512"><path d="M320 344c34 0 62 28 62 62s-28 62-62 62-62-28-62-62c0-5 1-10 2-14l-152-88c-12 11-27 17-44 17-35 0-64-29-64-64s28-64 63-64c17 0 32 6 44 17l151-87c-1-5-2-10-2-15 0-35 29-64 64-64s64 29 64 64-29 64-64 64c-17 0-32-6-44-17l-151 87c1 5 2 10 2 15s-1 10-2 15l153 88c11-11 26-16 42-16z"/></svg></i></h5></div>
                            <div class="rating">
                                <svg class="rated" height="20px" viewBox="0 0 404 512">
                                    <path d="M202 373L77 448l33-142L0 210l145-12 57-134 57 134 145 12-110 96 33 142z"/>
                                </svg>
                                <svg class="rated" height="20px" viewBox="0 0 404 512">
                                    <path d="M202 373L77 448l33-142L0 210l145-12 57-134 57 134 145 12-110 96 33 142z"/>
                                </svg>
                                <svg class="rated" height="20px" viewBox="0 0 404 512">
                                    <path d="M202 373L77 448l33-142L0 210l145-12 57-134 57 134 145 12-110 96 33 142z"/>
                                </svg>
                                <svg class="rated" height="20px" viewBox="0 0 404 512">
                                    <path d="M202 373L77 448l33-142L0 210l145-12 57-134 57 134 145 12-110 96 33 142z"/>
                                </svg>
                                <svg height="20px" viewBox="0 0 404 512">
                                    <path d="M202 373L77 448l33-142L0 210l145-12 57-134 57 134 145 12-110 96 33 142z"/>
                                </svg>
                            </div>
                            <h6>
                                5.12 - 9.91 Lakh* EMI <br/>
                                starts at 49,999 Calculate EMI
                            </h6>
                            <span style="font-size: 10px;">
                                *Ex-showroom Price in
                                <span style="color: rgb(23, 114, 150);fill:rgb(23, 114, 150)">
                                    Kochi  
                                    <svg   height="10px"  viewBox="0 0 288 512"><path d="M144 32c80 0 144 64 144 144 0 112-144 304-144 304S0 288 0 176C0 96 64 32 144 32zm0 191c26 0 47-21 47-47s-21-47-47-47-47 21-47 47 21 47 47 47z"/></svg>
                                </span>
                            </span>
                            <div>
                                <img src="img/gift.png"/>
                                <span style="color: red; font-size: 10px;"> January Offers </span>
                            </div>
                        </div>
                        <div style="font-size: 12px; margin-top: 5px;">
                           <span><img height="12px" src="img/copy.png"/> Images (20) </span>
                           <span><img height="12px" src="img/color.png"/> Colours (5) </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm img">
                    <div class="">
                        <img src="img/ad.png" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>          
    </section>
    <section class="tabs">
        <div class="container">
            <ul class="nav Tab">
                <li class="nav-item">
                  <a data-tab-name="Overview"  class="nav-link active" aria-current="page" href="#">Overview</a>
                </li>
                <li class="nav-item">
                  <a  data-tab-name="Specs" class="nav-link" href="#"> Specs and Features </a>
                </li>
                <li class="nav-item">
                  <a data-tab-name="Price" class="nav-link" href="#"> On Road Price </a>
                </li>
                <li class="nav-item">
                    <a data-tab-name="Variants" class="nav-link" href="#" tabindex="-1">Variants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">Variants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">Variants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">Variants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">Variants</a>
                </li>
            </ul>
            <div class="row">
                <div class="col-sm-8">
                    <div class="tabContents">
                        <p class="active" tab="Overview">
                            The BMW X5 delivers confidence in it very appearance. An active kidney grille and air breathers improve the aerodynamics, while available 22" wheels let you ride above the rest. The BMW X5 delivers confidence in its very appearance. An active kidney grille and air breathers improve the aerodynamics. The BMW X5 Delivers Confidence In It Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics, While Available 22" Wheels Let You Ride Above The Rest. The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics .  The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breath
                        </p>
                        <p tab="Specs">
                             in it very appearance. An active kidney grille and air breathers improve the aerodynamics, while available 22" wheels let you ride above the rest. The BMW X5 delivers confidence in its very appearance. An active kidney grille and air breathers improve the aerodynamics. The BMW X5 Delivers Confidence In It Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics, While Available 22" Wheels Let You Ride Above The Rest. The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics .  The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breath
                        </p>
                        <p tab="Price">
                            The BMW X5 it very appearance. An active kidney grille and air breathers improve the aerodynamics, while available 22" wheels let you ride above the rest. The BMW X5 delivers confidence in its very appearance. An active kidney grille and air breathers improve the aerodynamics. The BMW X5 Delivers Confidence In It Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics, While Available 22" Wheels Let You Ride Above The Rest. The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics .  The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breath
                        </p>
                        <p tab="Variants">
                            The BMW X5 delivers confidence in it very appearance. An active kidney grille and air breathers improve the aerodynamics, while available 22" wheels let you ride above the rest. The BMW X5 delivers confidence in its very appearance. An active kidney grille and air breathers improve the aerodynamics. The BMW X5 Delivers Confidence In It Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics, While Available 22" Wheels Let You Ride Above The Rest. The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics .  The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breath
                        </p>
                        <p tab="Overview">
                            The  in it ver kid breathers improve the aerodynamics, while available 22" wheels let you ride above the rest. The BMW X5 delivers confidence in its very appearance. An active kidney grille and air breathers improve the aerodynamics. The BMW X5 Delivers Confidence In It Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics, While Available 22" Wheels Let You Ride Above The Rest. The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breathers Improve The Aerodynamics .  The BMW X5 Delivers Confidence In Its Very Appearance. An Active Kidney Grille And Air Breath
                        </p>
                    </div>
                    <div class="icoSet">
                        <h5> Key Specs & Features of BMW X5 </h5>
                        <div class="IconGrid">
                            <div>
                                <img src="img/Engin.png"/>
                                <span> Engine (upto) </span>
                                <span> 1248cc </span>
                            </div>
                            <div>
                                <img src="img/Engin.png"/>
                                <span> Engine (upto) </span>
                                <span> 1248cc </span>
                            </div>
                            <div>
                                <img src="img/Engin.png"/>
                                <span> Engine (upto) </span>
                                <span> 1248cc </span>
                            </div>
                            <div>
                                <img src="img/Engin.png"/>
                                <span> Engine (upto) </span>
                                <span> 1248cc </span>
                            </div>
                            <div>
                                <img src="img/Engin.png"/>
                                <span> Engine (upto) </span>
                                <span> 1248cc </span>
                            </div>
                            <div>
                                <img src="img/Engin.png"/>
                                <span> Engine (upto) </span>
                                <span> 1248cc </span>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <h5> Price and Mileage of BMW X5 Variants </h5>
                        <div class="nav">
                            <ul class="nav PriceTab">
                                <li  class="nav-item">
                                  <a  data-tab-name="Overview"  class="nav-link active" aria-current="page" href="#">Overview</a>
                                </li>
                                <li class="nav-item">
                                  <a  data-tab-name="Specs" class="nav-link" href="#"> Specs and Features </a>
                                </li>
                                <li class="nav-item">
                                  <a data-tab-name="Price" class="nav-link" href="#"> On Road Price </a>
                                </li>
                            </ul>
                        </div>
                        <div class="PriceTabCont">
                            <div class="grid">
                                <div class="Head">
                                        <div></div>
                                        <div>Variants</div>
                                        <div>Price</div>
                                        <div>Mileage</div>
                                </div>
                                <div class="Cont">
                                    <div>
                                        <div></div>
                                        <div>
                                            <span style="color: rgb(23, 114, 150);">xDrive 30d Sport </span><br> 2993 cc, Automatic, Petrol
                                        </div>
                                        <div>Rs.73.3 Lakh*</div>
                                        <div>13.38 kmpl</div>
                                    </div>
                                    <div>
                                        <div></div>
                                        <div>
                                            <span style="">xDrive 30d Sport </span><br> 2993 cc, Automatic, Petrol
                                        </div>
                                        <div>Rs.73.3 Lakh*</div>
                                        <div>13.38 kmpl</div>
                                    </div>
                                    <div>
                                        <div></div>
                                        <div>
                                            <span style="">xDrive 30d Sport </span><br> 2993 cc, Automatic, Petrol
                                        </div>
                                        <div>Rs.73.3 Lakh*</div>
                                        <div>13.38 kmpl</div>
                                    </div>
                                    <div>
                                        <div></div>
                                        <div>
                                            <span style="">xDrive 30d Sport </span><br> 2993 cc, Automatic, Petrol
                                        </div>
                                        <div>Rs.73.3 Lakh*</div>
                                        <div>13.38 kmpl</div>
                                    </div>
                                    <div>
                                        <div></div>
                                        <div>
                                            <span style="">xDrive 30d Sport </span><br> 2993 cc, Automatic, Petrol
                                        </div>
                                        <div>Rs.73.3 Lakh*</div>
                                        <div>13.38 kmpl</div>
                                    </div>
                                    <div class="footer">
                                        <div class="notif">*Ex-showroom Price</div>
                                        <div>
                                            <button class="btn btn-primary">Compare Variants</button>
                                         </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detailedSec">
                        <div>Detailed Specifications of BMW X5</div>
                        <div>
                            <select>
                                <option>xDrive 30d Sport </option>
                                <option>asf</option>
                                <option>asf</option>
                                <option>asf</option>
                                <option>asf</option>
                            </select>
                        </div>
                    </div>
                    <div class="collapses">
                        
                            <div>
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#collapseExample">
                                    <div>Engine</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>
                                </div>
                                <div>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#Dimensions">
                                    <div>Dimensions</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="Dimensions">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#Wheels">
                                    <div>Wheels & Tyres</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="Wheels">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#BrakingSystem">
                                    <div>Braking System</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="BrakingSystem">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#Suspension">
                                    <div>Suspension</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="Suspension">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#Steering">
                                    <div>Steering</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="Steering">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#SafetyAndSecurity">
                                    <div>Safety & Security</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="SafetyAndSecurity">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#ComfortAndConvenience">
                                    <div>Comfort & Convenience</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="ComfortAndConvenience">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#Lights">
                                    <div>Lights</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="Lights">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#InstrumentationAndCommunication">
                                    <div>Instrumentation & Communication</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="InstrumentationAndCommunication">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="collapsed coll" type="button" data-toggle="collapse" data-target="#Entertainment">
                                    <div>Entertainment</div>
                                    <div><i><svg height="13px" viewBox="0 0 448 512" width="21" height="24"><path d="M224 298l174-167c4-4 12-4 16 0l31 30c4 4 4 12 0 16L232 381c-2 2-5 3-8 3s-6-1-8-3L3 177c-4-4-4-12 0-16l31-30c4-4 12-4 16 0z"/></svg></i></div>    
                                </div>
                                <div>
                                    <div class="collapse" id="Entertainment">
                                        <div class="card card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        
                    </div>
                    <div class="features">
                        <h5>
                            Features of BMW X5
                        </h5>
                        <div class="cont">
                            <div>Power Steering</div>
                            <div>Windows</div>
                            <div>Front Anti Lock Braking System</div>
                            <div>Air Conditioner</div>
                            <div>Driver Airbag</div>
                            <div>Passenger Airbag</div>
                            <div>Automatic Climate Control</div>
                            <div>Power Steering</div>
                            <div>Windows</div>
                            <div>Front Anti Lock Braking System</div>
                            <div>Air Conditioner</div>
                            <div>Driver Airbag</div>
                            <div>Passenger Airbag</div>
                            <div>Automatic Climate Control</div>
                        </div>
                    </div>
                    <div class="sliderArea">
                        <h5>
                            Other Cars from BMW
                        </h5>
                        <div class="tabberGrid">
                            <ul class="nav Tab CarTab">
                                <li class="nav-item">
                                  <a data-tab-name="Overview"  class="nav-link active" aria-current="page" href="#">Overview</a>
                                </li>
                                <li class="nav-item">
                                  <a  data-tab-name="Specs" class="nav-link" href="#"> Specs and Features </a>
                                </li>
                                <li class="nav-item">
                                  <a data-tab-name="Price" class="nav-link" href="#"> On Road Price </a>
                                </li>
                            </ul>
                            <div class="caroAction">
                                <i class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="chevron-left" viewBox="0 0 256 512" width="12" height="24"><path d="M86 256l167 174c4 4 4 12 0 16l-30 31c-4 4-12 4-16 0L3 264c-2-2-3-5-3-8s1-6 3-8L207 35c4-4 12-3 16 1l30 30c4 4 4 12 0 16L86 256z"/></svg>
                                </i>
                                <i class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <svg viewBox="0 0 256 512" width="12" height="24"><path d="M170 256L3 82c-4-4-4-12 0-16l30-30c4-4 12-5 16-1l204 213c2 2 3 5 3 8s-1 6-3 8L49 477c-4 4-12 4-16 0L3 446c-4-4-4-12 0-16z"/></svg>
                                </i>
                            </div>
                        </div>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div>
                                    <div class="card">
                                        <img src="img/ranger.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            Land Rover Range Rover VelarRs.71.87 lakh*
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/ranger.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            Land Rover Range Rover VelarRs.71.87 lakh*
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/ranger.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            Land Rover Range Rover VelarRs.71.87 lakh*
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="carousel-item ">
                                <div>
                                    <div class="card">
                                        <img src="img/ranger.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            Land Rover Range Rover VelarRs.71.87 lakh*
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/ranger.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            Land Rover Range Rover VelarRs.71.87 lakh*
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/ranger.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            Land Rover Range Rover VelarRs.71.87 lakh*
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="carousel-item ">
                                <div>
                                    <div class="card">
                                        <img src="img/ranger.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            Land Rover Range Rover VelarRs.71.87 lakh*
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/ranger.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            Land Rover Range Rover VelarRs.71.87 lakh*
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/ranger.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            Land Rover Range Rover VelarRs.71.87 lakh*
                                        </div>
                                    </div>
                                </div>
                              </div>

                            </div>
                          </div>
                    </div>
                    <div class="AskedQuest">
                        <h5>
                            Frequently Asked Questions/FAQ about BMW X5
                        </h5>
                        <div class="card">
                            Q. How much mileage do we get on the new BMW X5? <br>
                            A. New BMW X5 returns a mileage of 13.9kmpl in highways and 15.2kmpl in city traffic.<br/>
                            
                            A.
                            How much mileage do we get on the new BMW X5? <br/>
                            New BMW X5 returns a mileage of 13.9kmpl in highways and 15.2kmpl in city traffic.<br/>
                        </div>
                    </div>
                    <div class="contact">
                        <h6>
                            Do you have any questions in mind?<br/>
                            Feel free to ask Us!
                        </h6>
                        <div>
                            <input placeholder="Type your question here" type="text" class="form-control form-control-lg" name="" id="">
                            <button class="btn primary"> Ask Us</button>
                        </div>
                    </div>
                </div>
                <div style=" padding: 0 29px;" class="col-sm-4">
                    <div class="LatestNews">
                        <h5>Latest News from BMW</h5>
                        <div class="cont">
                            <div>
                                <img src="img/bike.png" alt="" srcset="">
                                <div>
                                    Harley-Davidson Street 750 & Street Rod BS6 Now Available For Indian Armed 
                                </div>
                            </div>
                            <div>
                                <img src="img/bike.png" alt="" srcset="">
                                <div>
                                    Harley-Davidson Street 750 & Street Rod BS6 Now Available For Indian Armed 
                                </div>
                            </div>
                            <div>
                                <img src="img/bike.png" alt="" srcset="">
                                <div>
                                    Harley-Davidson Street 750 & Street Rod BS6 Now Available For Indian Armed 
                                </div>
                            </div>
                            <div>
                                <img src="img/bike.png" alt="" srcset="">
                                <div>
                                    Harley-Davidson Street 750 & Street Rod BS6 Now Available For Indian Armed 
                                </div>
                            </div>
                            <div>
                                <img src="img/bike.png" alt="" srcset="">
                                <div>
                                    Harley-Davidson Street 750 & Street Rod BS6 Now Available For Indian Armed 
                                </div>
                            </div>
                            <center>
                                <button class="btn primary">Read More Articles</button>
                            </center>
                        </div>
                        
                    </div>
                    <div class="FindNearest card">
                        <h5>
                            Find Nearest BMW Dealer
                        </h5>
                        <input type="text" placeholder="Enter Location" class="form-control form-control-sm">
                        <button class="btn primary btn-sm">Search</button>
                    </div>
                    <div class="compareWith card">
                        <h5>Compare BMW X5 with</h5>
                        <div class="card">
                            <img src="img/ranger.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                Land Rover Range Rover VelarRs.71.87 lakh*
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/ranger.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                Land Rover Range Rover VelarRs.71.87 lakh*
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/ranger.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                Land Rover Range Rover VelarRs.71.87 lakh*
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

<script src="js/script.js"></script>