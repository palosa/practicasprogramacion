 <?php
    class jugadorDado
    {

    private $minNumDado;
    private $maxNumDado;
    public $tirarDado=12;
    private $tiradas=[];

    public function getMinNumDado(){
      return $this->minNumDado;
    }
    public function getMaxNumDado(){
      return $this->maxNumDado;
    }
    public function setMinNumDado($minNumDado){
      if($minNumDado<0 ){
        $this->minNumDado = 0;
      }
      else{
        $this->minNumDado = $minNumDado;
      }

    }
    public function setMaxNumDado($maxNumDado){
      if($maxNumDado>12 ){
        $this->maxNumDado = 12;
      }
      else{
        $this->maxNumDado = $maxNumDado;
      }

    }
    //random
    public function randomPos(){

       $tirarDado=rand($this->minNumDado,$this->maxNumDado);

         return $tirarDado;
     }

    }
     ?>
