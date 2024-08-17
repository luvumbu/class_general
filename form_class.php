<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec JavaScript</title>
    <link rel="icon" type="image/x-icon" href="https://t3.ftcdn.net/jpg/01/08/08/58/360_F_108085811_ssVzwb50KvRrpvydbke92qnN0dxWBPXu.jpg">
</head>

<body>

 


    <link rel="stylesheet" href="monFormulaire1.css">


<?php 

require_once 'Creat_form.php' ; 

    $label_1 ="label_1" ;

    $label_1_text = "Dbname" ; 
    $label_2_text = "Username" ; 

    $input_1 ="input_1" ;
    $label_2 ="label_2" ;
    $input_2 ="input_2" ;
    $btn ="btn" ;


    $monFormulaire1 = new Creat_form("form_p_name", "form", "");
    // si la valeur est vide elle ajout l'element apres le body 
    // si non c'est la valeur de d'identifiant qui est pris en compte 
    $monFormulaire1->construct_setAtribut("class", "monFormulaire1");
 


   
    $monFormulaire1->add_child($label_1,"label") ; 
    $monFormulaire1->child_setAtribut($label_1,"", $label_1_text) ; 


   
    $monFormulaire1->add_child($input_1,"input") ; 
    $monFormulaire1->child_setAtribut($input_1,"placeholder", $label_1_text) ; 


    $monFormulaire1->add_child($label_2,"label") ; 
    $monFormulaire1->child_setAtribut($label_2,"", $label_2_text) ; 


   
    $monFormulaire1->add_child($input_2,"input") ; 
    $monFormulaire1->child_setAtribut($input_2,"placeholder", $label_2_text) ; 



 $btn2="xx"; 
 $info___ = "Mot de passe oublié" ; 
 $src_info ="http://google.com" ; 
    $monFormulaire1->add_child($btn2,"div") ; 
    $monFormulaire1->child_setAtribut($btn2,"", "<a href='".$src_info."'>".$info___."</a>") ; 
    $monFormulaire1->child_setAtribut($btn2,"class", "xx") ; 



    $monFormulaire1->child_setAtribut($btn,"", "submit") ;

    $monFormulaire1->add_child($btn,"div") ; 
    $monFormulaire1->child_setAtribut($btn,"class", "submit") ; 
    $monFormulaire1->child_setAtribut($btn,"onclick", "alert()") ; 

    $monFormulaire1->child_setAtribut($btn,"", "submit") ;
    
    



 
 

 

    
    ?>


 





</body>

<style>
.xx {
    padding: 10px;
  
    margin-top:10px ; 
    margin-bottom: 10px;
}
</style>


</html>