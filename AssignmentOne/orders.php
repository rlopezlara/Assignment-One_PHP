<?php
	// connect with database.php
	require_once('database.php');
	$res = $database->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment One | Register</title>
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
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
          <img src = "./img/worker.jpg" alt="header logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link active" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About us</a>
            </li>
            <!-- create our pizza list-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Our Pizzas
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item">Veggie Lover's</a></li>
                <li><a href="#" class="dropdown-item">Vegetarian Lover's</a></li>
                <li><a href="#" class="dropdown-item">Suprime Lover's</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Orders</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
<main>
  <!-- receive and store the data -->
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>N*</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Phone</th>
        <th>Pizza</th>
        <th>Size</th>
        <th>Address</th>
        <th>Suite</th>
        <th>City</th>
        <th>PostCode</th>
        <th>Payment</th>
			</tr>
			<?php
				//store data
			while($r = mysqli_fetch_assoc($res)){
				?>
				<tr>
					<td><?php echo $r['id']; ?></td>
					<td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
					<td><?php echo $r['email']; ?></td>
                    <td><?php echo $r['phone']; ?></td>
                    <td><?php echo $r['pizza']; ?></td>
                    <td><?php echo $r['psize']; ?></td>
                    <td><?php echo $r['orderaddress']; ?></td>
                    <td><?php echo $r['suiteapart']; ?></td>
                    <td><?php echo $r['city']; ?></td>
                    <td><?php echo $r['postcode']; ?></td>
                    <td><?php echo $r['paymethod']; ?></td>
				</tr>
			<?php	
			}
			?>
		</table>
	</div>
</div>
</main>
<!-- footer detail -->
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
         <li><span>Lenguages</span></li>
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
</body>
</html>
