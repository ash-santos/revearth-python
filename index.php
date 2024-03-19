<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="assets/logo2.png">
  <title>RevErth</title>
</head>
<body>
  <div id="home"></div>
    <!--This is the navigation bar--> 
  <nav class="navbar navbar-expand-md navbar-light sticky-top p-1">
  <div class="container">
    <a class="navbar-brand" href="#home">
      <img src="assets/logo2.png" class="me-2" alt="logo" width="50" height="50">
      <span class="title fs-4">Rev</span><span class="title2 fs-4">EARTH</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end align-center" id="main">
      <ul class="navbar-nav fs-5">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#service">Service</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#about" role="button" id="dropdownMenuabout" data-bs-toggle="dropdown" aria-expanded="false">About</a>
          <ul class="dropdown-menu border-0 bg-light" ara-labelledby="dropdownMenuabout">
            <li> <a class="dropdown-item bg-light" href="#about">What we do</a></li>
            <li> <a class="dropdown-item bg-light" href="#customersbenefit">Customer's benefit</a></li>
            <li> <a class="dropdown-item bg-light" href="#team">Our Team</a></li>
            <li> <a class="dropdown-item bg-light" href="#partnership">Partnership</a></li>
            <li> <a class="dropdown-item bg-light" href="#contacts">Contacts</a></li>

          </ul>
        </li>
          <li class="nav-item"> <!--This is for the button of the login that will be directed to a modal form-->
            <button type="button" class="btn ms-1 fs-5" data-bs-toggle="modal" data-bs-target="#LoginModal"
              data-bs-whatever="@login">Log in</button>
          </li>
      </ul>
    </div>
  </div>
</nav>
<div class="background card">
  <img src="assets/rever.jpg" class="d-block w-100" alt="Philippine Image"> 
    <div class="card-img-overlay">
</div>
</div>

    <!--This is the login modal form-->
    <div class="modal fade" id="LoginModal"  aria-labelledby="LoginModalLabel" aria-hidden="true">
      <div class="login modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <div class="modal-header border-bottom-0">
            <img src="assets/logo2.png" alt="" width="50" height="50">
            <h5 class="modal-title w-100 fs-3 text ms-5">LOG IN</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form action="login.php" method="post">
              
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user fa-2x ps-2 pt-1"></i> 
                  </div>
                  <input type="text" name="username" class="form-control mx-3 mb-3" id="Username" placeholder="Enter Username">
                </div>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-lock fa-2x ps-2 ms-1 pt-1"></i>
                </div>
                <input type="password" name="password" class="form-control mx-3 mb-3" id="Password" placeholder="Enter Password">
              </div>
              <div class="login mt-3 text-center">
                <button type="submit" class="button mx-auto w-25">Log in</button>
              </div>
              <div class="text-center fs-6 pt-4">
                <a href="#">Forgot Password?</a>
              </div>
            </form>
          </div>
            <p class="text-center fs-6 text-body">Create an account?
              <a data-bs-toggle="modal" data-bs-target="#SignupModal" data-bs-whatever="@Signup" href="#SignupModal"
                data-bs-dismiss="modal">Sign up</a>
            </p>
        </div>
      </div>
    </div>

    <!--This is the sign up modal form-->
    <div class="modal fade" id="SignupModal" aria-labelledby="SignupModalLabel" aria-hidden="true">
      <div class="sign up modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <div class="modal-header border-bottom-0">
            <img src="assets/logo2.png" alt="" width="50" height="50">
            <h5 class="modal-title w-100 fs-3">REGISTRATION</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form action="registration.php" method="post">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <div class="mb-3">
                      <label for="Firstname fs-5">Full Name</label>
                      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter your First name">
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <div class="mb-3">
                      <label for="Firstname fs-5"></label>
                      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter your Last name">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <div class="mb-3">
                      <label for="Username fs-5">Username</label>
                      <input type="username" name="username" class="form-control" id="username" placeholder="Enter Username">
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <div class="mb-3">
                      <label for="Phone number fs-5">Phone Number</label>
                      <input type="tel" name="PhoneNumber" class="form-control" id="PhoneNumber"
                        placeholder="Enter Phone Number">
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="Email fs-5">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
              </div>
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <div class="mb-3">
                      <label for="Password fs-5">Password</span></label>
                      <input type="password" name="password" class="form-control" id="Password" placeholder="Enter Password">
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <div class="mb-3">
                      <label for="Password fs-5">Confirm Password</span></label>
                      <input type="password" name="confirmPassword" class="form-control" id="Password"
                        placeholder="Enter Confirm Password">
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="button content-center mx-auto w-25">Sign Up</button>
              </div>
            </form>
          </div>
          <p class="text-center fs-6">Already have an account?
            <a data-bs-toggle="modal" data-bs-target="#LoginModal" data-bs-whatever="@Login" href="#LoginModal"
              data-bs-dismiss="modal">Log In</a>
          </p>
        </div>
      </div>
    </div>  
    
    <main>
  <!--WHAT DO WE DO section on the dropdown menu of ABOUT button-->
  <section id="about" class="animate__animated animate__slow py-1">
    <div class="container">
      <div class="card-group my-5">
        <div class="row my-5">
          <div class="card col-sm-10 col-md-9 col-lg-4 ms-5"> 
            <img src="assets/reve.jpg" class="img-fluid rounded-4">
          </div>
            <div class="card col-sm-10 col-md-10 col-lg-7">
              <div class="card-body text-center">
                <h2 class="card-title fw-bold">GHG EMISSION INVENTORY</h2>
                <p class="card">GHG emission iventory quantifies the emitted GHG in a certain period of time. It tracks the sources of the emission, assesses the carbon footprint, and monitors the progress of the reduction target. GHG emissions can be calculaed through different sectors like the energy sector which calculates the emission from energy produced and consumed, and the transportation sector which calculates the emission from vehicles used.</p>
              </div>
            </div>
        </div>
        <div class="bg shadow-lg rounded-3 py-4 px-4 mb-4">
          <div class="row ms-5">
            <div class="col-sm-10 col-md-10 col-lg-7">
              <div class="card-body">
                <h2 class="card-title fw-bold">ENERGY AUDITING</h2>
                <p class="card text-start">Energy auditing evaluates the efficiency of a building or faculty by assessing its energy consumption and consumption pattern. It provides solution and recommendations based on the analyzed data. Energy auditing contributes to energy conservation, cost-effectiveness, and energy management plan of the building or facility.</p>
              </div> 
           </div>
            <div class="card col-sm-10 col-md-10 col-lg-4">
              <img src="assets/img3.jpg" class="img-fluid rounded-4">
            </div>
          </div>
        </div>
        <div class="row my-5">
          <div class="card col-sm-10 col-md-9 col-lg-4 ms-5"> 
            <img src="assets/img2.jpg" class="img-fluid rounded-4">
          </div>
          <div class="card col-sm-10 col-md-10 col-lg-7">
            <div class="card-body text-center">
              <h2 class="card-title fw-bold">RA 11285</h2>
              <h5 class="card fw-bold">Energy Efficient and Conservation Act</h5>
              <p class="card">The Energy Efficient and Conservation Act makes energy conservation essential and institutionalizes in order to ensure that energy use becomes sustainable.</p>
              <button type="button" class="button1 mx-auto w-30 px-3" data-bs-toggle="modal" data-bs-target="#lawmodal">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--Modal for EEC Act-->
    <div class="modal fade" id="lawmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LawModalLabel" aria-hidden="true">
      <div class="law modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-0">
            <h3 class="card-title text-center fw-bold text-uppercase">Energy Efficient and Conservation Act</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="card col-sm-5 mt-5 mb-auto"> 
                  <img src="assets/reve.jpg" class=" mt-5 rounded-4" alt="...">
                </div>
                <div class="card col-sm-7 align-self-center">
                  <div class="card-body text-start">
                    <p>Republic Act No. 11285, the Energy Efficient and Conservation Act, outlines its policy in Section 2. This declaration commits to institutionalizing energy efficiency and conservation practices, emphasizing their integration into established institutions and systems.</p>
                    <p>Furthermore, the act seeks to actively promote and encourage the development of efficient renewable technologies, recognizing the crucial role they play in sustainable energy practices. Additionally, it aims to reinforce existing laws, ensuring a comprehensive approach to energy efficiency and conservation.</p> 
                    <p>Finally, the act advocates for a market-driven approach, highlighting the importance of economic mechanisms in fostering effective energy efficiency and conservation initiatives.  Section 2 establishes the framework for a strategic and well-coordinated approach to energy management, highlighting the government's unwavering dedication to cultivating a resilient and sustainable energy future for the Philippines.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--CUSTOMER'S BENEFITS section-->
  <section id="customersbenefit" class="customer py-4" style="background-color: rgba(164, 194, 70, .4);">
    <div class="container">
      <h2 class="card-title text-center text-uppercase fw-bold">Customer's Benefit</h2>
      <div class="card-group">
        <div class="row my-3 text-center justify-content-center align-items-center">
          <div class="col-sm-5 col-md-5 col-lg-2">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/cb_icon1.png" class="img-fluid" width="100" alt="...">
              <div class="card-body">
                <p class="fw-bold">Energy and GHG Emissions Monitoring</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-5 col-lg-2">
            <div class="card justify-content-center align-items-center">
              <img src="assets/cb_icon2.png" class="img-fluid" width="100" alt="...">
              <div class="card-body">
                <p class="fw-bold">Management and Reduction Opportunities</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-5 col-lg-2">
            <div class="card justify-content-center align-items-center">
              <img src="assets/cb_icon3.png" class="img-fluid" width="100" alt="...">
              <div class="card-body">
                <p class="fw-bold">Capture Financial Returns from Energy Savings</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-5 col-lg-2">
            <div class="card justify-content-center align-items-center">
              <img src="assets/cb_icon4.png" class="img-fluid" width="100" alt="...">
              <div class="card-body">
                <p class="fw-bold">Reduce Environmental Impact</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--About RevEarth section-->
  <section id="RevEarth" class="revearth reveal-fade animate__animated animate__slow py-2 my-3">
    <div class="container justify-content-center align-items-center">
      <div class="card-group">
        <div class="row py-4 my-5">
          <div class="col-md-7 col-lg-4 my-auto mx-auto">
            <div class="card">
              <img src="assets/rev.jpg" class="img-fluid rounded-circle" alt="image RevEarth">
            </div>
          </div>
          <div class="card col-sm-10 col-md-12 col-lg-8 my-auto">
            <div class="row">
              <div class="card col-lg-10 mx-auto">
                <div class="card-body text-center">
                  <h1><span class="title" style="color: #A5C046;">Rev</span><span class="title2">EARTH</span></h1>
                  <p class="card-text">revEARTH is a startup company in the province of Bataan offering a web-based tool for energy auditing and greenhouse gas emission calculation for institutions and small-to-medium enterprises – providing them with energy management solutions and cost-cutting strategies.</p>
                </div>
              </div>
            </div>
            <div class="row pt-5">
              <div class="card col-lg-6 mx-auto">
                <div class="card-body text-center">
                  <h2 class="card-title fw-bold text-uppercase">Mission</h2>
                  <p class="card-text">revEARTH provides a user-friendly tool for energy consumption and GHG emissions calculation to institutions and small-to-medium enterprises in the province of Bataan, and empower them with effective and sustainable energy management plans by providing them with the necessary information regarding their energy usage and GHG emissions.</p>
                </div>
              </div>
              <div class="card col-lg-6 mx-auto">
                <div class="card-body text-center">
                  <h2 class="card-title fw-bold text-uppercase">Vision</h2>
                  <p class="card-text">revEARTH aims to contribute to the total reduction of the Philippine carbon footprint within the industry and transport sector and its environmental impacts, as well as to promote a more sustainable, efficient, and responsible energy consumption in line with the Energy Efficiency and Conservation Act of the Philippines. </p>
                </div>
              </div>
            </div>
            <div class="card col-sm-10 col-md-5 col-lg-9 my-auto mx-auto">
              <h1 class="text-center text-bold mt-5" style="color: #C5DB6F;">“Unravel your Trace”</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!--Subscription Plan section-->
  <section class="subscription justify-content-center align-items-center py-4" style="background-color: #C5DB6F;">
    <div class="container">
      <h1 class="card-title text-center text-uppercase pt-4 pb-3">Subscription Plan</h1>
        <p class="text-center">Take your desired plan to get access to our service easily, we like to offer special license offer our users.</p>
      <div class="row g-5 px-5 py-3 border-0 text-center justify-content-center">
        <div class="col-md-7 col-lg-3">
          <div class="card bg-light h-100 p-4">
            <h3 class="card-title fw-bold pt-2 pb-4">BASIC</h3>
            <p class="card-text mt-5 fw-bold mb-1">Energy Auditing</p>
            <p>Total Kg of Co2e <br>
            Individual Equipment Consumption</p>
            <p class="card-text mt-1 fw-bold mb-1">GHG Inventory</p>
            <p>Equipment Emissions <br>
            Energy Analysis</p>
            <button type="button" class="button1 mx-auto mt-auto w-30 px-3">GET STARTED</button>
          </div>
        </div>
        <div class="col-md-7 col-lg-3">
          <div class="card bg-light h-100 p-4">
            <h3 class="card-title fw-bold pt-2 pb-4">STANDARD</h3>
            <p class="card-text mt-5 fw-bold mb-1">Energy Auditing</p>
            <p>Total Kg of Co2e <br>
            Individual Equipment Consumption</p>
            <p class="card-text mt-1 fw-bold mb-1">GHG Inventory</p>
            <p>Equipment Emissions<br>
              Cost Cutting Strategy <br>
              Energy Analysis <br>
              Decomposition Analysis</p>
            <button type="button" class="button1 mx-auto mt-auto w-30 px-3">GET STARTED</button>
          </div>
        </div>
        <div class="col-md-7 col-lg-3">
          <div class="card bg-light h-100 p-4">
            <h3 class="card-title fw-bold pt-2 pb-4">PREMIUM</h3>
            <p class="card-text mt-5 fw-bold mb-1">Energy Auditing</p>
            <p>Total Kg of Co2e <br>
            Individual Equipment Consumption</p>
            <p class="card-text mt-1 fw-bold mb-1">GHG Inventory</p>
            <p>Equipment Emissions<br>
              Transportation Emissions <br>
              Energy Management Plan <br>
              Cost Cutting Strategy <br>
              Energy Analysis <br>
              Decomposition Analysis <br>
              Site Visit</p>
            <button type="button" class="button1 mx-auto mt-auto w-30 px-3">GET STARTED</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Team section-->
  <section class="team justify-content-center align-items-center py-4" id="team">
    <div class="container">
      <h1 class="text-dark text-center">The <span class="team">Team</span></h1>
      <div class="card-group justify-content-center">
        <div class="row mt-3 justify-content-center">
          <div class="col-sm-5 col-md-4 col-lg-3">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/Navarro, Jansel Neil.jpeg" class="rounded-4 border border-secondary ms-3" height="150" width="150" alt="...">
              <div class="card-body text-center">
                <h6 class="text-dark m-0">JANSEL NIEL NAVARRO</h6>
                <p class="text-sub">Chief Executive Officer</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4 col-lg-3">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/Martinez, Dan William.JPG" class="rounded-4 border border-secondary ms-3" height="150" width="150" alt="...">
              <div class="card-body text-center">
                <h6 class="text-dark m-0">ENGR. DAN WILLIAM MARTINEZ</h6>
                <p class="text-sub">Technical Consultant</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4 col-lg-3">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/Grace, Katherine.JPG" class="rounded-4 border border-secondary ms-3" height="150" width="150" alt="...">
              <div class="card-body text-center">
                <h6 class="text-dark m-0 ">KATHERINE GRACE</h6>
                <p class="text-sub">Financial Head</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4 col-lg-3">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/Asas, Jhemalyn.JPG" class="rounded-4 border border-secondary ms-3" height="150" width="150" alt="...">
              <div class="card-body text-center">
                <h6 class="text-dark m-0 ">JHEMALYN ASAS</h6>
                <p class="text-sub ">Operation Head</p>
              </div>
            </div>
          </div>
        </div>   
      </div>
      <div class="card-group justify-content-center">
        <div class="row justify-content-center">
          <div class="col-sm-5 col-md-4 col-lg-2">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/Garbin-Jolinalyn_3C.jpg" class="rounded-4 border border-secondary" height="150" width="150" alt="...">
              <div class="card-body text-center">
                <h6 class="text-dark m-0 ">JOLINALYN GARBIN</h6>
                <p class="text-sub ">Project Manager</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4 col-lg-2">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/Bermudez, Precious.jpeg" class="rounded-4 border border-secondary" height="150" width="150" alt="...">
              <div class="card-body text-center">
                <h6 class="text-dark m-0 ">PRECIOUS BERMUDEZ</h6>
                <p class="text-sub ">Project Staff</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4 col-lg-2">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/Bueno-Xena-Mariz_3C.jpg" class="rounded-4 border border-secondary" height="150" width="150" alt="...">
              <div class="card-body text-center">
                <h6 class="text-dark m-0">XENA MARIZ BUENO</h6>
                <p class="text-sub ">Project Staff</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4 col-lg-2">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/Cruz, Michael Adrian.jpg" class="rounded-4 border border-secondary" height="150" width="150" alt="...">
              <div class="card-body text-center">
                <h6 class="text-dark m-0">MICHAEL ADRIAN CRUZ</h6>
                <p class="text-sub ">Project Staff</p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4 col-lg-2">
            <div class="card justify-content-center align-items-center">          
              <img src="assets/Redaja, Ronald Jr.png" class="rounded-4 border border-secondary" height="150" width="150" alt="...">
              <div class="card-body text-center">
                <h6 class="text-dark m-0">RONALD REDAJA JR.</h6>
                <p class="text-sub ">Project Staff</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Partnership section-->
  <section class="partnership justify-content-center align-items-center py-4" id="partnership">
      <div class="container">
        <div class="row g-5 px-5 py-3 border-0 justify-content-center">
          <div class="col-md-4 col-lg-5">
            <h2 class="title-partner text-center pb-4">IN PARTNERSHIP WITH</h2>
            <div class="card justify-content-center align-items-center text-center mx-auto my-auto">
              <img src="assets/BPSU.png" class="img" height="100">
              <div class="card-body">
                <h5 class="card-title text-dark fw-bold">BPSU MAIN CAMPUS</h5>
              </div>
            </div>
            <div class="card justify-content-center align-items-center text-center mx-auto my-auto">
              <img src="assets/OES.png" class="img" height="100">
              <div class="card-body">
                <h5 class="card-title text-dark fw-bold">BPSU OFFICE OF ENVIRONMENTAL SUSTAINABILITY</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-5">
            <h2 class="title-partner text-center pb-4">CO-INCUBATION</h2>
            <div class="card justify-content-center align-items-center text-center mx-auto my-auto">
              <img src="assets/SIKAT.png" class="img" height="100">
              <div class="card-body">
                <h5 class="card-title text-dark fw-bold">BPSU-SIKAT TBI</h5>
              </div>
            </div>
            <div class="card justify-content-center align-items-center text-center mx-auto my-auto">
              <img src="assets/NEXUS.png" class="img" height="100">
              <div class="card-body">
                <h5 class="card-title text-dark fw-bold">NEW ENERGY NEXUS PHILIPPINES</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</main>
  <!--footer-->
<footer>
  <section id="contacts" style="background-color:#0C5A4D">
    <div class="container">
      <div class="d-flex justify-content-end text-white py-2">
        <h6 class="me-5 pt-2">Get connected with us on social networks:</h6>
          <div>
            <a href="#" class="text-white me-4">
              <i class="fa fa-facebook fa-2x"></i>
            </a>
            <a href="#" class="text-white me-4">
              <i class="fa fa-linkedin-square fa-2x"></i>
            </a>
            <a href="#" class="text-white me-4">
              <i class="fa fa-instagram fa-2x"></i>
            </a>
        </div>
      </div>
    </div>
  </section>
  <section>    
    <div class="container text-center text-md-start pt-2 pb-5">
        <div class="row mt-4">
          <div class="col-md-3 col-lg-2 mb-4">
            <a href="#home">
              <img src="assets/logo.png" alt="logo" width="150" height="150">
            </a>
          </div>
          <div class="col-md-2 col-lg-2 mb-4">
            <div class="card-body">
              <h5><a href="#home" class="foot text-dark">Home</a></h5>
              <h5><a href="#service" class="foot text-dark">Service</a></h5>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 mb-4">
            <h5><a href="#about" class="foot text-dark">About</a></h5>
            <h6><a href="#about" class="foot ms-2 text-dark">What we do</a></h6>
            <h6><a href="#customersbenefit" class="foot ms-2 text-dark">Customer's benefit</a></h6>
            <h6><a href="#RevEarth" class="foot ms-2 text-dark">About RevEARTH</a></h6>
            <h6><a href="#team" class="foot ms-2 text-dark">Our Team</a></h6>
            <h6><a href="#partnership" class="foot ms-2 text-dark">Partnership</a></h6>
          </div>
          <div class="col-md-4 col-lg-3 mx-auto mb-md-0 mb-4">
            <h6><i class="fa fa-home me-2"></i> Balanga City, Bataan</h6>
            <h6><i class="fa fa-envelope me-2"></i> revearth@gmail.com</h6>
            <h6><i class="fa fa-phone me-2"></i> + 01 234 567 88</h6>
          </div>
      </div>
    </div>
  </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>