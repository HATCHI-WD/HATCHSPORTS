<?php
    include "../controlador/C_registro.php";
    require_once RUTA_RAIZ_d . "./basededatos.php";
    class ValidarRegistro extends basededatos{
        public function crearuser(compare(), getEmail(), getUsername(), getPass()){
            if(compare() == true){
                return $this->seleccionar("INSERT INTO Usuario VALUES(getEmail(), getUsername(), getPass()) ORDER BY ci ASC LIMIT ?", ["i" , "$limite"]);
            }else{
               
                return "";
            }
        }


    }