<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Timetable</title>
    <link href="img/logo%20vnit.png" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container" id="mainpage">
        <form method="post" action="generate.php">
        
        <section class="container">
            <div class="dropdown" style="margin-bottom:5px">
                <select required name="branch" class="dropdown-select" id="ddl">
                    <option value="">BRANCH</option>
                    <option value="chemical">CHEMICAL ENGINEERING</option>
                    <option value="civil">CIVIL ENGINEERING</option>
                    <option value="cse">COMPUTER SCIENCE & ENGINEERING</option>
                    <option value="eee">ELECTRICAL & ELECTRONICS ENGINEERING</option>
                    <option value="ece">ELECTRONICS & COMMUNICATION ENGINEERING</option>
                    <option value="mech">MECHANICAL ENGINEERING</option>
                    <option value="meta">METALLURGICAL & MATERIALS ENGINEERING</option>
                    <option value="mining">MINING ENGINEERING</option>
                </select>
            </div>
            <div class="dropdown" style="margin-bottom:5px">
                <select required name="sem" class="dropdown-select" id="ddl1">
                    <option value="">SEM</option>
                    <option value="3">1</option>
                    <option value="5">2</option>
                    <!--option value="7">3</option-->

                </select>
            </div>
            <div class="dropdown" style="margin-bottom:5px">
                <select required name="batch" class="dropdown-select">
                    <option value="">BATCH</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <!--option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option-->
                </select>
            </div>
        </section>
        <div class="container">

            <table class="table table-bordered table-striped">
                <tr>
                    <th style="text-align:center">Slot</th>
                    <th style="text-align:center">Subject</th>
                    <th style="text-align:center">Theory</th>
                    <th style="text-align:center">Practical</th>
                </tr>
                <tr>
                    <td>A</td>
                    <td>
                        <div class="dropdown">
                            <select name="A" class="dropdown-select" id="A"> </select>
                        </div>
                    </td>
                    <td>
                         <input name="th[]" type="checkbox" value="AT">
                    </td>
                    <td>
                       <input name="pr[]" type="checkbox" value="AP">
                    </td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>
                        <div class="dropdown">
                            <select name="B" class="dropdown-select B" id="B"> </select>
                        </div>
                    </td>
                    <td>
                       <input name="th[]" type="checkbox" value="BT">
                    </td>
                    <td>
                        <input name="pr[]" type="checkbox" value="BP">
                    </td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>
                        <div class="dropdown">
                            <select name="C" class="dropdown-select" id="C"> </select>
                        </div>
                    </td>
                    <td>
                        <input name="th[]" type="checkbox" value="CT">
                    </td>
                    <td>
                        <input name="pr[]" type="checkbox" value="CP">
                    </td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>
                        <div class="dropdown">
                            <select name="D" class="dropdown-select" id="D"> </select>
                        </div>
                    </td>
                    <td>
                        <input name="th[]" type="checkbox" value="DT">
                    </td>
                    <td>
                        <input name="pr[]" type="checkbox" value="DP">
                    </td>
                </tr>
                <tr>
                    <td>E</td>
                    <td>
                        <div class="dropdown">
                            <select name="E" class="dropdown-select" id="E"> </select>
                        </div>
                    </td>
                    <td>
                        <input name="th[]" type="checkbox" value="ET">
                    </td>
                    <td>
                       <input name="pr[]" type="checkbox" value="EP">
                    </td>
                </tr>
                <tr>
                    <td>F</td>
                    <td>
                        <div class="dropdown">
                            <select name="F" class="dropdown-select" id="F"> </select>
                        </div>
                    </td>
                    <td>
                       <input name="th[]" type="checkbox" value="FT">
                    </td>
                    <td>
                        <input name="pr[]" type="checkbox" value="FP">
                    </td>
                </tr>
                <tr>
                    <td>G</td>
                    <td>
                        <div class="dropdown">
                            <select name="G" class="dropdown-select" id="G"> </select>
                        </div>
                    </td>
                    <td>
                        <input name="th[]" type="checkbox" value="GT">
                    </td>
                    <td>
                       <input name="pr[]" type="checkbox" value="GP">
                    </td>
                </tr>
                <tr>
                    <td>H</td>
                    <td>
                        <div class="dropdown">
                            <select name="H" class="dropdown-select" id="H"> </select>
                        </div>
                    </td>
                    <td>
                        <input name="th[]" type="checkbox" value="HT">
                    </td>
                    <td>
                        <input name="pr[]" type="checkbox" value="HP">
                    </td>
                </tr>

            </table>
                <div class="container">
                    <div id="generatebutton">
                        <button type="submit" id="generate" name="generate" class="btn btn-info">Generate</button>
                         

                    </div>
                    <br>
                    


                </div>

        </div>
        </form>


    </div>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="./js/main1.js"></script>

    <script src="./js/xepOnline.jqPlugin.js"></script>
</body>

</html>