<?php  

    include ("connection.php");
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Employee Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))        
    </script>

    <link rel="icon" type="text/css" href="assets/img/logo.png">     
</head>

  <style>
    /* CSS styles for the tooltip */
    .tooltip {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      width: 200px;
      background-color: #000;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      transform: translateX(-50%);
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }

    .custom-tooltip {
      --bs-tooltip-bg: var(--bs-primary);
    }    
  </style>

  <script>
    // JavaScript code to show the tooltip
    function showTooltip() {
      var tooltip = document.getElementById("tooltipText");
      tooltip.style.visibility = "visible";
      tooltip.style.opacity = 1;
    }

    // JavaScript code to hide the tooltip
    function hideTooltip() {
      var tooltip = document.getElementById("tooltipText");
      tooltip.style.visibility = "hidden";
      tooltip.style.opacity = 0;
    }
  </script>

<body class="bg-gradient-primary" style="background: url(&quot;assets/img/bg.png&quot;) center / cover no-repeat;width: 100%;height: 100vh;">
    <div class="container">
        <div class="row justify-content-center" style="height: 750px;">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0" style="margin-top: 90px;border-radius: 10px;">
                    <div class="card-body p-0" style="height: 600px;background: url(&quot;assets/img/BG-Login.png&quot;) center / cover no-repeat;">
                        <div class="row" style="height: 600px;">
                            <div class="col" style="text-align: center;"><img class="img-fluid" src="assets/img/logo.png" style="width: 270px;margin-top: 40px;">
                                <h1 style="color: rgb(255,255,255);font-weight: bold;font-size: 20px;">Hello, Employee!</h1>
                                <h1 style="color: rgb(255,255,255);font-weight: bold;font-size: 18px;">Login to access the payroll system</h1>
                                <div>
                                    <form action="EmployeeLogin.php" method="post">
                                    <!-- Username -->
                                    <input type="text" placeholder="Username" name="Username" 

                                    data-toggle="tooltip" data-placement="top" 
                                    title="e.g. Iloveyou, Carlo etc."                                    

                                    style="width: 250px;margin: 10px;margin-bottom: 5px;border-radius: 5px;">

                                    <!-- Password -->
                                    <br>
                                    <input type="password" placeholder="Password" name="Password" 

                                    data-toggle="tooltip" data-placement="top" 
                                    title="iloveyou123"                                      

                                    style="width: 250px;margin: 10px;margin-bottom: 5px;border-radius: 5px;"></div>

                                <div style="margin:10px;">
                                    <button class="btn btn-danger" type="submit" name="login" 

                                    onclick="return confirm('Are you sure you want to proceed?');"

                                    value="Login" style="width: 150px;height: 35px;margin: 10px;background: rgb(195,0,2);margin-bottom: 20px;">

                                        Login

                                        </button>
                                    <br>
                                    <br>

                                    <div onclick="return confirm('Are you sure you want to go back?');">
                                        <a href="index.php" style="color: rgb(255,255,255);font-size: 16px;">&lt;&lt; Back</a>

                                    </div>

                                    </div>


<?php

    if (isset($_POST['login']))  // Include Username First
    {  

        // Variable Record
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        // Search Record
        $res = mysqli_query($con, "SELECT * FROM tbl_employee 
            WHERE username='$Username' AND password='$Password'") or die(mysqli_error($con));

        $count = mysqli_num_rows($res);

        // Location Evaluation
        if ($count==0) 
        {
            echo 
              "<script type='text/javascript'>
                alert('Try Again')

                window.location.href=window.location.href;
                ;
              </script>"; 
        } 

        else {

            $_SESSION['Username'] = $_POST['Username'];

            echo 
              "<script type='text/javascript'>
                window.location.href='EmployeeProfile.php;
                ;
              </script>";  
        }
    }
?>      
                                </form>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>