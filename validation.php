<?php

$punts = 0;
$nom = $prenom = $post= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('./Classe_Functions.php');
     $Keys_Post = Send_Answers();
    $Get_Questions = Send_Questions();

    //print_r($_POST);

    $Questions = test_input($_POST["Answers_Q1"]);
    $nom = test_input($_POST["nom"]);
    $prenom = test_input($_POST["prenom"]);
    //$post = $_POST['point'];

    foreach( $_POST as $value )
    {
        foreach($Keys_Post as $key){

            if($value == $key) {

                $punts++;}
        }
    }

    echo "<br>";
    echo "Résultat de test:";
    echo "<br>"."<br>";
    echo $nom. " " . $prenom;
    echo "<br>";
    echo "Note finale:  ".$punts;
    echo "<br>"."<br>";

   // Correction_Questions(3, $Get_Questions);

}

//  try {
//    mail($email,$nom,$msg);
//    print_r($_POST);
//} catch (Exception $e) {
//    echo 'Exception: ',  $e->getMessage(), "\n";
//}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formuliere</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
</head>

<body class="container-fluid bg-2">

<form class="pure-form-aligned" action="validation.php" method="post">
    <table>
        <fieldset id="inputs">
            <div class="container">
<?php


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}



function Correction_Questions($Num_Questions, $Questions_Array)
{
    $A_QLetters = array("z","A", "B", "C");

    for ($Count = 0; $Count < $Num_Questions; $Count++) {
        echo "<div class=\"col-xs-8 col-sm-6\">";
        echo "<label>{$Questions_Array[$Count][0]}</label>";
        echo "<br>";
        echo "<br>";

        for ($CQuiz = 1; $CQuiz <= 3; $CQuiz++) {

            echo "<div class='custom-radio'>";
            echo '<div class="col-sm-3">';
            echo "<label>";
            // add validation
            echo "<input  class='required' name='Answers_Q{$Count}' type='radio' value='AQ{$Count}_{$A_QLetters[$CQuiz]}' id='Answ_Q{$Count}{$A_QLetters[$CQuiz]}_Radio' autofocus required>";
            echo "</label>";
            $Color = Color_Answer("Answers_Q{$Count}");
            echo "<label for='Answ_Q{$Count}{$A_QLetters[$CQuiz]}_Radio' class='col-sm-4 control-label>'<span style='$Color'></span>{$Questions_Array[$Count][$CQuiz]}</label>";
            echo "</div>";
            echo "</div>";
            echo "<br>";
        }
        echo "</div>";
        echo "<br>";
    }
}


function Color_Answer($Answer_User){
    global $Keys_Post;

    foreach( $_POST as $value )
    {
        foreach($Keys_Post as $key){

            if($Answer_User == $key) {

            return "color:blue";
            }
            else{
                echo "hello red";
                return "color:red";
            }
        }
    }

}

?>
        </fieldset>
    </table>
</form>
</div>

</body>
   
   </html>
