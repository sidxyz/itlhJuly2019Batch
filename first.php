<?php

$message = "Hello World";

//echo "$message"." Simon";

$studentsArray = ['A','2','C','D','E'];


//echo $subjectMarks['English'];				 

//var_dump($studentsArray);

if($studentsArray[1]===2)
{
	//echo "no no no";	
}
	
for($i=0;$i<sizeof($studentsArray);$i++)
{
	//echo "<br/> element at position $i = $studentsArray[$i]";
}

$subjectMarks = ['English' => 78,
				 'Maths' => 99,
				 'Chemistry' => 44,
				 'Physics' => 78];


foreach ($subjectMarks as $key => $value) 
{
	//it will loop through the entire array always!
	echo " Marks of subject $key are $value <br/>";
}


