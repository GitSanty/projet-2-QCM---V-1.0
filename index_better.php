<?php
include './Classe_Functions.php';
//require_once './Classe_Functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formuliere</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>



    <div class="icon">
        <img src="Santy_Logo.jpg" class=" rounded" height="100" width="350">
    </div>

    <div align="center">
        <h1>Take the Quiz</h1>
    </div>

<form class="pure-form-aligned" action="validation.php" method="post">
        <table>
            <fieldset id="inputs">

                <!-- Nom XXXXX-->
                <div class="container">
                    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <div class="pure-u-1-3">
                            <div class="middled">
                                <label for="IDnom" class="col-sm-4 control-label"><span></span>Nom</label>
                                <input  name="nom" type="text"  id="IDnom" placeholder="Nom" autofocus required>
                            </div>
                            <br>
                        </div>

                        <!-- prénom -->
                        <div class="pure-u-1-3">
                            <div>
                                <div class="middled">
                                    <label for="IDnom" class="col-sm-4 control-label"><span></span>Prénom</label>
                                    <input  class="form-control" name="prenom" type="text" placeholder="prénom" id="IDprenom" autofocus required>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- email -->
                <div class="pure-u-1-3">
                    <div>
                        <div class="middled">
                            <label for="IDnom" class="col-sm-4 control-label"><span></span>E-mail</label>
                            <input  class="form-control" id="IDemail" name="inputEmail" type="email" placeholder="E-mail" autofocus required>
                        </div>
                    </div>
                    <br>
                </div>

                <?php
                echo Generate_html(6);
                ?>

                <button class="pure-button pure-button-primary" type="submit" value="Envoyer">Envoyer</button>

            </fieldset>
        </table>

</form>

</body>
</html>

