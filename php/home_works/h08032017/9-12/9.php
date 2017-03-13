<?
$day = 3;

switch($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Work day';
    break;
    
    case 6:
    case 7:
        echo 'weekend';
    break;
    
    default:
    echo "Unknown day";
    break;
}
?>