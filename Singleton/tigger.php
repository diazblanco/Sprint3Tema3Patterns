<?php
class Tigger {    
        private static $instance;
        private $counter;

        private function __construct() //constructor privado para que Tigger no pueda ser instanciado dsd fuera de la calse
            {
                    echo "Building character..." . PHP_EOL;
                    echo "<br>" ;
            }

        //GETTER para instanciar el objeto obteniendo la isntancia
        // El método comprueba si ya existe alguna instancia, si no existe,
        //la crea por primera vez, si si existe, devuelve la instancia ya existnte
        //de manera que siempre devuelve el mismo objeto
        public static function getInstance() {
                if(!self::$instance instanceof self) {
                        self::$instance = new self();
                }
                return self::$instance;
        }
        // Otra opción, inicializando static $instance = null 
        /* public static function getInstance(){   
                if (is_null(self::$instance)){
                        self::$instance = new self;
                }
                return self::$instance;
        }*/

                        
        //Singletons should not be cloneable.
        protected function __clone(){}
                        
        //Método de clase, roa e incrementa contador en uno
        public function roar() {
                echo "Grrr!" . PHP_EOL ;
                $this->counter++; // Cuando hace la acción, añade 1 al contador. Chivato
                echo "<br>" ;
        }
        //Getter para acceder al atributo contador
        public function getCounter(){
                return $this->counter;
        }
}

$numRand = rand(1,5);
for ($i=0; $i<$numRand; $i++){
        Tigger::getInstance()->roar();
}



echo 'En Tigger ha realitzat ' . Tigger::getInstance()->getCounter() . " rugits" . PHP_EOL;
?>
