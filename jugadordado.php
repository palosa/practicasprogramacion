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
    private function guardarTiradas($tiradas){
      $this->tiradas[] = $tiradas;

    }
    public function imprimirTiradas(){
      foreach ($this->tiradas as $key => $value) {
        echo "<br>Tirada ".($key+1)." :".$value;
      }
    }
    public function calcularMediaTiradas(){
      $media=0;
      $numeroTiradas=0;
      foreach ($this->tiradas as $key => $value) {
        $media=$media+$value;
        $numeroTiradas++;
      }
      $media=$media / $numeroTiradas;

      return round($media);
    }


    public function randomPos(){

       $tirarDado=rand($this->minNumDado,$this->maxNumDado);
       $this->guardarTiradas($tirarDado);
         return $tirarDado;
     }

    }
     ?>
