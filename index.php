<?php
function showMenu() {
echo "Меню:\n";
echo "1. Ввести два числа\n";
echo "2. Выполнить сложение\n";
echo "3. Выполнить вычитание\n";
echo "4. Выполнить деление\n";
echo "5. Возвести число в степень\n";
echo "0. Выход\n";
}

while (true) {
showMenu();
$choice = readline("Выберите пункт меню: ");

switch ($choice) {
case 1:
	break;
case 2:
	echo "Сумма двух чисел: ", "\n";
	break;
case 3:
	echo "Разность чисел: ", "\n";
	break;
case 4:
	echo "Деление чисел: ", " \n";
	break;
case 5:
	echo "Возведение в степень: ","\n";
	break;
case 0:
	exit("Выход из программы.\n");
default:
	echo "Неверный выбор, попробуйте снова.\n";
}
}
