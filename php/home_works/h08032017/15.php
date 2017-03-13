<?
$a = 23;
$b = 2;
$operator = '+';

switch($operator) {
    case '+':
        $result = $a + $b;
        echo $result;
        break;
    case '-':
        $result = $a - $b;
        echo $result;
        break;
    case '*':
        $result = $a * $b;
        echo $result;
        break;
    case '/':
        if($b == 0){
            echo 'Devision by zero!!!';
            break;
            }
        else {
        $result = $a / $b;
        echo $result;
        break;
            }
    case '%':
        if($b == 0) {
            echo 'Division by zero!!!';
            break;
        }
        else {
        $result = $a % $b;
        echo $result;
        break;
            }
    default:
        echo "Unexpected Value";
}
?>