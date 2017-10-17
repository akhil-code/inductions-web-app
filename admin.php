<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(strcmp($username,"admin")==0 && strcmp($password,"emrclubnitkkr")==0){
      header("Location: displayEntries.php");
      exit();
    }
    else{
      echo '<script type="text/javascript">alert("wrong credentials");</script>';
    }

  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | EmR</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="img/cropped-EMR-Club-20150921_223636-32x32.jpg" sizes="32x32">
</head>

<body background="img/background1.jpg">
  <header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <img align="left" style="margin-top:5px;margin-bottom:5px;margin-right:10px;" src="img/emrLogo.png" alt="emr logo" height="42" width="42">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button>
          <a class="navbar-brand" href="index.html" style="color:white;margin-right:30px;">EmR Club</a>

        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="form.html">Test</a></li>
              <li><a href="feedBack.html">Feedback</a></li>
              <li class="active"><a href="admin.php">Admin (final year only)</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" >
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <br><br><br><br>
              <div class="login-panel panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Please Sign In (only for final years)</h3>
                  </div>
                  <div class="panel-body">
                      <form role="form" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="username" name="username" autofocus="" type="text">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="password" value="" type="password">
                              </div>

                              <!-- Change this to a button or input when using this as a form -->
                              <button type="submit" class="btn btn-lg btn-success btn-block">Log in</button>

                          </fieldset>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </header>


    <!-- Footer -->
    <footer>
      <br/><br/>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>EmR Club</strong>
                    </h4>
                    <p>NIT Kurukshetra</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">emrclub.nitkkr@gmail.com</a>
                        </li>
                    </ul>
                    <hr class="small">
                    <!-- <p class="text-muted">developed by Ag</p> -->
                    <p class="text-muted"><xmp><develop> Ag </design></xmp></p>
                    <p class="text-muted">Copyright &copy; EmR club NIT Kurukshetra 2017</p>

                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <!-- <script src="../dist/js/sb-admin-2.js"></script> -->

  </div>
</body>

</html>
