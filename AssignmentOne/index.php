<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment One | Order Pizza</title>
	<meta name="description" content="This is the Assignment One in PHP, order pizza and save the data">
	<meta name="robots" content="noindex, nofollow">
	<!-- adding bootstrap -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Add Bootstrap (https://getbootstrap.com/) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Bootstrap Icons (https://icons.getbootstrap.com/#usage) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Adding Css style -->
    <link rel="stylesheet" href="./css/style.css">
	<!-- Adding Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&family=Rubik:ital@1&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Header setting -->
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
          <img src="./img/worker.jpg" alt="header logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link active" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About us</a>
            </li>
            <!-- create our pizza list in boostrap-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Our Pizzas
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item">Veggie Lover's</a></li>
                <li><a href="#" class="dropdown-item">Vegetarian Lover's</a></li>
                <li><a href="#" class="dropdown-item">Supreme Lover's</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="orders.php">Order Detail</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
<section class="masthead">
    <div>
      <!-- Company name -->
      <h1>Vegetarian's Friends</h1> 
    </div>
  </section>
    <main>
      <!-- menu list -->
        <section class="menu">
            <div class="opt1">
            <h2>Veggie Lover's</h2>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ingredients
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Broccoli</a></li>
                  <li><a class="dropdown-item" href="#">Tomato</a></li>
                  <li><a class="dropdown-item" href="#">Onions</a></li>
                  <li><a class="dropdown-item" href="#">Artichoke</a></li>
                </ul>
              </div>
            </div>
            <div class="opt2">
            <h2>Vegetarian Lover's</h2>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ingredients
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Cherry tomato</a></li>
                  <li><a class="dropdown-item" href="#">Mushrooms</a></li>
                  <li><a class="dropdown-item" href="#">Olives</a></li>
                  <li><a class="dropdown-item" href="#">chard</a></li>
                  <li><a class="dropdown-item" href="#">Yellow peppers</a></li>
                </ul>
              </div>
            </div>
            <div class="opt3">
            <h2>Suprime Lover's</h2>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ingredients
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Red Peppers</a></li>
                  <li><a class="dropdown-item" href="#">Mushrooms</a></li>
                  <li><a class="dropdown-item" href="#">Green Zucchini</a></li>
                  <li><a class="dropdown-item" href="#">Fried onions</a></li>
                </ul>
              </div>
            </div>
        </section>
        <section class="form-row row justify-content-center">
            <form method="post" class="form-horizontal col-md-6 col-md-offset-3">

              <!-- Form information require to the client -->
                    <h2>New Order</h2>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="fname" class="form-control" id="input1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="lname" class="form-control" id="input2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="input3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Telephone Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" class="form-control" id="input4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Select your pizza</label>
                        <div class="col-sm-10">
                            <select name="pizza" class="form-control">
                                <option>Select</option>
                                <option value="Pizza One">Veggie Lover's</option>
                                <option value="Pizza Two">Vegetarian Lover's</option>
                                <option value="Pizza Three">Supreme Lover's</option>
                               </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Choose your Size</label>
                        <div class="col-sm-10">
                            <select name="psize" class="form-control">
                                <option>Select</option>
                                <option value="Small $7.99">Small $7.99</option>
                                <option value="Medium $10.99">Medium $10.99</option>
                                <option value="Large $12.99">Large $12.99</option>
                               </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="orderaddress" class="form-control" id="input5">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="input1" class="col-sm-2 control-label">Suite or Apart</label>
                            <div class="col-sm-10">
                            <input type="text" name="suiteapart" class="form-control" id="input6" placeholder="Optional">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                        <input type="text" name="city" class="form-control" id="input7">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Post Code</label>
                        <div class="col-sm-10">
                        <input type="text" name="postcode" class="form-control" id="input8">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">Ways of payment</label>
                        <div class="col-sm-10">
                             <select name="paymethod" class="form-control">
                                <option value="Your method">Select</option>
                                <option value="Debit / Credit">Debit / Credit</option>
                                <option value="Georgian OneCard (15% discount)">Georgian OneCard (15% discount)</option>
                                <option value="Cash">Cash</option>
                                <option value="Paypal">Paypal</option>
                              
                            </select>
                        </div>
                    </div>
                    <br>  
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" onclick="confirm('Your order was entered correctly! The delivery service will contact you')" value="Submit" >
                                                

                        
                        <input type="reset" class="btn btn-primary col-md-2 col-md-offset-10" value="Clear" >
                        <br>
                        <br>
                        <!-- additional boton to see order detail -->
                        <a class="link" href="orders.php">Check my order</a>
                    </div>                      

            </form>
            <!-- Php code to store the data -->
            <div class="form-group2 submit-message">
                <!-- <?php // add our code here
                    require_once('database.php');
                 if(isset($_POST) & !empty($_POST)){
                     $fname = $database->sanitize($_POST['fname']);
                     $lname = $database->sanitize($_POST['lname']);
                     $email = $database->sanitize($_POST['email']);
                     $phone = $database->sanitize($_POST['phone']);
                     $pizza = $database->sanitize($_POST['pizza']);
                     $psize = $database->sanitize($_POST['psize']);
                     $orderaddress = $database->sanitize($_POST['orderaddress']);
                     $suiteapart = $database->sanitize($_POST['suiteapart']);
                     $city = $database->sanitize($_POST['city']);
                     $postcode = $database->sanitize($_POST['postcode']);
                     $paymethod = $database->sanitize($_POST['paymethod']);     
                     $res = $database->create($fname, $lname, $email, $phone, $pizza, $psize, $orderaddress, $suiteapart, $city, $postcode, $paymethod);
                     if($res){
                         echo "<p>Order Sent, we will notify you when your pizza is on its way</p>";
                     }else{
                         echo "<p>Could not Add record</p>";
                     }
                 }		 	
                 ?> -->
             </div>
        
        </section>
        <!-- footer setting -->
        <footer class="foot">
            <div>
                <menu>
                   <li><span>Help & Service</span></li>
                   <li>Contact Us</li>
                   <li>Locations</li>
                   <li>FAQs & Help</li>
                   <li>Gift Cards</li>
                   <li>Careers</li>
                   <li>Equal Slice Program</li>
                </menu>
            </div>
                
               <div>
                   <menu>
                       <li><span>Nutrition </span></li>
                       <li>Nutrition Information</li>
                       <li>Food Allergen & Sensitivity</li>
                       <li>Ingredient Listing</li>
                       <li>Gluten Free FAQ</li>
                   </menu>
               </div>
                
               <div>
                   <menu>
                   <li><span id="black">Our Policies</span></li>
                   <li>Privacy</li>
                   <li>Terms & Conditions</li>
                   <li>Join Our Teams</li>
               </menu>
               </div>
                    
               <div>
                   <menu>
                   <li><span>Languages</span></li>
                   <li>Switch to French</li>
                   <li>Switch to Spanish</li>
                   </menu>
                </div>
               
               <div class="last">
                   <h4><span>Follow us</span></h4>
                   <i class="bi bi-instagram"></i>
                   <i class="bi bi-facebook"></i>
                   <i class="bi bi-twitter"></i>
                   <div id="foot">
                   <h3>#105 Blake street, Barrie, ON</h3>
                   <h3>Telephone Number 259-987-5687</h3>
                   </div>
                </div>    
            </footer>
        </main> 
</body>
</html>