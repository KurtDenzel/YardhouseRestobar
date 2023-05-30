<?php  

  include ("connection.php");

  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Payroll Calculation</title>
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

    <!-- Paper Size -->
    <style>
        @media print {
            @page {
                size: A5;
                margin: none;
            }
        }
    </style>    
    <!-- Paper Size -->

    <!-- Printing Function -->
    <script>
        function printDiv() {
            var printContents = document.getElementById("divToPrint").innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>    
    <!-- Printing Function -->  

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #121212;border-color: var(--bs-dark);color: #121212;">
            <div class="container-fluid d-flex flex-column p-0">
                <div class="sidebar-brand-icon"><img class="img-fluid" src="assets/img/logo.png" style="width: 300px;margin-top: 5px;"></div>
                <hr class="sidebar-divider my-3">
                <ul class="navbar-nav text-light" id="accordionSidebar-1">
                    <li class="nav-item"><a class="nav-link" href="AdminProfile.php"><i class="fas fa-user" style="font-size: 25px;color: #ff9900;"></i><span style="font-size: 20px;">Profile</span></a></li>
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
                <div class="container-fluid" style="margin-top: 0px;">
                    <h3 class="text-dark mb-4" style="color: rgb(0,0,0);margin-left: 20px;font-size: 30px;font-weight: bold;">Payroll Calculation</h3>
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
                                            <!-- Payroll Calculation -->
                                            <form method="get" action="">

                                                <!-- Time Management -->
                                                <?php

                                                // Get the current date
                                                $today = new DateTime();

                                                // Format the date
                                                $formatted_date = $today->format('Y-m-d');

                                                $Date = "";
                                                $EmployeeName = "";
                                                $OTHours = null;

                                                if (isset($_GET['submit'])) 
                                                {

                                                    // Disabled Fields; but to be appended to the dbs
                                                    $Date = $_GET['Date'];
                                                    $EmployeeName = $_GET['EmployeeName'];
                                                    $TotalDurHours = $_GET['TotalDurHours'];

                                                    $NDHourPHP = $_GET['NDHourPHP'];
                                                    $NDMinutePHP = $_GET['NDMinutePHP'];
                                                    $TotalND = $_GET['TotalND'];

                                                    // Minus both of these
                                                    $RegHours = $_GET['RegHours'];
                                                    $AdjustedRegHours = $_GET['AdjustedRegHours'];
                                                    $OTHours = $_GET['OTHours'];



                                                    // For Receipt
                                                    $OTReceipt = $OTHours * 89.06;
                                                    $TotalDurHours = $TotalDurHours;

                                                        // Parsing Problem
                                                        // $OTHours = $AdjustedRegHours - $RegHours;
                                                    
                                                    $TotalND = $NDHourPHP + $NDMinutePHP;

                                                    // Calculation

                                                }

                                                ?>   
                                                <!-- Get the current date -->

                                                
                                                <!-- Date -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city" style="color: rgb(0,0,0);font-size: 20px;">

                                                        <strong>Date:</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" disabled="" placeholder="mm/ dd / yy"

                                                    value="<?php echo $formatted_date; ?>" 

                                                    name="Date"

                                                    ></div>
                                                </div>
                                                <!-- Date -->

                                                <!-- Employee Name -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4 col-sm-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>Employee Name:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8 col-sm-8">
                                                        <div><input class="form-control" type="text" 

                                                        value="Testing"

                                                        name="EmployeeName" style="font-size: 20px;" disabled=""></div>
                                                    </div>
                                                </div>
                                                <!-- Employee Name -->

                                                <!-- Total Duration Hours -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;">
                                                        <label class="col-form-label form-label" for="city" style="color: rgb(0,0,0);font-size: 20px;">

                                                        <strong>Total Duration Hours</strong>

                                                        <br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;">

                                                        <input class="form-control form-control" type="text" 

                                                        data-toggle="tooltip" data-placement="top" title="8.37 (Hour.Minute)"  

                                                        placeholder="0.00" 

                                                        name="TotalDurHours" maxlength="7" size="7">

                                                    </div>
                                                </div>
                                                <!-- Total Duration Hours -->

                                                <!-- Regular Hours -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>Regular Hours:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8">
                                                        <div><input class="form-control" type="text" 

                                                        name="RegHours" maxlength="7" size="7" 

                                                        placeholder="0.00" 

                                                         style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <!-- Regular Hours -->

                                                <!-- Regular Minutes -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>Regular Minutes:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8">
                                                        <div><input class="form-control" type="text" 

                                                        name="RegMinutes" maxlength="7" size="7" placeholder="0.00" 

                                                         style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <!-- Regular Minutes -->                                                

                                                <!-- Unpaid Breaks -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>Unpaid Breaks:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8">
                                                        <div><input class="form-control" type="text" name="" 

                                                        name="UnpaidBreaks" maxlength="7" size="7" size="7" 

                                                        style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <!-- Unpaid Breaks -->

                                                <!-- Adjusted Regular Hours -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>Adjusted Reg Hours:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8">
                                                        <div><input class="form-control" type="text"

                                                        data-toggle="tooltip" data-placement="top" title="1"  

                                                        placeholder="1" 

                                                        name="AdjustedRegHours" maxlength="7" size="7" 
                                                        style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <!-- Adjusted Regular Hours -->

                                                <!-- OT Hours -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>OT Hours:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8">
                                                        <div><input class="form-control" type="text"

                                                        data-toggle="tooltip" data-placement="top" title="4.75 (Hour.Minute)"  

                                                        placeholder="0.00"

                                                        name="DayPHP" maxlength="7" size="7" value="<?php echo $OTHours; ?>" 

                                                        style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <!-- OT Hours PHP -->

                                                <!-- ND Hour PHP -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>ND Hour PHP:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8">
                                                        <div><input class="form-control" type="text" 

                                                        name="NDHourPHP" maxlength="7" size="7" 

                                                        style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <!-- ND Hour PHP -->

                                                <!-- ND Minutes PHP -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>ND Minutes PHP:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8">
                                                        <div><input class="form-control" type="text" 

                                                        name="NDHourMinute" maxlength="7" size="7" 

                                                        style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <!-- ND Minutes PHP -->                          

                                                <!-- Total ND -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>Total ND:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8">
                                                        <div><input class="form-control" type="text-start" 

                                                        name="Totalnd" maxlength="7" size="7" disabled 

                                                        value="<?php echo $TotalND; ?>" 

                                                        style="font-size: 20px;"></div>
                                                    </div>
                                                </div>
                                                <!-- Total ND -->


                                                <!-- TotalPay -->
                                                <div class="row" style="padding-bottom: 0;height: 45px;margin-top: 10px;margin-bottom: 10px;">
                                                    <div class="col-xxl-4">
                                                        <div style="font-size: 20px;"><label class="form-label" for="username" style="color: rgb(0,0,0);font-size: 20px;"><strong>Total Pay:</strong><br></label></div>
                                                    </div>
                                                    <div class="col-xxl-8">
                                                        <div>

                                                        <input class="form-control" type="text-start" 

                                                        name="TotalPay" maxlength="7" size="7" 

                                                        value="<?php 

                                                            $REG = $RegHours  * 71.25;
                                                            $OT = $OTHours * 89.06;
                                                            $ND = $TotalND * 7.13;

                                                            echo $TotalPay = $REG + $OT + $ND

                                                        ?>"                      

                                                        style="font-size: 20px;" disabled=""></div>
                                                    </div>
                                                </div>
                                                <!-- TotalPay -->                                                

                                                <!-- Form Submission -->
                                                <div class="row">
                                                    <!-- Submission Button -->
                                                    <div class="col-xl-4 col-xxl-3 offset-xl-4 offset-xxl-6 col-sm-12" style="text-align: center;margin-right: 0px;">

                                                        <button class="btn btn-success btn-sm" 
                                                        type="submit" name="submit" value="submit" style="font-size: 20px;width: 200px;background: #00b027;height: 40px;color: rgb(255,255,255);font-weight: bold;margin-right: 30px;">
                                                        Calculate

                                                    </button>

                                                    </div>
                                                    <!-- Submission Button -->

                                                    <!-- Reset All Fields -->
                                                    <div class="col-xl-4 col-xxl-3 offset-xxl-0 col-sm-12" style="text-align: center;margin-right: 0px;">

                                                        <button class="btn btn-dark btn-sm" type="button" style="font-size: 20px;width: 180px;background: #6D6D6D;height: 40px;color: rgb(255,255,255);font-weight: bold;">

                                                        Reset

                                                    </button>

                                                    </div>
                                                    <!-- Reset All Fields -->
                                                </div>
                                                <!-- Form Submission -->
                                            </form>
                                            <!-- Payroll Calculation -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 offset-xxl-0" style="border-radius: 5px;">

                            <!-- Receipt to Print -->
                            <div id="divToPrint">
                            <div class="card shadow-lg mb-3">
                                <div class="card-body text-center shadow" style="padding: 16px;">
                                    <div>
                                        <img src="assets/img/logo.png" style="width: 180px;">
                                        
                                        <div>
                                            <h1 style="color: rgb(0,0,0);font-size: 15px;height: 50px;"><br>Arbortowne Plaza, 2 Karuhatan Rd, Valenzuela, 1441 Metro Manila&nbsp;<br> Payroll Management System by Varchar Group<br><br></h1>
                                        </div>

                                        <div>
                                            <h1 style="color: rgb(0,0,0);font-size: 40px;height: 40px;font-weight: bold;margin-bottom: 20px;margin-top: 40px;">PAY SLIP</h1>
                                        </div>

                                        <div>
                                            <!-- Date -->
                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;">
                                                    <label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">
                                                        Date: <span><?php echo $formatted_date; ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Date -->

                                            <!-- Employee Name -->
                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;"><label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">
                                                Employee Name: <span>Testing</span></label></div>
                                            </div>
                                            <!-- Employee Name -->

                                            <!-- Night Differential -->
                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;"><label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">
                                                    Night Differential:
                                                    <span><?php echo $TotalND; ?></span>
                                                    </label></div>
                                            </div>
                                            <!-- Night Differential -->

                                            <!-- OT -->
                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;"><label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">OT:
                                                    <span><?php echo $OTHours * 89.06; ?></span></label></div>
                                            </div>
                                            <!-- OT -->

                                            <!-- Calculated Hours -->
                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;"><label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">
                                                    Calculated Hours: 
                                                    <span><?php echo $TotalDurHours; ?></span>
                                                    </label></div>
                                            </div>
                                            <!-- Calculated Hours -->

                                            <!-- Total Pay -->
                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;"><label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);font-weight: bold;">
                                                    
                                                    Total Pay:
                                                    <span><?php 

                                                            $REG = $RegHours  * 71.25;
                                                            $OT = $OTHours * 89.06;
                                                            $ND = $TotalND * 7.13;

                                                            echo $TotalPay = $REG + $OT + $ND;

                                                        ?></span>

                                                    </label></div>
                                            </div>
                                            <!-- Total Pay -->

                                        </div>
                                        <div class="mb-4" style="text-align: center;margin-top: 20px;"></div>
                                    </div>
                                </div>
                            </div>
                            </div>


                            <div class="row">
                                <div class="col" style="text-align: center;margin-bottom: 40px;">

                                    <button class="btn btn-warning btn-sm" type="button"

                                    onclick="printDiv()"

                                    style="font-size: 20px;width: 200px;background: #ff0400;height: 40px;color: rgb(255,255,255);font-weight: bold;margin-bottom: 10px;">

                                        Print
                                    </button>

                                </div>
                                <div class="col-xxl-12 offset-xxl-0">
                                    <div class="card shadow-lg mb-3">
                                        <div class="card-body">
                                            <div class="mb-4" style="text-align: center;margin-top: 20px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <h3 class="text-dark text-center mb-4" style="color: rgb(0,0,0);margin-left: 20px;font-size: 30px;font-weight: bold;">Save
                                                        </h3>

                                                        <button class="btn btn-warning btn-sm" type="button" style="font-size: 20px;width: 200px;background: #00b027;height: 40px;color: rgb(255,255,255);font-weight: bold;margin-bottom: 10px;">

                                                            Paid

                                                        </button>
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
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>