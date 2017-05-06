/**
 * Created by Admin on 14.04.2017.
 */


function getMinOrMax(minOrMax, countOfNumber, numbers) {
    var minOrMax = prompt('Что будем искать? min или max?')
    var numbers = [];

    Array.max = function(numArray) {
        return Math.max.apply(null, numArray);
    }
    Array.min = function(numArray) {
        return Math.min.apply(null, numArray);
    }

    if(minOrMax === null || minOrMax === '' || minOrMax !== 'min') {
        minOrMax = 'max';
    }

    while (isNaN(countOfNumber)) {
        countOfNumber = prompt('Введите кол-во чисел из которых будем искать ' + minOrMax);
    }

    for(var i = 0; i < countOfNumber; i++) {
        numbers.push(prompt('Введите число'));
    }

    if(minOrMax === 'max') {
        var max = Array.max(numbers);
        alert('Максимальное число = ' + max);
    }

    else if (minOrMax === 'min') {
        var min = Array.min(numbers);
        alert('Минимальное число = ' + min)
    }
}

getMinOrMax();