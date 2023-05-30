<?php  

  session_start();
  include "connection.php";

  if (!isset($_SESSION['Username'])) {
    
    echo 
      "<script type='text/javascript'>
        alert('Session Error!...')

        window.location.href='../login.php';
        ;
      </script>";   

  }  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Tooltip -->
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))        
    </script>
    <!-- Tooltip -->

    <!-- Going back validation -->
    <!-- <script>
        window.onbeforeunload = function() {
            return "Are you sure you want to leave this page?";
        };
    </script>     -->
    <!-- Going back validation -->    

    <link rel="icon" type="text/css" href="assets/img/logo.png">    
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #121212;border-color: var(--bs-dark);color: #121212;">
            <div class="container-fluid d-flex flex-column p-0">
                <div class="sidebar-brand-icon"><img class="img-fluid" src="assets/img/logo.png" style="width: 300px;margin-top: 5px;"></div>
                <hr class="sidebar-divider my-3">
                <ul class="navbar-nav text-light" id="accordionSidebar-1">
                    <li class="nav-item"><a class="nav-link active" href="AdminProfile.php"><i class="fas fa-user" style="font-size: 25px;color: #ff9900;"></i><span style="font-size: 20px;">Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="EmployeeAttendance.php"><i class="fas fa-table" style="font-size: 25px;color: #ff9900;"></i><span style="font-size: 20px;">Payroll</span></a></li>
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
                    <h3 class="text-dark mb-4" style="color: rgb(0,0,0);margin-left: 20px;font-size: 30px;font-weight: bold;">Admin/ Business Details</h3>
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
                                <div class="col" style="padding-bottom: 20px;">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Business Name:</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" disabled="" placeholder="The Yardhouse Restobar"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Owner's Name:</strong></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" 
                                                        placeholder="Redacted* Escanilla" disabled="" ></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Email Address:</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" placeholder="Yardhouse23@gmail.com" disabled=""></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Contact Number:</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="unpaidbreaks" placeholder="0991 735 6453"disabled=""></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Business Address:</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" placeholder="104 - 106 Arbortowne Plaza. Karuhatan Road, Gen T de Leon, Valenzuela" disabled=""></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Date Started Business</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="totalpay" disabled="" placeholder="01 / 06 / 2023"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <h3 class="text-dark mb-4" style="color: rgb(0,0,0);font-weight: bold;margin-left: 20px;font-size: 30px;">Login Information</h3>
                            <div class="row">
                                <div class="col" style="padding-bottom: 20px;">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Username:</strong><br>  </label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" placeholder="<?php echo $_SESSION['Username']; ?>" type="text"  disabled=""> 
                                                     </div>
                                                </div>
                                                <div class="row">
                                                    <!-- Password -->
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Password:</strong></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" placeholder="************" disabled=""></div>
                                                    <!-- Password -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-xxl-12 offset-xxl-0" style="margin-top: 59px;">
                                    <div class="card shadow-lg mb-3">
                                        <div class="card-body">

                                            <!-- Edit Admin -->
                                            <div class="mb-4" style="text-align: center;margin-top: 20px;">

                                            <?php

                                                $sql = "SELECT * FROM tbl_admin limit 20";
                                                $result = mysqli_query($con,$sql);

                                                if ($result){
                                                  while ($row=mysqli_fetch_assoc($result)) {
                                                  $AdminID  = $row ['id'];                    
                                                  $AdminUsername = $row ['username'];
                                                  $AdminPassword = $row ['password'];

                                                    echo '
                                                    <tr>               
                                                      <td class="px-5">         
                                                        <button class="text-center btn btn-warning btn-sm w-auto" style="background: #ff9900; 
                                                                font-size: 20px;">

                                                        <a class="w-100 px-5 mr-5" role="button" href="EditAdmin.php?updateid='.$AdminID .'"
                                                        style="text-decoration: none; color: white; font-weight: bold; width: 200px; height: 40px;">

                                                            Edit

                                                        </a>
                                                        </button>                                                
                                                      </td>
                                                    </tr> 
                                                    ';
                                                  }
                                                }

                                              ?>

                                              </div>

                                            <!-- Edit Admin -->

                                        </div>



                                    </div>
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