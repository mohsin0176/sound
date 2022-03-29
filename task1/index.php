class Point2D
{
    public $a1;public $a2;public $b1;public $b2;public $s1;public $s2;
    public $o1;public $o2;public $ans1;public $ans2;public $ans3;
    function __construct($a1,$a2,$b1,$b2,$s1,$s2,$o1,$o2)
    {
        $this->a1=$a1;
        $this->a2=$a2;        
        $this->b1=$b1;
        $this->b2=$b2;
        $this->o1=$o1;
        $this->o2=$o2;        
        $this->s1=$s1;
        $this->s2=$s2;
        $this->ans1=$ans1;
        $this->ans2=$ans2;
        $this->ans3=$ans3;  
        
        $ans1=sqrt(pow(abs(a2-a1))+pow(abs(b2-b1)));
        $ans2=sqrt(pow(abs(a2-s1))+pow(abs(b2-s2)));
        $ans3=sqrt(pow(abs(a2-o1))+pow(abs(b2-o2)));
        
        echo "Distance between two point A and B".$ans1."<br>";
        echo "Distance between two point, B from S".$ans2."<br>";
        echo "Distance between two point, B from O".$ans3."<br>";
        
        echo "The cartesian value of A".$a1." ".$b1."<br>";
        echo "The cartesian value of B".$a2." ".$b2."<br>";
        echo "The cartesian value of S".$s1." ".$s2."<br>";
        echo "The cartesian value of O".$o1." ".$o2."<br>";
    }    
}
class Point3D extends Point2D
{
    public $a11;public $a22;public $b11;public $b22;public $s11;public $s22;
    public $o11;public $o22;public $ans11;public $ans22;public $ans33;
    function __construct($a1,$a2,$b1,$b2,$s1,$s2,$o1,$o2)
    {
        $this->a11=$a1;
        $this->a22=$a2;        
        $this->b11=$b1;
        $this->b22=$b2;
        $this->o11=$o1;
        $this->o22=$o2;        
        $this->s11=$s1;
        $this->s22=$s2;
        $this->ans11=$ans1;
        $this->ans22=$ans2;
        $this->ans33=$ans3;  
        
        $ans11=sqrt(pow(abs(a22-a11))+pow(abs(b22-b11)));
        $ans22=sqrt(pow(abs(a22-s11))+pow(abs(b22-s22)));
        $ans33=sqrt(pow(abs(a22-o11))+pow(abs(b22-o22)));
        
        echo "Distance between two point A and B".$ans11."<br>";
        echo "Distance between two point, B from S".$ans22."<br>";
        echo "Distance between two point, B from O".$ans33."<br>";
        
        echo "The cartesian value of A".$a11." ".$b11."<br>";
        echo "The cartesian value of B".$a22." ".$b22."<br>";
        echo "The cartesian value of S".$s11." ".$s22."<br>";
        echo "The cartesian value of O".$o11." ".$o22."<br>";
    }    
}

$a1=$_GET['a1'];
$a2=$_GET['a2'];
$b1=$_GET['b1'];
$b2=$_GET['b2'];
$s1=$_GET['s1'];
$s2=$_GET['s2'];
$o1=$_GET['o1'];
$o2=$_GET['o2'];
$obj1=new Point2D(a1,a2,b1,b2,s1,s2,o1,o2); 
$obj2=new Point3D(a1,a2,b1,b2,s1,s2,o1,o2);
