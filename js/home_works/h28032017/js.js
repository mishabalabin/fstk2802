/**
 * Created by Admin on 14.04.2017.
 */

var mayBeNumber;

mayBeNumber = prompt('Введите что-то');
if(isNaN(mayBeNumber)) {
    alert('Вы ввели не число!');
}

else {
    alert('число');
}
