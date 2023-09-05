<?php
    class Box {
        protected $lengh;
        protected $heigh;
        protected $wight;
        protected $mater;
        public static $count;

        public function __construct($lengh, $heigh, $wight){
            $this->lengh = $lengh;
            $this->wight = $wight;        
            $this->height = $heigh;    
        } 

        public function volume(){
            var_dump(self->$count);
            return $this->lengh * $this->heigh * $this->wight;    
        }

        public function getLength(){
            return $this->lengh;
        }

        public function setLength(){
            if($lengh > 0){
                $this->lengh =$lengh;
            }
        }

        public static function countUp() {
            self::$count++;
            
        }
    }

    class MetalBox extends Box {
        public $weight;
        public function __construct($lengh, $heigh, $wight){
            $this->lengh = $lengh;
            $this->wight = $wight;        
            $this->heigh = $heigh;   
            $this->mater = 'metal'; 
        }
    }

$box = new MetalBox(1,1,1);
$box->volume();
MetalBox::cxountUp();
MetalBox::cxountUp();
MetalBox::cxountUp();
var_dump(MetalBox::$count);