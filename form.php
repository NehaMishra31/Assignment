<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Assignment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
        form {
            width: 80%;
            background-color: #f2f2f2;
        }
        legend {
            width: 70px;
            padding: 2px;
            margin-left: calc(50% - 35px - 8px);
        }
        * {
  box-sizing: border-box;
}
    </style>
</head>

<body>
<div class="container">

    <form  action="query.php"  method="POST" class="was-validated" >
        <fieldset class="border p-5 ">
            <legend class="w-auto "> Enter Your Details</legend>
                <div class="form-group">
                    <label for="user_email"> Enter Your Email Address</label><br>
                    <input type="text" class="form-control"  name="user_email"  placeholder=" Email Address" required/>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    <br>
                </div>
                <div class="form-group">
                    <label for="phone"> Enter your Phone Number</label><br>
                    <input type="tel"  class="form-control" name="phone" placeholder="Phone Number" required />
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="name"> Enter Your Name</label><br>
                    <input type="text"  class="form-control" name="name" placeholder="Full Name" required /><br>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                    <button type="submit" name="save"  class="btn btn-primary btn-lg btn-block" >Save</button>
        </fieldset>
    </form>
   
</div>
</body>
</html> 