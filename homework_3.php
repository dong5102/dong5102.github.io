<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
    <form method="POST" action="homework_3.php">
        100 이하의 정수: <input type="text" name="num"/><br/>
        <input type="submit" name="submit"/>
    </form>


<?php
    $n = $_POST['num'];
    $a = 1;
    $b = 1;


    for ($i = 1; $i <= $n; $i++)
    {
        if($a == $b):
            printf("%d %d %f ", $a, $b, $a/$b);
            print("<br>");
            $a += $b;
        elseif($a > $b):
            printf("%d %d %f ", $a, $b, $a/$b);
            print("<br>");
            $b += $a;
        elseif($b > $a):
            printf("%d %d %f ", $b, $a, $b/$a);
            print("<br>");
            $a += $b;
        endif;
    }




?> 


</body>
</html>