<?php
abstract class Mobil {
	protected $status = 0;
	protected $transmission; 
	protected $fuel; 

	public const SHUTDOWN = 0;
	public const START = 1;
	public const RUN   = 2;
	public const STOP  = 3;
	public const MIRROR = 4;

	public function start()
	{
		$this->setStatus(self::START);
	}

	public function run(){
           if ($this->getStatus() === self::START) {
	       $this->setStatus(self::RUN);
	       echo"your car can running <br>";
	   } else {
               throw new Exception('Engine not started yet');
	   }
	}

	public function stop(){
           if ($this->getStatus() === self::RUN) {
	       $this->setStatus(self::STOP);
	       echo "Engine has been stop <br>";
	   } else {
               throw new Exception('Engine not run yet');
	   }
	}

	public function shutdown(){
           if ($this->getStatus() === self::START || $this->getStatus() === self::STOP) {
	       $this->setStatus(self::SHUTDOWN);
	       echo "Engine has been Shutdown <br>";
	   } else {
               throw new Exception('Engine cannot be shutdown');
	   }
	}

	public function setStatus(int $param)
	{
	   $this->status = $param;
	}

 	public function getStatus() : int
        {
		return $this->status;
	}
	public function flipMirror(int $x){
		if($x == self::MIRROR){
			throw new Exception("Sub Zero");
			return $x;
		}
		try{
                flipMirror(4);
                }
                catch(Exception $e){
                        echo "Mirror Cant Open",$e->getMessage(),"\n";
                }
	}
		
}

class Xenia extends Mobil {
   


   public function trans($transmission="Matic")
  {
  	echo "transmission this car $this->transmission=$transmission <br>".PHP_EOL;
  	
  }
  public function bahanbakar($fuel="Pertamax")
  {
  	echo "Bahan Bakar $this->fuel=$fuel <br>".PHP_EOL;
  }
	  
}
class Avanza extends Mobil {

	public function trans($transmission="Manual")
  {
  	echo "transmission this car $this->transmission= $transmission <br>".PHP_EOL;
  	
  }
  public function bahanbakar($fuel="Pertalite")
  {
  	echo "Bahan Bakar $this->fuel=$fuel <br>".PHP_EOL;
  }
}

$xenia = new Xenia;
echo $xenia->trans();
echo $xenia->bahanbakar();
 $xenia->START();
 echo $xenia->stop();
?>