<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousal Assignment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
.carousel-inner .carousel-item {
  transition: -webkit-transform 2s ease;
  transition: transform 2s ease;
  transition: transform 2s ease, -webkit-transform 2s ease;
}
.carousel .carousel-item {
  height: 500px;
}
img {
  height: 80vh;
}
.footer {
   width: 100%;
   background-color: grey;
   color: white;
   text-align: center;
}
  </style>
</head>

<body>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a class="navbar-brand" href="index.php">Neha Mishra</a>
                </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div id="UID" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                    <li data-target="#UID" data-slide-to="0" class="active"></li>
                    <li data-target="#UID" data-slide-to="1"></li>
                    <li data-target="#UID" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="form.php" > <img src="IMG.jpg"   alt="Image 1"  class="d-block w-100"> </a>
                        </div>
                        <div class="carousel-item">
                           <a href="form.php" > <img src="IMG2.jpg" alt="Image 2" class="d-block w-100" >  </a>
                        </div>
                        <div class="carousel-item">
                        <a href="form.php" > <img src="IMG3.jpeg" alt="Image 3" class="d-block w-100" >  </a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#UID" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#UID"  role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>  
    </div>
 
    <?php
 
    require("query.php");
     $sql ="Select * from `user` "; 
     $result = $con->query($sql);
     ?>
    <div class="table-responsive"> 
            <table class="table table-hover table-striped table-condensed"  >
                <thead> <tr>
                        <th>User-Id</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Name</th>
                     </tr>
                </thead>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                if($i%2==0)
                $classname="evenRow";
                else
                $classname="oddRow";
                ?>
                    <tr class="<?php if(isset($classname)) echo $classname;?>">
                        <td><?php echo $row["sno"]; ?></td>
                        <td><?php echo $row["user_email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                    </tr>
                <?php
                $i++;
                }
                ?>
            </table>
    </div>
    <div class="footer" >
        <p>Developed by Neha Mishra</p> 
    </div>

</body>
</html>