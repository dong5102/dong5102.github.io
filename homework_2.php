<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
    <form method="POST" action="homework_2.php">
        10이상 100 이하의 정수: <input type="text" name="num"/><br/>
        <input type="submit" name="submit"/>
    </form>


<?php
    $n = $_POST['num'];
    $dada = ["$n"];

    for ($i = 0; $i <= $n; $i++)
    { 

        $dada[$i] = rand(0, $n);
       
    }
    print_r($dada);
    
    sort($dada);
    
    print_r($dada);

?> 


</body>
</html>