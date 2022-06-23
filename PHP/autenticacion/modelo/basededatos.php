<?php
    class BaseDeDatos{
        protected $conxion = null;
        
        public function __construct(){
            try{
                $this->conexion = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_CONTRA, BD_NOMBREBD);
                if(mysqli_connect_erroc()){
                    throw New Exception("Error al conectar con la base de datos");
                }
            }
            catch(Expection $e){
                throw New Exception($e->getMessage());
            }
        }

        public function seleccionar($consulta="" , $parametros=[]){
            try{
                $sentencia= $this->ejecutarSentencia( $consulta , $parametros);
                $resultado = $sentencia->get_result()->fetch_all(MYSQLI_ASSOC);
                $sentencia->close();
                return $resultado;
            }
            catch(Exception $e){
                throw New Exception ($e->getMessage());
            }
            return false;


        }
      public function ejecutarSentencia($consulta="" , $parametros=[]){
           try{
               $sentencia =$this->conexion->prepare( $consulta );
               if($sentencia === false){
                   throw New Exception("Imposible preparar la sentencia" . $sentencia);
                   
               }
               if( $parametros ){
                   $sentecnia->bind_param($parametros[0], $parametros[1]);
               }
               $sentencia->execute();
               return $sentencia;
           }
           catch(Exception $e){
            throw New Exception ($e->getMessage());
           }

      }
    }