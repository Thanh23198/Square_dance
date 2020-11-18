<?php
class Dancer{
    public $name;
    public $gender ;

    /**
     * Dancer constructor.
     * @param $name
     * @param $gender
     */
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}
$hangdoi1=new SplQueue();
$hangdoi2=new SplQueue();
$dancer1=new Dancer("tam","nam");
$dancer2=new Dancer("nam","nam");
$dancer3=new Dancer("tuan","nam");
$dancer4=new Dancer("luu","nam");
$dancer5=new Dancer("hoa","nu");
$dancer6=new Dancer("ngoc","nu");
$dancer7=new Dancer("ngoc anh","nu");
$hangdoi1->enqueue($dancer1);
$hangdoi1->enqueue($dancer2);
$hangdoi1->enqueue($dancer3);
$hangdoi1->enqueue($dancer4);
$hangdoi2->enqueue($dancer5);
$hangdoi2->enqueue($dancer6);
$hangdoi2->enqueue($dancer7);
function check($hangdoi1,$hangdoi2){
    if($hangdoi1->count()==0 || $hangdoi2->count()==0){
    echo "vui long vao hang doi"."<br>";
    }
   else{
        echo $hangdoi1->dequeue()->getName(). "   va   " . $hangdoi2->dequeue()->getName()."<br>";
    }

}
function countWaitingPeople($hangdoi1,$hangdoi2){
    echo "so nguoi phai doi la :".($hangdoi1->count()+$hangdoi2->count());
}
check($hangdoi1,$hangdoi2);
check($hangdoi1,$hangdoi2);
check($hangdoi1,$hangdoi2);
check($hangdoi1,$hangdoi2);
countWaitingPeople($hangdoi1,$hangdoi2);

