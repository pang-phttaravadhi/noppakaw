<?php

class Person
{
    
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __isset($prop) : bool
    {
        return isset($this->$prop);
    }
}
echo "<table cellpadding='10' cellspacing'10' border='1'>";
echo "<tr> <th>number</th> <th>name</th> <th>sername</th> <th>age</th> </tr>";
$people = [
    new Person('Fred'),
    new Person('Jane'),
    new Person('John'),
];

print_r(array_column($people, 'name'));
echo "</table>";
?>