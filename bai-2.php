<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nhập N: <input type="number" name="n" id="">
        <button type="submit">TÌM</button>
    </form>

    <?php
        if(isset($_POST['n'])) {
            $n = $_POST['n'];
            $chia_het_3 = [];
            $so_nguyen_to = [];
            $so_fibonaci = [];

            for($i =  1; $i < $n; $i++) {
                // kiem tra chia het cho 3
                $i % 3 == 0 && $chia_het_3[] = $i;

                // kiem tra so nguyen to
                $d = 0;
                for($j = 1; $j < sqrt($i); $j++) {
                    $i % $j == 0 && $d++;
                }
                $d == 2 && $so_nguyen_to[] = $i;
            }

            // day fibonaci
            $nR = 0;
            $x = 0;
            $y = 1;

            do {
                $so_fibonaci[] = $x;
                $nR = $x;
                $x = $y;
                $y = $nR + $x;
            } while($x <= $n);

            echo "So chia het cho 3: ".implode(', ', $chia_het_3);
            echo "<br>So nguyen to: ".implode(', ', $so_nguyen_to);
            echo "<br>Day fibonaci: ".implode(', ', $so_fibonaci);
        }
    ?>
</body>
</html>