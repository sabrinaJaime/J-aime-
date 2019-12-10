<?php

//Funcion para validar un formulario
function validarFormulario($array){
    $errores=[];
        //preguntamos por el imput nombre
     if(isset($array["nombre"])){
            if(empty($array["nombre"])){
                $errores["nombre"]= "Este campo es obligatorio";
            }
            elseif(strlen($array["nombre"])<2){
                 //se almacenan los errores
                $errores["nombre"]= "Tu nombre debe tener mínimo 2 caracteres";
            }
        }
            //validamos email
    if(isset($array["email"])){
             if(empty($array["email"])){
                    $errores["email"]= "Este campo es obligatorio";
                }
                //filter valida el formato del email
                elseif(!filter_var($array["email"], FILTER_VALIDATE_EMAIL)){
                    $errores["email"]="Debe poner un email válido";
                }
            }
    //validamos password
    if(isset($array["password"])){
            if(empty($array["password"])){
                    $errores["password"] = "Este campo es obligatorio";
                }
                if(strlen($array["password"]) < 6){
                $errores["password"] = "La contraseña debe tener como mínimo 6 caracteres.";
                }
        }
    //validamos la confirmacion de password
    if(isset($array["repassword"])){
                if(empty($array["repassword"])){
                    $errores["repassword"]= "Este campo es obligatorio";
                }
           
            if($array["password"]!= $array["repassword"]){
                $errores["repassword"]="Las contraseñas deben coincidir.";
            }
        }     
    return $errores;        
      
}

//funcion para persistir datos
function persistirDato($arrayErrores, $campo){
    if(isset($arrayErrores[$campo])){
        return "";
    }else{
        if(isset($_POST[$campo])){
            return $_POST[$campo];
        }
    }

}

?>