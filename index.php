<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/StyleSheet.css" />
        <title>Koodi Ämber</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <table id="menu">
            <tr>
                <td id="logo" rowspan="2">
                    <div id="header" class="menuItem">
                        <a href="index.php">KoodiÄmber</a>
                    </div>
                </td>
                <td rowspan="2">
                    <div class="menuItem">

                    </div>
                </td>
                <td rowspan="2">
                    <div class="menuItem">

                    </div>
                </td>
                <td rowspan="2">
                    <div class="menuItem">

                    </div>
                </td>
                <td id="welcome">
                    <div class="menuItem">

                    </div>
                </td>
                <td id="search">
                    <div class="menuItem">
                        <form action="index.php" method="post">
                            <div>
                                <input type="text" id="searchBox" value=" Otsing..." />
                                <input type="submit" value="Otsi" />
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td id="logout">
                    <div class="menuItem">
                                                    <!--<form action="register.html" method="GET">
                                                                                                                                                                        <input type="submit" value="Logi välja" /></form>-->
                        <a class="lingid2" href="login.html">Logi sisse</a> või
                        <a class="lingid2" href="register.html">Registreeru</a>

                    </div>
                </td>
            </tr>
        </table>

        <p>
            <br />
            <br />
        </p>

        <div id="content">
            <?php
                   if (isset($_GET['reg'])) {
                     echo "Registreerimine õnnestus! Proovi sisse logida!";
                }
                   if (isset($_GET['p'])) {
                       switch ($_GET['p']) {
                           case "amber" :
                               include "minu_amber.html";
                               break;
                           case "profiil" :
                               include "minu_profiil.html";
                               break;
                           case "seaded" :
                               include "seaded.html";
                               break;
                           default :
                               include 'kodu.html';
                       }
                   } else {
                       include 'kodu.html';
                   }	
            ?>
        </div>
    </body>
</html>
