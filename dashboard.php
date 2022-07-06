<?php
	session_start();
  include('connection.php');

	if($_SESSION["logged"] == true){
		echo "Sucessfully logged in!";
	}

  $user_id = $_SESSION['user_id'];

	$query = "select * from users where user_id = '$user_id' limit 1";
  $result = mysqli_query($con, $query);

  $arr = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Budget Bee</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- fonts -->

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
                <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas:wght@400;700&display=swap" rel="stylesheet">

            <!--font-awesome-->
            <script src="https://kit.fontawesome.com/dae2797b42.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="CSS\Common.css">
    <link rel="stylesheet" href="CSS\signin.css">

  </head>


  <body>


	<!--<section id="common-bg-color">-->
    <section id="NavBar">
      <nav class="navbar navbar-expand-lg navbar-dark">

        <h1 class="navbar-brand navbar-light title-color">Budget Bee</h1>
			<div class="bee-img-div">
			<a>
				<img src="./Images/iconbee.png" alt="" class="bee-img">
			</a>
			</div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#TogglerId" aria-controls="TogglerId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id ="TogglerId">

        <ul class="navbar-nav ms-auto">

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Budget.php">Budget</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="goals.php">Goals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="signin.php">Sign In</a>
            </li>

        </ul>
      </div>
        </nav>
    </section>



    <section id="login-form">
    	<div class="login-form-container">

			<div class="row row-vert-margin">

					<h2><?php 
          	  include('connection.php');
              $user_id = $_SESSION['user_id'];

	                $query = "select * from users where user_id = '$user_id' limit 1";
              $result = mysqli_query($con, $query);
            
              $arr = mysqli_fetch_assoc($result);

              echo "Welcome"."    ".$arr['user_name'];
          ?></h2>

          <div class="row row-no-margin">
            <div class="col-lg-12 form-row">
                <h3>User ID:</h3>
                <?php 
                  include('connection.php');
                  $user_id = $_SESSION['user_id'];

	                $query = "select * from users where user_id = '$user_id' limit 1";
                  $result = mysqli_query($con, $query);
                
                  $arr = mysqli_fetch_assoc($result);

                  echo $arr['user_id'];
                ?>

            </div>

            <div class="col-lg-12 form-row">
                <h3>E-Mail:</h3>
                <?php 
                  include('connection.php');
                  $user_id = $_SESSION['user_id'];

	                $query = "select * from users where user_id = '$user_id' limit 1";
                  $result = mysqli_query($con, $query);
                
                  $arr = mysqli_fetch_assoc($result);

                  echo $arr['email'];
                ?>
            

            </div>

          </div>

					</form>

				</div>
			</div>

        </div>
    </section>

  </body>
</html>
