<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
    



<?php
    $n = $_GET['num'];
    $prod = 1;
    for($i=0, $sum = 0, $prod = 1; $i<$n; $i++)
    {
        print("$prod");
        $sum += $prod++;
        if ($prod <= $n)
        {
            print(" + ");
        }
        else if ($prod > $n)
        {
            print(" = $sum <br>");
            $prod = 1;
        }
            
    }
    for($i=0, $sum = 1, $prod = 1; $i<$n; $i++)
    {
        print("$prod");
        $sum *= $prod++;
        if ($prod <= $n)
        {
            print(" * ");
        }
        else if ($prod > $n)
        {
            print(" = $sum <br>");
        }
            
    }
?> 


</body>
</html>
