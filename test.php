<?php
class BaseClass {
   function __construct() {
       echo "Calling parent class constructor \n";
   }
 }
 class SubClass extends BaseClass {
	function __construct() {
       parent::__construct();
		echo "Calling child class constructor \n";
  }
 }
	$obj = new BaseClass();
	$obj = new SubClass();
?>


<?php
    class Student {
		public $Name;
        public $RollNum;
		//public $Age;
       public function __get($var) {
            print "Attempted to retrieve $var and failed...\n";
        }
    }
  $obj = new Student;
  print $obj->Age;
?>
<?php
// Declare a simple class
class Strings
{
   public $x;
   public function __construct($x)
   {
       $this->x = $x;
   }
   public function __toString()
   {
       return $this->x;
   }
}
$obj = new Strings('Hello, how r u');
echo $obj;
?>

