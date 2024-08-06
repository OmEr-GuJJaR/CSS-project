
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-subject</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>
    <div class="for-loop">
        <h1 class="h-1">php Table with for loop</h1>
        <?php
        $varX = 20;    
        for ($i = 1; $i <= 20; $i++) {
        $result = $varX * $i;
        echo "<br>" .$varX . " x " . $i ." = ". $result ."<br>" ;
        }
        ?>
    </div>
    <div class="while-loop">
        <h1 class="h-1">post-increment operator with while loop</h1>
        <?php
        $varY = 2; 
        $x = 3;   
        while($x <= 11) {
        $result2 = $varY + $x;
        echo "<br>" .$varY . " + " . $x ." = ". $result2 ."<br>" ;
        $x++;
        }
        ?>
    </div>
    <div class="do-while-loop">
        <h1 class="h-1"> pre-decrement operator with do-while loop</h1>
        <?php
        $y = 20;
        do {
            --$y;
            echo $y ."<br>";
            }  
        while($y > 10);
        ?>
    </div>
</body>
</html> 
