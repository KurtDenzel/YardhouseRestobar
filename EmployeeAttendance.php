<?php  

  include ("connection.php");

  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Employee Attendance</title>
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
                    <li class="nav-item"><a class="nav-link active" href="EmployeeAttendance.php"><i class="fas fa-table" style="font-size: 25px;color: #ff9900;"></i><span style="font-size: 20px;">Payroll</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Staff.php" style="font-size: 20px;"><i class="far fa-user-circle" style="font-size: 25px;color: #ff9900;"></i><span>Staff</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                    <ul class="navbar-nav text-light" id="accordionSidebar"
                    onclick="return confirm('Are you sure you want to proceed?');">
                        <li class="nav-item" style="margin-top: 35vh;"><a class="nav-link" href="index.php" style="font-size: 20px;text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 30px;color: #ff9900;">
                                    <path d="M8.51428 20H4.51428C3.40971 20 2.51428 19.1046 2.51428 18V6C2.51428 4.89543 3.40971 4 4.51428 4H8.51428V6H4.51428V18H8.51428V20Z" fill="currentColor"></path>
                                    <path d="M13.8418 17.385L15.262 15.9768L11.3428 12.0242L20.4857 12.0242C21.038 12.0242 21.4857 11.5765 21.4857 11.0242C21.4857 10.4719 21.038 10.0242 20.4857 10.0242L11.3236 10.0242L15.304 6.0774L13.8958 4.6572L7.5049 10.9941L13.8418 17.385Z" fill="currentColor"></path>
                                </svg><span>Logout</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="background: url(&quot;assets/img/bg.png&quot;) center / cover no-repeat;">
                <nav class="navbar navbar-light navbar-expand shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><label class="form-label d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100" style="font-size: 30px;color: rgb(0,0,0);">Payroll Management System</label>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow" style="display: grid;place-items: center;">
                                <div><label class="form-label" style="font-size: 30px;color: rgb(0,0,0);font-weight: bold;">Hello, Admin!</label></div>
                            </li>
                        </ul>
                    </div>
                </nav>

            <!-- Card chuchu -->
            <div class="container py-3 d-flex justify-content-start">

              <div class="col-md">
                <div class="card text-white shadow-custom" style="border-radius: 8px; background-color: #FFCC7F">
                      
                      <div class="card-header" style="background-color: #ff9900">
                        <?php

                        // Get the current date
                        $today = new DateTime();

                        // Format the date
                        $formatted_date = $today->format('Y-m-d');

                        ?>   

                        <strong class="card-title text-dark" style="font-size: 25px">
                            Employee Attendance: <span><?php echo $formatted_date; ?></span>
                        </strong>
                      </div>

                        <div class="card-body card-block">

                      <table class="table table-striped table-light table-success table-hover table-bordered text-center table-sm table-responsive">

                          <tr>
                            <th class="align-middle" scope="col">Name</th>
                            <th class="align-middle" scope="col">Username</th>      
                            <th class="align-middle" scope="col">Action</th>
                          </tr>     

                          <?php

                            $sql = "SELECT * FROM tbl_employee LIMIT 20";
                            $result = mysqli_query($con,$sql);

                            if ($result){
                              while ($row=mysqli_fetch_assoc($result)) {
                              $id  = $row ['id'];                    
                              $name = $row ['Name'];
                              $username = $row ['Username'];
                            
                                echo '
                                <tr>
                                  <td class="align-middle"> ' .$name. ' </td>        
                                  <td class="align-middle"> ' .$username. ' </td>               
                                  <td class="py-3">         
                                    <button class="text-center w-25 btn btn-primary btn-sm">

                                    <a href="RecordAdminView.php?recordviewid='.$id .'"
                                    style="text-decoration: none; color: white;">

                                      View Record

                                    </a>
                                    </button>
                                    
                                    <button class="text-center w-25 btn btn-success btn-sm" onclick="return confirm("Are you sure you want to proceed?");">

                                        <a href="PayrollCalculationTest.php?payrollcalid='.$id .'" 
                                    style="text-decoration: none; color: white;" >

                                        Calculate Payroll

                                        </a>
                                        
                                    </button>
                                  </td>
                                </tr> 
                                ';
                              }
                            }

                          ?>

                      </table>
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

</html>