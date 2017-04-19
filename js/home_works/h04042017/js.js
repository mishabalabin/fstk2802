/**
 * Created by Admin on 14.04.2017.
 */


function getMinOrMax(search, numbers) {

    if (search === undefined) {
        alert('Укажите что искать? min or max');
        var search = prompt();
        if (search !== 'min' || search !== 'max') {
            alert('Опять ввели не min и не max');
        }
    }

    if (isNaN(numbers)) {
        alert('Передайте число!');
        var numbers = prompt();
    }

    else {
        alert('ok');
    }
}

getMinOrMax();