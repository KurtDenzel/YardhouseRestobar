<?php  

  include ("connection.php");

  session_start();

  $id=$_GET['updateid'];
  $sql = "SELECT * FROM tbl_admin WHERE id=$id";
  $result=mysqli_query($con, $sql);
  $row=mysqli_fetch_assoc($result);

  $AdminID  = $row ['id'];              
  $AdminUsername = $row ['username'];
  $AdminPassword = $row ['password'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #121212;border-color: var(--bs-dark);color: #121212;">
            <div class="container-fluid d-flex flex-column p-0">
                <div class="sidebar-brand-icon"><img class="img-fluid" src="assets/img/logo.png" style="width: 300px;margin-top: 5px;"></div>
                <hr class="sidebar-divider my-3">
                <ul class="navbar-nav text-light" id="accordionSidebar-1">
                    <li class="nav-item"><a class="nav-link" href="AdminProfile.php"><i class="fas fa-user" style="font-size: 25px;color: #ff9900;"></i><span style="font-size: 20px;">Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="table.php"><i class="fas fa-table" style="font-size: 25px;color: #ff9900;"></i><span style="font-size: 20px;">Payroll</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Staff.php" style="font-size: 20px;"><i class="far fa-user-circle" style="font-size: 25px;color: #ff9900;"></i><span>Staff</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                    <ul class="navbar-nav text-light" id="accordionSidebar"

                    onclick="return confirm('Are you sure you want to proceed?');"
                    
                    >
                        <li class="nav-item" style="margin-top: 35vh;"><a class="nav-link" href="index.php" style="font-size: 20px;text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 30px;color: #ff9900;">
                                    <path d="M8.51428 20H4.51428C3.40971 20 2.51428 19.1046 2.51428 18V6C2.51428 4.89543 3.40971 4 4.51428 4H8.51428V6H4.51428V18H8.51428V20Z" fill="currentColor"></path>
                                    <path d="M13.8418 17.385L15.262 15.9768L11.3428 12.0242L20.4857 12.0242C21.038 12.0242 21.4857 11.5765 21.4857 11.0242C21.4857 10.4719 21.038 10.0242 20.4857 10.0242L11.3236 10.0242L15.304 6.0774L13.8958 4.6572L7.5049 10.9941L13.8418 17.385Z" fill="currentColor"></path>
                                </svg><span>Logout</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="background: url(&quot;assets/img/bg.png&quot;) center / cover no-repeat, #e2e2e2;">
                <nav class="navbar navbar-light navbar-expand shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><label class="form-label d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100" style="font-size: 30px;color: rgb(0,0,0);">Payroll Management System</label>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow" style="display: grid;place-items: center;">
                                <div><label class="form-label" style="font-size: 30px;color: rgb(0,0,0);font-weight: bold;">Hello, Admin!</label></div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" style="margin-top: 5vh;">
                    <h3 class="text-dark mb-4" style="color: rgb(0,0,0);font-weight: bold;margin-left: 20px;font-size: 30px;">Edit Admin / Business Details</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow-lg mb-3">
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-xxl-12">
                                                        <div class="mb-3"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>Business Name</strong><br></label><input class="form-control" type="text" placeholder="The Yardhouse Restobar" name="firstname" disabled="" style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xxl-12">
                                                        <div class="mb-3"><label class="form-label" for="first_name" style="color: rgb(0,0,0);font-size: 20px;"><strong>Owners Name</strong><br></label><input class="form-control" type="text" placeholder="ex. DELA CRUZ" disabled="" name="lastname" style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="first_name" style="color: rgb(0,0,0);font-size: 20px;"><strong>Email Address</strong><br></label><input class="form-control" type="text" placeholder="Yardhouse23@gmail.com" disabled="" style="font-size: 20px;"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="last_name" style="font-size: 20px;color: rgb(0,0,0);"><strong>Contact Number</strong><br></label><input class="form-control" type="text" placeholder="09*********" disabled="" style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"  style="font-size: 20px;color: rgb(0,0,0);"><strong>Business Address</strong><br></label><input class="form-control" type="text" placeholder="104 - 106 Arbortowne Plaza. Karuhatan Road, Gen T de Leon, Valenzuela" disabled="" style="font-size: 20px;"></div>
                                                    </div>
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="first_name" style="color: rgb(0,0,0);font-size: 20px;"><strong>Date Started Business</strong><br></label><input class="form-control" value="01 / 06 / 2023" type="text" disabled="" style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-xxl-0">
                            <div class="card shadow-lg mb-3">
                                <div class="card-body text-center shadow" style="padding: 20px;"><img src="assets/img/admin.png" class="img-thumbnail mb-3 mt-4" width="160" height="160" style="width: 220px;height: 220px;border-width: 0px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow-lg mb-3" style="margin-top: 20px;">
                                        <div class="card-body">
                                            <form action="" method="post">
                                                <!-- Username -->
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="first_name" style="font-size: 20px;color: rgb(0,0,0);"><strong>Username</strong><br></label>


                                                            <input class="form-control" type="text"

                        data-toggle="tooltip" data-placement="top" 
                        title="e.g. CarloOtida, ElishaLazaga etc."  

                                                            value="<?php echo $AdminUsername ?>" name="username" style="font-size: 20px;"></div>
                                                    </div>
                                                    <!-- Username -->
                                                </div>
                                                <div class="row">
                                                    <!-- Password -->
                                                    <div class="col">
                                                        <div class="mb-3" style="margin-bottom: 0px;">

                                                            <label class="form-label" for="first_name" style="color: rgb(0,0,0);font-size: 20px;"><strong>Password</strong><br></label>

                                                            <input class="form-control" type="text" 

                                data-toggle="tooltip" data-placement="top" 
                                title="iloveyou123"                                                              

                                                            value="<?php echo $AdminPassword ?>" 

                                                            name="password" style="font-size: 20px;"></div>
                                                        <!-- Password -->
                                                    </div>
                                                </div>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-4 offset-xxl-8">
                            <div class="card shadow-lg mb-3">
                                <div class="card-body">
                                    <div class="mb-4" style="text-align: center;margin-top: 20px;">
                                        <div class="row">
                                            <div class="col" style="text-align: center;">

                                                <button class="btn btn-success btn-sm" name="update" type="submit" value="Save" 

                                                onclick="return confirm('Are you sure you want to proceed with this action?');" 

                                                style="font-size: 20px; width: 200px; background: #00B027;height: 40px; color: rgb(255,255,255); font-weight: bold; margin-bottom: 10px; ">Save</button>

                                            </div>
                                            
                                            <div class="col" style="text-align: center;">
                                                <a class="btn btn-sm" role="button" style="font-size: 20px;width: 200px;background: #c7c7c7;height: 40px;color: rgb(0,0,0);font-weight: bold;margin-left: 0px;" href="AdminProfile.php">Cancel</a></div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>


    <?php  

      if (isset($_POST['update'])) {

        $AdminUsername = $_POST["username"];       
        $AdminPassword = $_POST["password"];


        // Validation if the username does exist already
        $sql = "UPDATE tbl_admin SET id = $id, 
        username = '$AdminUsername',
        password = '$AdminPassword'

        WHERE id=$id";

        $result = mysqli_query($con,$sql);


        if ($result) {
            echo 
              "<script type='text/javascript'>
                alert('Admin Record has been Updated...')

                window.location.href='AdminProfile.php';
                ;
              </script>";     
        }else {
          echo 
              "<script type='text/javascript'>
                alert('Admin Record has not been Updated...')
              </script>";    
        }

      }
    ?>

</html>