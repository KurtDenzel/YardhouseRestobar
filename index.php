<?php  

    include ("connection.php");
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Yardhouses</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))        
    </script>

    <link rel="icon" type="text/css" href="assets/img/logo.png">       
</head>

<body class="bg-gradient-primary" style="background: url(&quot;assets/img/bg.png&quot;) center / cover no-repeat;width: 100%;height: 100vh;">
    <div class="container">
        <div class="row justify-content-center" style="height: 750px;">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0" style="margin-top: 90px;border-radius: 10px;">
                    <div class="card-body p-0" style="height: 600px;">
                        <div class="row" style="height: 600px;">
                            <div class="col" style="background: url(&quot;assets/img/BG-Account%20Type.png&quot;) center / cover no-repeat;text-align: center;"><img class="img-fluid" src="assets/img/logo.png" style="width: 450px;margin-top: 35px;">
                                <h1 style="color: rgb(255,255,255);font-weight: bold;font-size: 30px;">Login as:</h1>
                                <div><a class="btn btn-danger" role="button" href="AdminLogin.php" style="width: 250px;height: 40px;margin: 10px;background: rgb(195,0,2);">Admin</a><a class="btn btn-outline-warning" role="button" style="width: 250px;height: 40px;margin: 10px;color: rgb(255,255,255);background: rgba(255,183,1,0);" href="EmployeeLogin.php">Employee</a></div>
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