<?php
  if (isset($_POST['form-submit'])) {
    $cst_name = $_POST['cst_name'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $service = $_POST['service'];
    $product = $_POST['product'];
    $problem = $_POST['problem'];
    $dob = $_POST['dob'];

      $to = "hexapor2019@gmail.com";
      $subject = "Sale History";
      $message = $cst_name. "\r\n" .$mob. "\r\n" .$email. "\r\n" .$address. "\r\n" .$service. "\r\n" .$product. "\r\n" .$product. "\r\n" .$problem. "\r\n" .$dob;
      $header = "From:hexapor2019@gmail.com" . "\r\n" . "CC:";
      if (mail($to,$subject,$message,$header)) {
        header("location: mail-form.php?success_msg=Your form has been submited...!!");
      }
  }
    if(isset($_GET['success_msg'])){ 
      $success_msg = $_GET['success_msg'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .mail-form{
      margin-top: 15px;
      margin-bottom: 25px;
      padding: 20px 30px 20px 30px;
      background: #0f6909;
    }
    .mail-form h2{
      color: #fff;
    }
    .mail-form label{
      margin-top: 18px;
      color: #fff;
      font-weight: bold;
    }
    .mail-form input{
      margin-top: 15px;
    }
    .mail-form select{
      margin-top: 15px;
    }
    .mail-form button{
      margin-top: 15px;
    }
  </style>
</head>
<body>
<div style="background: #eaffe9;">
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 offset-lg-2 offset-mg-2">
      <form method="post" class="mail-form" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
          <h2>Mahalaxmi Computer Service</h2>
          <hr style="background: #fff;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <?php
                  if(isset($success_msg)){
                ?>
                <p style="color: #fff; margin-top: -15px; margin-bottom: -5px;"><?php echo $success_msg;?></p>
                <?php
                  }
                ?>      
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <label for="">Customer Name :</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <input type="text" class="form-control" id="" placeholder="" name="cst_name">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <label for="">Mobile :</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <input type="text" class="form-control" id="" placeholder="" name="mob">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <label for="">EmailID :</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <input type="email" class="form-control" id="" placeholder="" name="email">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <label for="">Address :</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <input type="text" class="form-control" id="" placeholder="" name="address">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <label for="">Service :</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <select type="text" class="form-control" id="" placeholder="" name="service">
            <option value="">Select Service</option>
            <option value="Warrenty">Warrenty</option>
            <option value="Non Warrenty">Non Warrenty</option>
          </select>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <label for="">Product Type :</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <select type="text" class="form-control" id="" placeholder="" name="product">
            <option value="">Select Product Type</option>
            <option value="Desktop">Desktop</option>
            <option value="Laptop">Laptop</option>
            <option value="Printer">Printer</option>
            <option value="UPS">UPS</option>
            <option value="Mother Board">Mother Board</option>
            <option value="Scanner">Scanner</option>
          </select>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <label for="">Problem :</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <input type="text" class="form-control" id="" placeholder="" name="problem">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <label for="">DOB No. :</label>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <input type="text" class="form-control" id="" placeholder="" name="dob">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 text-right">
          <button type="submit" name="form-submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>
