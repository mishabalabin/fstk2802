/**
 * Created by Admin on 14.04.2017.
 */


for(var i; i < 10; i++) {
    console.log(i);
}

var someString = 'some';
switch (someString) {
    case 'someOne':
        alert('Nope');
        break;
    case 'some':
        alert('Yeap');
        break;
    default: alert('default massage');
}

//First variant
var mayBeNumber;
mayBeNumber = prompt('Введите что-то');
if(isNaN(mayBeNumber)) {
    alert('Вы ввели не число!');
}
else {
    alert('число');
}

//Second Variant
if(typeof +mayBeNumber === "number") {
    alert('NUMBER');
}

else {
    alert('Not a Number');
}