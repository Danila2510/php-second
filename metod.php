<style>
    .circle {
        float:left;
        width:50px;
        height: 50px;
        border-radius: 50%;
        background-color:red;
    }
</style>

<?php
//3

for($i = 1; $i <= 10; $i++){
    echo '<div class="circle"></div>';
}

echo "<div></br></br></br></br></div>";

//4
$binary_num = "110110";
$decimal_num = bindec($binary_num);
$hex_num = dechex($decimal_num);
echo "<p>Number: $binary_num</p>" . PHP_EOL . "<p>Converted: $hex_num</p>" . PHP_EOL;