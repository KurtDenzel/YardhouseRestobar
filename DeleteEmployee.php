<?php 
  include 'connection.php';

  if (isset($_GET['deleteid'])) {
    $id= $_GET['deleteid'];

    $sql = "DELETE FROM tbl_employee WHERE id=$id";
    $result = mysqli_query ($con, $sql);

    if ($result) {
        echo 
          "<script type='text/javascript'>
            alert('Employee Record has been Deleted...')

            window.location.href='Staff.php';
            ;
          </script>";     
    }else {
      die(mysqli_error($con));
    }
  }
?>