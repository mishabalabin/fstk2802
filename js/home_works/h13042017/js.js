/* 1st Task
var goods = [];
var lastItem = goods[goods.length - 1];
alert(lastItem);
*/

//2nd Task
var styles = ['Джаз', 'Блюз'];

styles.push('Рок-н-Ролл');
styles.splice(styles.length - 2, 1, "Классика");
styles.shift();
styles.unshift('Рэп', 'Регги');


/* Почему не работает?

var result = styles
    .unshift('Рэп', 'Регги')
    .shift()
    .splice(styles.length - 2, 1, "Классика")
    .push('Рок-н-Ролл');
alert(result);

*/


// Создайте функцию find(arr, value), которая ищет в массиве arr значение value и возвращает его номер, если найдено, или -1, если не найдено.

var arrs = [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 13, 14, 15, 21, 23, 25, 21, 11];

function find(arr, value) {
    for(var i = 0; i < arr.length; i++) {
        if(arr[i] === value) {
            return i;
        }
    }
    return -1;
}
find(arrs, 13);