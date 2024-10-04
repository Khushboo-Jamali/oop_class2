<?php
class student
{
    public $stuname, $stubatch;

    function __construct($stuname, $stubatch)
    {
        $this->stuname = $stuname;
        $this->stubatch = $stubatch;
    }

    function stuinfo()
    {
        echo "Student Name " . $this->stuname . '<br>';
        echo "Student Batch Code " . $this->stubatch . '<br>';
    }
}

// $objstu =new student(' Ali ',' 2310f ');
// $objstu->stuinfo();




class studetails extends student
{
    public $fav = ' Black ', $subj1 = 'Math', $subj2 = 'English';
    function stuinfo()
    {
        echo "Student Name " . $this->stuname . '<br>';
        echo "Student Batch Code " . $this->stubatch . '<br>';
        echo "Student Color " . $this->fav . '<br><br><br>';
    }

    function subject()
    {
        echo "<h3 style='color:red'>This is New Function</h3> ";
        echo "Student Subject One " . $this->subj1 . '<br>';
        echo "Student Subject Two " . $this->subj2 . '<br>';
    }
}

$objstu2 = new studetails(' Dua ', ' 2310f ');
$objstu2->stuinfo();
$objstu2->subject();



$objstu2 = new studetails(' Dua ', ' 2310f ');
$objstu2->stuinfo();
$objstu2->subject();

echo "<h3 style='color:brown'>Multi </h3> ";

class stugirls extends studetails
{
    public $fav = ' Black ', $subj1 = 'Math', $subj2 = 'English', $fee = 5500, $ov = 4000;
    function stuinfo()
    {
        echo "Student Name " . $this->stuname . '<br>';
        echo "Student Batch Code " . $this->stubatch . '<br>';
        echo "Student Color " . $this->fav . '<br>';
        echo "Student Fee " . $this->fee + $this->ov . '<br>';
    }
}
$objstu2 = new stugirls(' Dua ', ' 2310f ');
$objstu2->stuinfo();


class student2
{
    public $stuname, $stubatch;

    function __construct($stuname, $stubatch)
    {
        $this->stuname = $stuname;
        $this->stubatch = $stubatch;
    }

    function stuinfo()
    {
        echo "Student Name " . $this->stuname . '<br>';
        echo "Student Batch Code " . $this->stubatch . '<br>';
    }
}

// $objstu =new student(' Ali ',' 2310f ');
// $objstu->stuinfo();




class studetail extends student2
{
    public $fav = ' Black ', $subj1 = 'Math', $subj2 = 'English';
    function stuinfo()
    {
        echo "Student Name " . $this->stuname . '<br>';
        echo "Student Batch Code " . $this->stubatch . '<br>';
        echo "Student Color " . $this->fav . '<br><br><br>';
    }

    function subject()
    {
        echo "<h3 style='color:red'>This is New Function</h3> ";
        echo "Student Subject One " . $this->subj1 . '<br>';
        echo "Student Subject Two " . $this->subj2 . '<br>';
    }
}

$objstu2 = new studetail(' Dua ', ' 2310f ');
$objstu2->stuinfo();
$objstu2->subject();
