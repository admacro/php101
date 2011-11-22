<?php

// class definition
class Student {

// class members
    public $name;
    private $gender;
    private $grade;

    // constructor
    public function __construct($name, $gender, $grade) {
        $this->name = $name;
        $this->gender = $gender;
        $this->grade = $grade;
    }

    // destructor
    public function __destruct() {
        echo $this->name.' is dead. Rest in peace in heaven! ';
    }

    // methods
    public function study() {
        echo $this->name.' is studying ...<br/>';
    }

    public function play() {
        echo $this->name.' is playing ...<br/>';
    }

    // to string
    public function toString() {
        echo 'name: '.$this->name.'<br/>';
        echo 'gender: '.$this->gender.'<br/>';
        echo 'grade: '.$this->grade.'<br/>';
    }

    private function internalFunction() {
        echo 'internal function';
    }

    // getters and setters
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
    }

}

?>

<?php

class CollegeStudent extends Student {

    private $major;
    
    function __construct($name, $gender, $grade, $major) {
        parent::__construct($name, $gender, $grade);
        $this->major = $major;
    }

    public function drink() {
        echo $this->getName().' is drinking ...<br/>';
    }

    public function getMajor() {
        return $this->major;
    }

    public function setMajor($major) {
        $this->major = $major;
    }

}

?>


<?php

// define an instance of Student
$tom = new Student('Tom', 'boy', 3);

//$tom->setName('Tom');
//$tom->setGender('boy');
//$tom->setGrade(3);

$tom->study();
$tom->play();
$tom->toString();

echo '<br/>';

// define an instance of CollegeStudent
$james = new CollegeStudent('James', 'man', 4, 'psychology');

$james->study();
$james->play();
$james->drink();
$james->toString();

echo '<br/>';

echo 'class: '.get_class($tom).'<br/>';
echo 'parent class: '.get_parent_class($james).'<br/>';

// NOTE: Only public properties can be got by get_class_vars() method
$members = get_class_vars(get_class($tom));
echo 'class members('.sizeof($members).'): '; // size of array is 1
foreach($members as $member) {
    echo $member.' ';
}

echo '<br/>';

$methods = get_class_methods(get_class($tom));
echo 'class methods('.sizeof($methods).'): <ul>';
foreach($methods as $method) {
    echo '<li>'.$method;
}
echo '</ul><br/>';

?>
