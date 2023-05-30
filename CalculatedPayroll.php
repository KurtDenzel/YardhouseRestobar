<?php

    session_start();
  include "connection.php";    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Employee - Payroll</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))        
    </script>

    <link rel="icon" type="text/css" href="assets/img/logo.png">    

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

</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #121212;border-color: var(--bs-dark);color: #121212;">
            <div class="container-fluid d-flex flex-column p-0">
                <div class="sidebar-brand-icon"><img class="img-fluid" src="assets/img/logo.png" style="width: 300px;margin-top: 5px;"></div>
                <hr class="sidebar-divider my-3">
                <ul class="navbar-nav text-light" id="accordionSidebar-1">
                    <li class="nav-item"><a class="nav-link" href="EmployeeProfile.php"><i class="fas fa-user" style="font-size: 25px;color: #ff9900;"></i><span style="font-size: 20px;">Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="CalculatedPayroll.php"><i class="fas fa-table" style="font-size: 25px;color: #ff9900;"></i><span style="font-size: 20px;">Payroll</span></a></li>
                    <li class="nav-item"></li>
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
                                <div><label class="form-label" style="font-size: 30px;color: rgb(0,0,0);font-weight: bold;">Hello, Employee!</label></div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" style="margin-top: 0px;">
                    <h3 class="text-dark mb-4" style="color: rgb(0,0,0);margin-left: 20px;font-size: 30px;font-weight: bold;">Calculated Payroll</h3>
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
                            <!-- Retrieved Data from tbl_payroll -->
                            <div class="row">
                                <div class="col" style="padding-bottom: 20px;">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <form>
                                                <?php

                                                // Get the current date
                                                $today = new DateTime();

                                                // Format the date
                                                $formatted_date = $today->format('Y-m-d');      

                                                ?>

                                                <!-- Date -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Date:</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;">

                                                    <input class="form-control form-control" type="text" name="txtemployeename" 

                                                    value="<?php echo $formatted_date; ?>"                    

                                                    disabled="" placeholder="mm/ dd / yy">

                                                    </div>
                                                </div>
                                                <!-- Date -->

                                                <!-- Employee Name -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Employee Name</strong></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="employeename-1" name="txtemployeename" disabled="" placeholder="<?php echo $_SESSION['Username']; ?>">

                                                    </div>
                                                </div>
                                                <!-- Employee Name -->

                                                <!-- Total Duration Hours -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Total Duration Hours</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="totaldurationhrs" name="txttotaldurationhrs" disabled=""></div>
                                                </div>
                                                <!-- Total Duration Hours -->

                                                <!-- Regular Hours -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Regular Hours</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="regularhours" name="txtregularhrs" disabled=""></div>
                                                </div>
                                                <!-- Regular Hours -->

                                                <!-- Unpaid Breaks -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Unpaid Breaks</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="unpaidbreaks" name="txtunpaidbreaks" disabled=""></div>
                                                </div>
                                                <!-- Unpaid Breaks -->

                                                <!-- Adjusted Reg Hours -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Adjusted Reg Hours</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="adjreghrs-1" name="txtadjreghrs" disabled=""></div>
                                                </div>
                                                <!-- Adjusted Reg Hours -->

                                                <!-- Night Differential Hours -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Night Differential Hours</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="nightdifhrs" name="txttnightdifhrs" disabled=""></div>
                                                </div>
                                                <!-- Night Differential Hours -->

                                                <!-- Day PHP -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Day Php</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="dayphp" name="txtdayphp" disabled=""></div>
                                                </div>
                                                <!-- Day PHP -->

                                                <!-- Hour PHP -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Hour Php</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="hourphp" name="txthourphp" disabled=""></div>
                                                </div>
                                                <!-- Hour PHP -->

                                                <!-- OT Hours -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>OT Hours</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="othrs" name="txtothrs" disabled=""></div>
                                                </div>
                                                <!-- OT Hours -->

                                                <!-- Regular Rate -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Regular Rate</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="regrate" name="txtregrate" disabled=""></div>
                                                </div>
                                                <!-- Regular Rate -->

                                                <!-- Total Pay -->
                                                <div class="row">
                                                    <div class="col-xxl-4" style="margin-bottom: 10px;"><label class="col-form-label form-label" for="city"><strong>Total Pay</strong><br></label></div>
                                                    <div class="col-xxl-8" style="margin-bottom: 10px;"><input class="form-control form-control" type="text" id="totalpay" name="txttotalpay" disabled=""></div>
                                                </div>
                                                <!-- Total Pay -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Retrieved Data from tbl_payroll -->
                        
                        
                        <div class="col-lg-4 offset-xxl-0 border-0" 
                            style="border-radius: 5px;" >

                            <!-- Receipt to print -->
                            <div id="divToPrint">
                            <div class="card shadow-lg mb-3">
                                <div class="card-body text-center shadow" style="padding: 16px;margin-top: 0px;">
                                    <div><img src="assets/img/logo.png" style="width: 180px;">
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
                                                    <label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">Date:</label></div>
                                            </div>
                                            <!-- Date -->

                                            <!-- Employee Name -->
                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;"><label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">Employee Name:</label></div>
                                            </div>
                                            <!-- Employee Name -->

                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;"><label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">Night Differential:</label></div>
                                            </div>

                                            <!-- Overtime -->
                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;">

                                                    <label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">OT:</label></div>
                                            </div>
                                            <!-- Overtime -->
                                            
                                            <!-- Calculated Hours -->
                                            <div class="row" style="height: 40px;">
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px;padding-right: 0px;padding-left: 0px;text-align: left;">

                                                    <label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);">Calculated Hours:</label></div>

                                            </div>
                                            <!-- Caculated Hours -->

                                            <!-- Total Pay -->
                                            <div class="row" style="height: 40px;">
                                                
                                                <div class="col-xxl-6 col-sm-6" style="height: 40px; padding-right: 0px;padding-left: 0px;text-align: left;">

                                                    <label class="col-form-label" style="font-size: 20px;color: rgb(0,0,0);font-weight: bold;">Total Pay:</label>

                                                </div>
                                            </div>
                                            <!-- Total Pay -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col" style="text-align: center;margin-bottom: 40px;">
                                    <button class="btn btn-warning btn-sm" type="button" 

                                    onclick="printDiv()"

                                    style="font-size: 20px;width: 200px;background: #ff0400;height: 40px;color: rgb(255,255,255);margin-bottom: 10px;">

                                        Print

                                    </button>

                                    <a class="btn btn-warning btn-sm" role="button" style="font-size: 20px;width: 200px;background: #0019ff;height: 40px;color: rgb(255,255,255);margin-bottom: 10px;" href="RecordEmployeeView.php">View Record</a>

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