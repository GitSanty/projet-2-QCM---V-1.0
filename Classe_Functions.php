<?php

$Questions_Array = array(
    array("Le langage que l'ordinateur comprend est?","Binaire","Java","Visual Basic","AQ0_A"),
    array("L'un de ceux-ci n'est pas un programme:","L'ide","Le code source","Le compilateur","AQ1_B"),
    array("Le programme qui rectifie les erreurs commises par le programmeur est le ....","Le compilateur","L'éditeur de texte","Débugger","AQ2_C"),
    array("La programmation, c'est?","La réalisation d'un programme","La correction des erreurs commises par le programmeur","La traduction d'un langage informatique au langage binaire","AQ3_A"),
    array("Le langage binaire est composé","Des lettres de A jusqu'à F","Chiffres 1 et 0","Chiffres de 0 à 9","AQ4_B"),
    array("Un éditeur de texte .............","Permet de faire la traduction du code source au langage binaire","Permet de corriger et rectifier les erreurs commises par le programmeur.","Permet d'écrire le code source","AQ5_C"),
    array("Le 'C++' est un","Langage haut niveau","Compilateur","Débugger","AQ6_A"),
    array("Microsoft Word est un ....?","Compilateur","Programme","Débugger","AQ7_B"),
    array("Le programme qui fait la traduction en langage binaire est dit","Un débugger","Un compilateur","Un éditeur de texte","AQ8_C"),
);
$A_QLetters = array("z","A", "B", "C");


 function Generate_html($Num_Questions)
 {
     global $Questions_Array;
     global $A_QLetters;

     for ($Count = 0; $Count < $Num_Questions; $Count++) {
         echo "<div class=\"col-xs-8 col-sm-6\">";
         echo "<label>{$Questions_Array[$Count][0]}</label>";
         echo "<br>";
         echo "<br>";

         for ($CQuiz = 1; $CQuiz <= 3; $CQuiz++) {

             echo "<div class=\"custom-radio\">";
             echo '<div class="col-sm-3">';
             echo "<label>";
             echo "<input  class='required' name='Answers_Q{$Count}' type='radio' value='AQ{$Count}_{$A_QLetters[$CQuiz]}' id='Answ_Q{$Count}{$A_QLetters[$CQuiz]}_Radio' autofocus required>";
             echo "</label>";
             echo "<label for='Answ_Q{$Count}{$A_QLetters[$CQuiz]}_Radio' class='col-sm-4 control-label>'<span></span>{$Questions_Array[$Count][$CQuiz]}</label>";
             echo "</div>";
             echo "</div>";
             echo "<br>";
         }
         echo "</div>";
         echo "<br>";
     }
 }


    function Send_Answers(){
        global $Questions_Array;
        $Q_Keys = array();

        for ($c=0; $c < count($Questions_Array); $c++) {

            array_push($Q_Keys,$Questions_Array[$c][4]);
        }

        return $Q_Keys;


    }

    function Send_Questions(){
        global $Questions_Array;

        $Array_Questions = $Questions_Array;

        return $Array_Questions;
    }




