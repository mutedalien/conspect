var number; // четыре цифры загаданного числа
var attempts = 0; // число попыток

// общая формула - min + Math.random() * (max - min)
number = Math.round(Math.random() * (9999 - 1000)+1000);
guessNumber();

function guessNumber(){
	if(attempts==3){
		alert("Количество попыток исчерпано");
		return;
	}  
    attempts++;//увеличили счетчик попыток
	var result = parseInt(prompt("Введите число (-1 - закончить игру) " + number, 100));
	
	// игрок угадал число
	if(result == number){
		alert("Вы угадали! Число попыток : " + attempts);
		location.reload(); // перезагружаем страницу для новой игры		
	}
	// игрок не ввёл число
	else if(result == 0 || Number.isNaN(result)){ // Number.isNaN() определяет нечисловое значение
		alert("Вы не ввели число");
		guessNumber();
	}
	// выход из игры
	else if(result == -1){
		alert("Спасибо за игру!");
    
	}
	else{	
		// сравниваем
		if(result > number){
			alert("Ваше число больше загаданного");
		}
		else
			alert("Ваше число меньше загаданного");
		
		// повторяем игровой цикл
		guessNumber();
	}
	
}

