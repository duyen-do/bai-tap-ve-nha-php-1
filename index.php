<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <p>vidu</p>
    <?php
        $kq="";
        if(isset($_POST['cmd']))
        {
            $a=$_POST['txta'];
            $b=$_POST['txtb'];
            $c=$_POST['txtc'];
            $del=$b*$b-4*$a*$c;
            if($del<0) $kq="phuong trinh co nghiem phuc";
            else{
                $x1=(-$b-sqrt($del))/2/$a;
                $x2=(-$b+sqrt($del))/2/$a;
                if($x1==$x2) $kq="phuong trinh co nghiem kep <br> x1=x2=$x1";
                else  $kq="phuong trinh 2 nghiem  <br> x1=$x1 <br> x2=$x2";
            }
        }
    ?>
    <form action="" method="post" accept-charset="utf-8">
        <h2>chuong trinh giai phuong trinh bac 2</h2>
        <p>nhap a= <input type="text" name="txta" value="" placeholder="nhập giá trị a"></p>
        <p>nhap b= <input type="text" name="txtb" value="" placeholder="nhập giá trị b"></p>
        <p>nhap c= <input type="text" name="txtc" value="" placeholder="nhập giá trị c"></p>
        <input type="submit" name="cmd" value="giai pt">
        <br>
        <label for=""> <?php echo "$kq";?></label>
    </form> -->

    <p>bai1</p>
    <?php
        for($i = 0; $i < 5; $i ++) {
            echo "<br>";
            for($j = 0; $j < 10; $j ++) {
                echo "*";
            }
        }
    ?>
    <p><?php echo "_***_***_";?></p>
    <p><?php echo "*********";?></p>
    <p><?php echo "___***___";?></p>
    <br>
    <p><?php echo "____/*\____";?></p>
    <p><?php echo "___/***\___";?></p>
    <p><?php echo "<*********>";?></p>
    <p><?php echo "__\*****/_";?></p>
    <p><?php echo "___/***\__";?></p>


    <p>bai2</p>
    <?php
        $kq="";
        if(isset($_POST['cmd']))
        {
            $a=$_POST['txtn'];
            for($i = 1; $i <= $n; $i ++) 
            {
                $sum+=$i;
                $kq="tong tu 1 den $n <br> =$sum";
                if($i %3==0)
                {
                    echo"cac so chia het cho 3 la $i";
                }
            }
        }
    ?>
    <form action="" method="post" accept-charset="utf-8">
        <h2>Tinh tong</h2>
        <p>nhap n= <input type="text" name="txtn" value="" placeholder="nhập giá trị n"></p>
        <input type="submit" name="cmd" value="giai">
        <br>
        <label for=""> <?php echo "$kq";?></label>
    </form>
   
</body>
</html>