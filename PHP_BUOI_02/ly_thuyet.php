<?php
// php phân biệt chữ hoa, chữ thường
    // tạo biến
        // biến kiểu số
        $ten_bien=100;
        // biến kiểu chuỗi
        $str='vietpro';

// muốn hiển bất kỳ dữ liệu nào ra màn hình đều phải dùng echo
    echo $ten_bien.'<br>';
    echo  $str;
    echo '<hr>';
        
//logic  >,< ,>= , <= , != , == 
    // 8 >3  true
    // 8 <3  false
    // 8 >=3 true
    // 8 <=3  false
    // 8!=3  true
    // 8 == 3  false

// && (và)
// || (hoặc)
// ! (true=>false , false=>true)

    // (8 >3) && (8 <3) false
    // (8 >3) && (8!=3) true
    // (8 >3) || (8 <3) true
    // (8 >3) || (8!=3) true
    // (8 >3) && (8 <3) && ( 8 == 3) false
    // (8 >3) || (8 <3) || ( 8 <=3) true
    // (8 >3) || (8 <3) && (8 >3) && (8 <3) true
    // !(8 >3) || (8 <3) || (8 >3) && (8 <3)  false

//var_dump() là 1 hàm hiển thị được tất cả các kiểu dữ liệu (bao gồm cả kiểu dữ liệu của biến)
// và thường được dùng cho việc fix bug
    var_dump(!(8 >3) || (8 <3) || (8 >3) && (8 <3));

    echo '<hr>';
    // biểu thức điều kiện

    if (8 <3) {  echo 'khối 1';      } 

    // else if( 8<=3 )  {   echo 'khối 2'; }
    // else if( 8==3 )  {   echo 'khối 3'; }

    else {   echo 'khối còn lại';   }
    echo '<hr>';
    // biểu thức kết hợp : ++, -- , += ,-= ,*= ,/= ,%=
    $a=1;
    $a++;
    $a++;
    echo $a;
    echo '<br>';

    $b=2;
    $b*=10;
    echo $b;

    
    echo ' <hr> ';
    //Vòng lặp

    // for
    // for ( khởi_tạo ; điều_kiện ; cập_nhật) { 
    //     Khối Thực Thi
    // }
        for ($i=1; $i <=10 ; $i++) { 
            echo 'VIETPRO '.$i.'<br>';
            
        }


    //while ( cẩn thận về khả năng rơi vào vòng lặp vô hạn)

    $a=1;
    while ($a <= 10) {
        echo $a.'---';
        $a++;
    }

    echo '<hr>';

    do {
       echo $a.'---';
       $a--;
    } while ($a >= 1);

echo '<hr>';

for ($i=2; $i <=9 ; $i++) { 
    
   echo '<h1> bản nhân '.$i.'</h1>';


   for ($j=1; $j <=9 ; $j++) { 
      echo "$i X $j = ".($i*$j)."<br>";
   }

}


