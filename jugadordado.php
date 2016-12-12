 <?php
    class jugadorDado
    {

    private $minNumDado=0;
    private $maxNumDado=12;
    public $tirarDado=12;

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

       $this->tirarDado=rand(0,12);
       
     }

    }
     ?>
