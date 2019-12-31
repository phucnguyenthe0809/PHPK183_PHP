<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tuyeetj voi</h1>
    <h1>vietpro</h1>
    <!-- Vùng làm việc php -->
    <?php 
         echo '<h1>vietpro</h1>';

        //  tạo biến
        $bien1='<h1>vietpro</h1>';
        $bien1='zzzzzzz';

        echo $bien1;
        echo '<hr>';
            // kiểu dữ liêu
                //kiểu số
                    $num=180;
                //kiểu chuỗi
                    $str='nguyễn thế phúc';
        // hằng
            // cấu trúc: define('Tên_hằng',Giá_trị); hằng không thay đổi được giá trị
            // lấy giá trị trong hằng  constant('Tên_hằng');
        define('PI',3.14);
        echo constant('PI');
        echo '<hr>';

        // các toán tử + - * / %
        $a=10;
        $b=3;
        $c=$a%$b;
        echo $c;

        // câu lệnh điều kiện
        // 
        // if ( $a<=$b) {

        //     echo '<h1> zzzzzzzzz</h1>';

        // }

        // && và ( chỉ đúng khi 2 vế đều đúng)
        // || hoặc (chỉ sai khi 2 vế đều sai)

        

        if ( (3>10) || (4>3) && (5==8) ) {

            echo '<h1> zzzzzzzzz</h1>';

        }

           
    ?>


</body>
</html>