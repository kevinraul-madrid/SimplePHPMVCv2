<?php
function run(){
    $viewData = array(
        "cuenta"=>"1501-2000-00704",
        "nombre"=>"kevin madrid garcia",
        "correo"=>"kevinraul80@gmail.com"
    );

    $proyectos = array(
        array("id"=>"1","name"=>"Titulo Primaria","location"=>"Escuela  evangelica emanuel","year"=>"2008"),
        array("id"=>"2","name"=>"Titulo Secundaria","location"=>"instituto helen luce","year"=>"2017"),
        array("id"=>"4","name"=>"Realizacion del ESVU1 UNICAH","location"=>"UNICAH Santa Clara","year"=>"2017"),
        array("id"=>"5","name"=>"Realizacion del ESVU2 UNICAH","location"=>"UNICAH Santa Clara","year"=>"2020")
    );
    $viewData["proyectos"]=$proyectos;
    renderizar("about", $viewData);
    
    
}
run();

?>