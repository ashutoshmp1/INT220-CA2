<!--Create a group of webpages, capable of using the concept on inheritance. In those pages implement the school result calculation based on marks attained in CA1 CA2 and final exam by students. You can use any formula for calculation, 
but you have to ensure the concept of class inheritance (object oriented PHP) has been used.-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution-1</title>
</head>

<body>
    <?php  
    include 'marks.php';
    class Results extends Marks
    {
        public $endTermMarks;
        function __construct($finalMark)
        {
            $this->endTermMarks = $finalMark;
        }
        function totalMarks()
        {
            $this->grandTotal = ($this->ca1 + $this->ca2 + $this->endTermMarks);
            echo "Marks obtained in CA-1 is $this->ca1 <br>";
            echo "Marks obtained in CA-2 is $this->ca2 <br>";
            echo "Marks obtained in End Term Exam is $this->endTermMarks <br><br>";
            echo "Total marks: $this->grandTotal <br>";
        }
    }
    $answer = new Results(100);
    $answer->totalMarks();
    ?>
</body>
</html>