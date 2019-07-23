<?php
    class ClassCrud extends ClassConexao{
        #Atributos
        private $Crud;
        private $Contador;

        #Preparação das declativas
        private function preparedStatements($Query , $Parametros)
        {
            $this->countParametros($Parametros);
            $this->Crud=$this->conectaDB()->prepare($Query);

            if($this->Contador > 0){
                for($I=1; $I <= $this->Contador; $I++){
                    $this->Crud->bindValue($I,$Parametros[$I-1]);
                }
            }

            $this->Crud->execute();
        }

        #Contador de parâmetros
        private function countParametros($Parametros)
        {
            $this->Contador=count($Parametros);
        }

        #Função pai para interação com a base de dados
        public function sqlDB($Sp, $Cond, $Parametros){
            $this->preparedStatements("CALL {$Sp}({$Cond})", $Parametros);
            return $this->Crud;
        }

    }
?>