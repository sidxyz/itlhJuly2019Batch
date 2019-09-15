<?php


class Student 
{
	//members of a class

	// properties/variables
	public $name;
	public $email;
	public $phone;
	public $marks;
	public $college;

	// methods/functions
	function showDetails()
	{
		echo "Student name is $this->name and 
			  Student email is $this->email and
			  Student phone is $this->phone and
			  Student marks is $this->marks and
			  Student college is $this->college <br/>";
	}

	function setDetails($a,$b,$c,$d,$e)
	{
		$this->name = $a;
		$this->email = $b;
		$this->phone = $c;
		$this->marks = $d;
		$this->college = $e;

	}

}

$student1 = new Student;
$student1->setDetails('sam','sam@email.com','9930087833','100','RAIT');
$student1->showDetails();


$student2 = new Student;
$student2->setDetails('tam','tam@email.com','9930087833','100','SIES');
$student2->showDetails();
