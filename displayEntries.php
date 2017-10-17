<?php
  $file = fopen("php/entries.txt","r");
  $txt = fread($file,filesize("php/entries.txt"));
  fclose($file);

  $file = fopen("php/inducted.txt","r");
  $txtover = fread($file,filesize("php/inducted.txt"));
  fclose($file);

  $array = explode(PHP_EOL,$txt);
  $arrayover = explode(PHP_EOL,$txtover);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quiz | Results</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="img/cropped-EMR-Club-20150921_223636-32x32.jpg" sizes="32x32">




</head>

<body background="img/background1.jpg">
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
            <li class="active"><a href="#">Admin (final year only)</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container" >
    <br><br><br><br>
    <form id="myForm" action="indEntry.php" method="post">
    <input id="phpname" type="hidden" name="Name" value="None">
    <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
              Score card
          </div>
          <!-- .panel-heading -->
          <div class="panel-body">
              <div class="panel-group" id="accordion">

                <div id="content"></div>

              </div>
          </div>
          <!-- .panel-body -->
      </div>
      <!-- /.panel -->
    </div>
  </form>

  <!-- Footer -->
  <footer>
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
                  <p class="text-muted"><xmp><develop> Ag </design></xmp></p>
                  <p class="text-muted">Copyright &copy; EmR club NIT Kurukshetra 2017</p>

              </div>
          </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
  </footer>

  </div>

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="../vendor/metisMenu/metisMenu.min.js"></script>

  <script type="text/javascript">

  function myFunction(ele){
      document.getElementById("phpname").value = ele.id;
      document.getElementById("myForm").submit();
  }

    var entries = <?php echo json_encode($array); ?>;
    var entriesover = <?php echo json_encode($arrayover); ?>;
    var htmlCode = '';

    for(var no in entries){
      if(entries[no] != '' ){
        var entry = JSON.parse(entries[no]);

        htmlCode += '<div class="panel panel-default"><div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'+no+'" aria-expanded="false">\
        '+entry["Name"];
        if(entriesover.indexOf(entry["Name"])>=0)
          htmlCode += '   <p class="fa fa-check"></p>';
          // htmlCode += ' : done';
        htmlCode += '<div class="pull-right"><button id='+entry["Email"]+' type="submit" onclick="myFunction(this)" class="btn btn-primary btn-xs">View Answers</button>\
        </div></div>\
        </div>';

      }
    }
    document.getElementById("content").innerHTML = htmlCode;
  </script>

</body>

</html>
