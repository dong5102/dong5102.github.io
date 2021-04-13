<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
    <form method="POST" action="homework_1.php">
        정수: <input type="text" name="num"/><br/>
        <input type="submit" name="submit"/>
    </form>



<?php
    $n = $_POST['num'];
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