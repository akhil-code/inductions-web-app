<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $reqName = $_POST["Name"];

  $file = fopen("php/entries.txt","r");
  $txt = fread($file,filesize("php/entries.txt"));
  fclose($file);

  $array = explode(PHP_EOL,$txt);
  $ans = [1,2,2,4,3,4,2,1,2,1,3,1,1,4,4,2,1,1,1,2];
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

    <title>Interview | EmR</title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
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
            <li class="active"><a href="admin.php">Admin (final year only)</a></li>


        </ul>
      </div>
    </div>
  </nav>

  <div class="container" >
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
              <br><br>
              <h1 id="Name" class="page-header">Name</h1>
            </div>
        </div>

        <div class="row" >
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      Answers
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <form role="form" action="php/submitCandidate.php" method="post">
                                  <input id="phpname" type="hidden" name="Name" value="None">

                                  <div class="form-group">
                                    <!-- name -->
                                    <label>Branch</label>
                                    <p id="Branch">Branch</p>
                                  </div>
                                  <br>

                                  <div class="form-group">
                                    <!-- name -->
                                    <label>Year</label>
                                    <p id="Year">Year</p>
                                  </div>
                                  <br>

                                  <div class="form-group">
                                      <label>github link</label>
                                      <p id="Github">Branch</p>
                                  </div>
                                  <br>

                                  <div class="form-group">
                                      <label>Attended recent workshop of EmR (Proteus Simulation) : </label>
                                      <p id="RecentWorkshop">None</p>
                                  </div>
                                  <br>


                                  <div class="form-group">
                                      <label>Already member of EmR : </label>
                                      <p id="Member">None</p>
                                  </div>
                                  <br>

                                  <div class="form-group">
                                      <label>Projects</label>
                                      <p id="Projects">None</p>
                                  </div>
                                  <br>

                                  <div class="form-group">
                                      <label>Participation</label>
                                      <p id="Participation">None</p>
                                  </div>
                                  <br>

                                  <hr>
                                  <h2>Score Board</h2>
                                  <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>Section</th>
                                        <th>Score</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Aptitude (10 marks)</td>
                                        <td id="aptitudeScore">0</td>
                                      </tr>
                                      <tr>
                                        <td>Embedded systems (10 marks)</td>
                                        <td id="embeddedScore">0</td>
                                      </tr>
                                      <tr>
                                        <td>Total (Aptitude + Embedded) (20 marks)</td>
                                        <td id="totalScore">0</td>
                                      </tr>
                                    </tbody>
                                  </table>

                                  <hr><h2>Aptitude</h2><br/>


<!-- q1 -->
<div class="form-group">
    <label>1. Find the odd one out: 396, 462, 572, 427, 671, 264</label>
    <div class="radio">
        <label>1)427
        </label>
    </div>
    <div class="radio">
        <label>2)572
        </label>
    </div>
    <div class="radio">
        <label>3)671
        </label>
    </div>
    <div class="radio">
        <label>4)264
        </label>
    </div>
</div>
<div id="1res"></div>
<br>


<!-- q2 -->
<div class="form-group">
    <label>2. A train passes a station platform in 36 seconds and a man standing on the platform in 20 seconds. If the speed of the train is 54 km/hr, what is the length of the platform?</label>
    <div class="radio">
        <label>1)120m
        </label>
    </div>
    <div class="radio">
        <label>2)240m
        </label>
    </div>
    <div class="radio">
        <label>3)300m
        </label>
    </div>
    <div class="radio">
        <label>4)None
        </label>
    </div>
</div>
<div id="2res"></div>
<br>

<!-- q3 -->
<div class="form-group">
    <label>3.
A, B and C can do a piece of work in 20, 30 and 60 days respectively. In how many days can A do the work if he is assisted by B and C on every third day?
</label>
    <div class="radio">
        <label>1)12 days
        </label>
    </div>
    <div class="radio">
        <label>2)15 days
        </label>
    </div>
    <div class="radio">
        <label>3)16 days
        </label>
    </div>
    <div class="radio">
        <label>4)20 days
        </label>
    </div>
</div>
<div id="3res"></div>
<br>


<!-- q4-->
<div class="form-group">
    <label>4. candle :: hut : lamp :: cottage : floodlight : ?
</label>
    <div class="radio">
        <label>1)tent
        </label>
    </div>
    <div class="radio">
        <label>2)city
        </label>
    </div>
    <div class="radio">
        <label>3)dwelling
        </label>
    </div>
    <div class="radio">
        <label>4)house
        </label>
    </div>
</div>
<div id="4res"></div>
<br>

<!-- q5-->
<div class="form-group">
    <label>5. Four friends in the sixth grade were sharing a pizza. They decided that the oldest friend would get the extra piece. Randy is two months older than Greg, who is three months younger than Ned. Kent is one month older than Greg. Who should get the extra piece of pizza?
</label>
    <div class="radio">
        <label>1)RANDY
        </label>
    </div>
    <div class="radio">
        <label>2)GREG
        </label>
    </div>
    <div class="radio">
        <label>3)NED
        </label>
    </div>
    <div class="radio">
        <label>4)KENT
        </label>
    </div>
</div>
<div id="5res"></div>
<br>


<!-- q6-->
<div class="form-group">
    <label>6. Select a figure from the given four alternatives which fits exactly into Figure-X to form a complete square.
</label>
 <img src="img/6ques.png" class="img-rounded" alt="6img">
    <div class="radio">
        <label>1)1
        </label>
    </div>
    <div class="radio">
        <label>2)2
        </label>
    </div>
    <div class="radio">
        <label>3)3
        </label>
    </div>
    <div class="radio">
        <label>4)4
        </label>
    </div>
</div>
<div id="6res"></div>
<br>

<!-- q7-->
<div class="form-group">
    <label>7. A two-digit number is such that the product of the digits is 8. When 18 is added to the number, then the digits are reversed. The number is:
</label>
    <div class="radio">
        <label>1)18
        </label>
    </div>
    <div class="radio">
        <label>2)24
        </label>
    </div>
    <div class="radio">
        <label>3)42
        </label>
    </div>
    <div class="radio">
        <label>4)81
        </label>
    </div>
</div>
<div id="7res"></div>
<br>

<!-- q8-->
<div class="form-group">
    <label>8. In the first 10 overs of a cricket game, the run rate was only 3.2. What should be the run rate in the remaining 40 overs to reach the target of 282 runs?
</label>
    <div class="radio">
        <label>1)6.25
        </label>
    </div>
    <div class="radio">
        <label>2)6.5
        </label>
    </div>
    <div class="radio">
        <label>3)6.75
        </label>
    </div>
    <div class="radio">
        <label>4)7
        </label>
    </div>
</div>
<div id="8res"></div>
<br>

<!-- q9-->
<div class="form-group">
    <label>9. A vendor bought toffees at 6 for a rupee. How many for a rupee must he sell to gain 20%
</label>
    <div class="radio">
        <label>1)3
        </label>
    </div>
    <div class="radio">
        <label>2)5
        </label>
    </div>
    <div class="radio">
        <label>3)6
        </label>
    </div>
    <div class="radio">
        <label>4)4
        </label>
    </div>
</div>
<div id="9res"></div>
<br>

<!-- q10-->
<div class="form-group">
    <label>10. If log7 = a, then log(1/70) is equal to?
</label>
    <div class="radio">
        <label>1)-(1+a)
        </label>
    </div>
    <div class="radio">
        <label>2)(1 + a)-1
        </label>
    </div>
    <div class="radio">
        <label>3)a/10
        </label>
    </div>
    <div class="radio">
        <label>4)1/(10a)
        </label>
    </div>
</div>
<div id="10res"></div>
<br>

<hr><h2>Embedded Systems</h2><br/>

<!-- q11-->
<div class="form-group">
    <label>11. What is the current through R1 and R2 in Diagram ?
    <img src="img/11ques.png" class="img-rounded" alt="6img">
</label>
    <div class="radio">
        <label>1) I1 = 1A and I2 = 25A
        </label>
    </div>
    <div class="radio">
        <label>2) I1 = 0.1A and I2 = 0.1667A
        </label>
    </div>
    <div class="radio">
        <label>3) I1 = 1A and I2 = 1.667A (ans)
        </label>
    </div>
    <div class="radio">
        <label>4) I1 = 10A and I2 = 16.67A
        </label>
    </div>
</div>
<div id="11res"></div>
<br>

<!-- q12-->
<div class="form-group">
    <label>12. If you put an infinite number of resistors in parallel, what would the total resistance be?
</label>
    <div class="radio">
        <label>1) R total would approach Zero as The No. of Resistors In parallel Approaches Infinity. (ans)
        </label>
    </div>
    <div class="radio">
        <label>2) R total would approach 1 as The No. of Resistors In parallel Approaches Infinity.
        </label>
    </div>
    <div class="radio">
        <label>3) It is not possible to connect that Number of Resistors in parallel.
        </label>
    </div>
    <div class="radio">
        <label>4) None of the above.
        </label>
    </div>
</div>
<div id="12res"></div>
<br>

<!-- q13-->
<div class="form-group">
    <label>13. Why do we say the "voltage across" or "the voltage with respect to?" Why can't we just say
voltage?
</label>
    <div class="radio">
        <label>1)Voltage is a measure of Electric Potential difference between two electrical points.
        </label>
    </div>
    <div class="radio">
        <label>2)It's an Electrical Cliche'.
        </label>
    </div>
    <div class="radio">
        <label>3)The other point could be Negative or positive.
        </label>
    </div>
    <div class="radio">
        <label>4)None of the above.
        </label>
    </div>
</div>
<div id="13res"></div>
<br>

<!-- q14-->
<div class="form-group">
    <label>14. With 21 V applied, if R 1 = 5 ohms, R 2 = 35 ohms, and R 3 = 14 ohms, what is the current of R 2 if
R 1 is series connected with parallel circuit R 2 and R 3 ?
</label>

    <div class="radio">
        <label>1) 200mA
        </label>
    </div>
    <div class="radio">
        <label>2) 800mA
        </label>
    </div>
    <div class="radio">
        <label>3) 600mA
        </label>
    </div>
    <div class="radio">
        <label>4) 400mA
        </label>
    </div>
</div>
<div id="14res"></div>
<br>


<!-- q15-->
<div class="form-group">
    <label>15. What is the total resistance?
    <img src="img/15ques.png" class="img-rounded" alt="6img">
</label>
    <div class="radio">
        <label>1) 800 ohm
        </label>
    </div>
    <div class="radio">
        <label>2) 1.2 k ohm
        </label>
    </div>
    <div class="radio">
        <label>3)1.6 k ohm
        </label>
    </div>
    <div class="radio">
        <label>4)1.8 k ohm
        </label>
    </div>
</div>
<div id="15res"></div>
<br>

<!-- q16-->
<div class="form-group">
    <label>16. Decimal number 10 is equal to binary number
</label>
    <div class="radio">
        <label>1)1110
        </label>
    </div>
    <div class="radio">
        <label>2)1010
        </label>
    </div>
    <div class="radio">
        <label>3)1001
        </label>
    </div>
    <div class="radio">
        <label>4)1000
        </label>
    </div>
</div>
<div id="16res"></div>
<br>


<!-- q17-->
<div class="form-group">
    <label>17. The circuit of the given figure realizes the function<br/><br/>
    <img src="img/17ques.png" class="img-rounded" alt="6img">
</label>
    <div class="radio">1) Y = (not A + not B) C + not (DE)
        </label>
    </div>
    <div class="radio">
        <label>2) not A +not B +not C +not D +not E
        </label>
    </div>
    <div class="radio">
        <label>3) AAB + C +DE
        </label>
    </div>
    <div class="radio">
        <label>4) AB + C(D + E)
        </label>
    </div>
</div>
<div id="17res"></div>
<br>

<!-- q18-->
<div class="form-group">
    <label>18. Four inputs A, B, C, D are fed to a NOR gate. The output of NOR gate is fed to an inverter. The
output of inverter is
</label>
    <div class="radio">
        <label>1)A + B + C + D
        </label>
    </div>
    <div class="radio">
        <label>2)not (A + B + C + D)
        </label>
    </div>
    <div class="radio">
        <label>3)ABCD
        </label>
    </div>
    <div class="radio">
        <label>4)not(ABCD)
        </label>
    </div>
</div>
<div id="18res"></div>
<br>


<!-- q19-->
<div class="form-group">
    <label>19. Which of the following is used as command to write 0b00101111 to port A?
</label>
    <div class="radio">
        <label>1)PORTA = 0x2F;
        </label>
    </div>
    <div class="radio">
        <label>2)PINA = 0b00101111;
        </label>
    </div>
    <div class="radio">
        <label>3)PORTA = 0x2E;
        </label>
    </div>
    <div class="radio">
        <label>4)PINA = 0x2E;
        </label>
    </div>
</div>
<div id="19res"></div>
<br>

<!-- q20-->
<div class="form-group">
    <label>20.Frequency of crystal oscillator used in Atmega8 ?
</label>
    <div class="radio">
        <label>1)10MHz
        </label>
    </div>
    <div class="radio">
        <label>2)12MHz
        </label>
    </div>
    <div class="radio">
        <label>3)8MHz
        </label>
    </div>
    <div class="radio">
        <label>4)16MHz
        </label>
    </div>
</div>
<div id="20res"></div>
<br>



                                  <div class="form-group">
                                      <label>Comments</label>
                                      <textarea class="form-control" rows="4" name="Comments"></textarea>
                                      <p class="help-block">Comments regarding the candidate.</p>
                                  </div>
                                  <br>

                                  <div class="form-group">
                                    <label>Rating (out of 10)</label>
                                    <input class="form-control" type="tel" name="Rating" >
                                  </div>
                                  <br>



                                  <button type="submit" style="background:#1a6600" class="btn btn-default"><span style="color:white">Submit</span></button>
                                  <button type="reset" style="background:#f9f906" class="btn btn-default"><span>Reset</span></button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->

                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->


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
                    <!-- <p class="text-muted">developed by Ag</p> -->
                    <p class="text-muted"><xmp><develop> Ag </design></xmp></p>
                    <p class="text-muted">Copyright &copy; EmR club NIT Kurukshetra 2017</p>

                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <script type="text/javascript">

      function loadValues(){
        var entries = <?php echo json_encode($array); ?>;
        var ans = <?php echo json_encode($ans); ?>;
        var reqName = "<?php echo $reqName; ?>";

        for(var no in entries){
          if(entries[no] != ''){
            var entry = JSON.parse(entries[no]);
            if(entry["Email"].trim() == reqName.trim()){
              document.getElementById("phpname").value = entry["Name"];
              document.getElementById("Name").innerHTML = entry["Name"];
              document.getElementById("Branch").innerHTML = entry["Branch"];
              document.getElementById("Year").innerHTML = entry["year"];
              document.getElementById("Github").innerHTML = entry["Github"];
              document.getElementById("RecentWorkshop").innerHTML = entry["recentWorkshop"];
              document.getElementById("Member").innerHTML = entry["Member"];
              document.getElementById("Projects").innerHTML = entry["Projects"].replace(/(?:\r\n)/g,'<br/>');
              document.getElementById("Participation").innerHTML = entry["Participation"].replace(/(?:\r\n)/g,'<br/>');
              var embeddedScore=0,aptitudeScore=0;
              for(i=1;i<=20;i++){
                var htmlCode =  '';
                if(ans[i-1] == entry[i]){
                  htmlCode += '<button type="button" class="btn btn-success">Right</button> Answer : '+ans[i-1];
                  if(i>=1 && i<=10)
                    aptitudeScore += 1;
                  else
                    embeddedScore += 1;
                }
                else{
                  htmlCode += '<button type="button" class="btn btn-danger">Wrong</button> Marked:'+entry[i]+', Actual ans:'+ans[i-1];
                }
                var qid = i + 'res';
                document.getElementById(qid).innerHTML = htmlCode;
              }
              document.getElementById("embeddedScore").innerHTML = embeddedScore;
              document.getElementById("aptitudeScore").innerHTML = aptitudeScore;
              document.getElementById("totalScore").innerHTML = embeddedScore + aptitudeScore;

            }
          }
        }

      }
    </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
  </div>
</body>

</html>



<?php
  echo '<script type="text/javascript">loadValues();</script>';
?>
