
<?php
    $result_str=$result="";
    if(isset($_POST["add"])){
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $result=$n1+$n2;
       $result_str=$n1 .' ADD '.$n2. ' = '.$result;

    }elseif(isset($_POST['sub'])){
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $result=$n1-$n2;
        $result_str=$n1 .' SUB '.$n2. ' = '.$result;
    }
    elseif(isset($_POST['mul'])){
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $result=$n1*$n2;
        $result_str=$n1 .' MUL '.$n2. ' = '.$result;
    }
    elseif(isset($_POST['div'])){
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        if ($n2!= 0) {
            $result = $n1 / $n2;
            $result_str=$n1 .' DIV '.$n2. ' = '.$result;
        } else {
            $result_str = "Division by zero is not allowed.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="lab_08.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
        <h2>Calculator</h2>
        <hr>
        <div class="div1">
            <h3>Input</h3>
            <hr>
            <label for="n1">Enter the 1st number:</label>
            <input type="number" name="n1" id="n1" required><br><br>

            <label for="n2">Enter the 2nd number:</label>
            <input type="number" name="n2" id="n2" required><br>
            <hr>
            
            <button type="submit" name="add">ADD</button>
            <button type="submit" name="sub">SUB</button>
            <button type="submit" name="mul">MUL</button>
            <button type="submit" name="div" >DIV</button>
            <hr>
            <h3>Output</h3>
            <hr>
        </div> 
        <div class="div2">
        <?php echo "Result: $result_str"  ?>
        </div>

        </form>

    </div>
</body>
</html>