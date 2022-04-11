<!DOCTYPE html>
<html>
<head>
	<title>Practice 4</title>
</head>
<body>
	<div style="text-align: center;">
		<h1 style="text-align: center;color:red;font-size: 20px">Useable class</h1>
		<a href="/php(oop-practice)/constructor-with-class.php">
		  <button>P-1</button>
		</a> 
		<a href="/php(oop-practice)/p1.php">
		  <button>P-2</button>
		</a> <br><br>
  <a href="/php(oop-practice)/p3.php">
		  <button>P-3</button>
		</a> <br><br>



		<?php
			/**
			 * 
			 */
		class RGB {
     private $color;
     private $red;
     private $green;
     private $blue;

     public function __construct($colorCode = "")
     {  
         $this->color = ltrim($colorCode, "#");
         $this->parseColor();
     }
     
      public function getColor()
      {
         return $this->color;
      }
      
      public function setColor($colorCode)
      {
         $this->color = ltrim($colorCode, "#");
         $this->parseColor();
      }

     // This function for make rgb color
     private function parseColor() 
     {    
         // $rgbColor =  sscanf($this->color, "%02x%02x%02x");
         // $this->red = $rgbColor[0];
         // echo "RGB format of red is: {$this->red}\n".'<br>';
         // $this->green = $rgbColor[1];
         // echo "RGB format of green is: {$this->green}\n".'<br>';
         // $this->blue = $rgbColor[2];
         // echo "RGB format of blue is: {$this->blue}\n".'<br>';

         // print_r($rgbColor);

                      // =====================or===================
         if($this->color) {
          list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x%02x%02x");
         } else {
          list($this->red, $this->green, $this->blue) = [0,0,0];
         }
         
     }
     
     // this function for see the output
     public function readRGBColor()
     {
         echo "Red = {$this->red}\n<br> Green = {$this->green} \n<br> Blue = {$this->blue}";
     }

   }

   $colorObj = new RGB("#ff33tt");
   $colorObj->readRGBColor();
		?>

	</div>

	</body>
</html>