<?php

class User {

    public $name;
    public $sername;
    public $age;

    public function setproperties($_name,$_sername,$_age) 
    {   
        $this->name = $_name;
        $this->sername = $_sername;
        $this->age = $_age;
    }
    public function show() 
    {   
        $user = array(
            array("number"=>"01", "name"=>"ภัทรวดี", "sername"=>"ป๊อกเทิ่ง","age"=>"21"),
            array("number"=>"02", "name"=>"พิชชาพร", "sername"=>"ทองคลัง","age"=>"21"),
            array("number"=>"03", "name"=>"ริสา", "sername"=>"เบ็ญมูซา","age"=>"21"),
            array("number"=>"04", "name"=>"เยาวเรศ", "sername"=>"วงศ์สามารถ","age"=>"21"),
            array("number"=>"05", "name"=>"วงศธร", "sername"=>"ด้วงนิล","age"=>"21"),
            array("number"=>"05", "name"=>"วชิระ", "sername"=>"ขันคำ","age"=>"21")
            );
        
        echo "<table cellpadding='20' cellspacing'10' border='1'>";
        echo "<tr> <th>ลำดับที่</th> <th>ชื่อ</th> <th>นามสกุล</th> <th>อายุ</th> </tr>";
        foreach($user as $user) {
            echo "<tr><td>$user[number]</td> <td>$user[name]</td> <td>$user[sername]</td> <td>$user[age]</td></tr>";
        }
        echo "</table>";
    }

}

$user1 = new User();
$user1->setproperties("Patthravadhi","Poktueng",21);
$user1->show();
?>