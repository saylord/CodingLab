const headElem = document.getElementById("head");
const bodyElem = document.getElementsByClassName("body");
const footerElem = document.getElementsByClassName("quiz__footer");
const headtextElem = document.getElementsByClassName("quiz__head");
const buttonsElem = document.getElementById("buttons");
const pagesElem = document.getElementById("pages");

//Класс, который представляет сам тест
class Quiz
{
	constructor(type, questions, results1, results2, results3, results4, results5, results6, results7, results8, results9, results10)
	{
		//Тип теста: 1 - классический тест с правильными ответами, 2 - тест без правильных ответов
		this.type = type;

		//Массив с вопросами
		this.questions = questions;

		//Массив с возможными результатами
		this.results1 = results1;
		this.results2 = results2;
		this.results3 = results3;
		this.results4 = results4;
		this.results5 = results5;
		this.results6 = results6;
		this.results7 = results7;
		this.results8 = results8;
		this.results9 = results9;
		this.results10 = results10;

		//Количество набранных очков
		this.score1 = 0;
		this.score2 = 0;
		this.score3 = 0;
		this.score4 = 0;
		this.score5 = 0;
		this.score6 = 0;
		this.score7 = 0;
		this.score8 = 0;
		this.score9 = 0;
		this.score10 = 0;

		//Номер результата из массива
		this.result1 = 0;
		this.result2 = 0;
		this.result3 = 0;
		this.result4 = 0;
		this.result5 = 0;
		this.result6 = 0;
		this.result7 = 0;
		this.result8 = 0;
		this.result9 = 0;
		this.result10 = 0;

		//Номер текущего вопроса
		this.current = 0;
	}

	Click(index)
	{
		//Добавляем очки
		let value = this.questions[this.current].Click(index);
		if (this.current % 10 == 1) this.score1 += value;

		if (this.current % 10 == 2) this.score2 += value;

		if (this.current % 10 == 3) this.score3 += value;

		if (this.current % 10 == 4) this.score4 += value;

		if (this.current % 10 == 5) this.score5 += value;

		if (this.current % 10 == 6) this.score6 += value;

		if (this.current % 10 == 7) this.score7 += value;

		if (this.current % 10 == 8) this.score8 += value;

		if (this.current % 10 == 9) this.score9 += value;

		if (this.current % 10 == 0) this.score10 += value;

		let correct = -1;

		//Если было добавлено хотя одно очко, то считаем, что ответ верный
		if(value >= 1)
		{
			correct = index;
		}
		else
		{
			//Иначе ищем, какой ответ может быть правильным
			for(let i = 0; i < this.questions[this.current].answers.length; i++)
			{
				if(this.questions[this.current].answers[i].value >= 1)
				{
					correct = i;
					break;
				}
			}
		}

		this.Next();

		return correct;
	}
	//Переход к следующему вопросу
	Next()
	{
		this.current++;
		
		if(this.current >= this.questions.length) 
		{
			this.End();
		}
	}

	//Если вопросы кончились, этот метод проверит, какой результат получил пользователь
	End()
	{
		for(let i = 0; i < this.results1.length; i++)
		{
			if(this.results1[i].Check3(this.score1))
			{
				this.result1 = i;
			}
		}
		for(let i = 0; i < this.results2.length; i++)
		{
			if(this.results2[i].Check(this.score2))
			{
				this.result2 = i;
			}
		}
		for(let i = 0; i < this.results3.length; i++)
		{
			if(this.results3[i].Check(this.score3))
			{
				this.result3 = i;
			}
		}
		for(let i = 0; i < this.results4.length; i++)
		{
			if(this.results4[i].Check(this.score4))
			{
				this.result4 = i;
			}
		}
		for(let i = 0; i < this.results5.length; i++)
		{
			if(this.results5[i].Check(this.score5))
			{
				this.result5 = i;
			}
		}
		for(let i = 0; i < this.results6.length; i++)
		{
			if(this.results6[i].Check(this.score6))
			{
				this.result6 = i;
			}
		}
		for(let i = 0; i < this.results7.length; i++)
		{
			if(this.results7[i].Check(this.score7))
			{
				this.result7 = i;
			}
		}
		for(let i = 0; i < this.results8.length; i++)
		{
			if(this.results8[i].Check(this.score8))
			{
				this.result8 = i;
			}
		}
		for(let i = 0; i < this.results9.length; i++)
		{
			if(this.results9[i].Check(this.score9))
			{
				this.result9 = i;
			}
		}
		for(let i = 0; i < this.results10.length; i++)
		{
			if(this.results10[i].Check(this.score10))
			{
				this.result10 = i;
			}
		}
	}
} 

//Класс, представляющий вопрос
class Question 
{
	constructor(text, answers)
	{
		this.text = text; 
		this.answers = answers; 
	}

	Click(index) 
	{
		return this.answers[index].value; 
	}
}

//Класс, представляющий ответ
class Answer 
{
	constructor(text, value) 
	{
		this.text = text; 
		this.value = value; 
	}
}

//Класс, представляющий результат
class Result 
{
	constructor(text, value)
	{
		this.text = text;
		this.value = value;
	}

	//Этот метод проверяет, достаточно ли очков набрал пользователь
	Check3(value)
	{
		if (value >= 0) {
			if(value >= 0 && value < 5) {
				if(this.value <= value)
				{
					return true;
				}
				else 
				{
					return false;
				}
			} else {
				if(this.value >= value)
				{
					return true;
				}
				else 
				{
					return false;
				}
			}
		} else {
			if(value < 0 && value > -5) {
				if(this.value <= value)
				{
					return true;
				}
				else 
				{
					return false;
				}
			} else {
				if(this.value >= value)
				{
					return true;
				}
				else 
				{
					return false;
				}
			}
		}
	}

	Check(value)
	{
		if (value > 0) {
			if(this.value >= value)
			{
				return true;
			}
			else 
			{
				return false;
			}
		} else {
			if(this.value <= value)
			{
				return true;
			}
			else 
			{
				return false;
			}
		}
	}
}

//Массив с результатами
const results1 = 
[
	new Result("Высокие результаты по первой шкале говорят в том, что у испытуемого ярко выражена потребность отдавать, делиться, содействовать, помогать. Направленность на других проявляется у него ярко.", 5-10),
	new Result("Низкие результаты говорят о направленности на себя, потребности брать, получать.", -10-(-5)),
	new Result("Результаты близкие к 0 говорят о том, что у респондента нет ярко выраженной потребности. И та, и другая потребность выражены в равной степени, нет жесткой установки.", -4-4)
];
const results2 = 
[
	new Result("Высокие результаты по этой шкале говорят о ярко выраженной потребности в общении.", 1-10),
	new Result("Низкие результаты говорят о том, что более выражена потребность в уединении.", -10-0)
];
const results3 = 
[
	new Result("Высокие результаты говорят о том, что испытуемый имеет ярко выраженную потребность в славе, переживании успеха на виду у других людей, в известности.", 1-10),
	new Result("Низкий результат говорит о желании быть незаметным.", -10-0)
];
const results4 = 
[
	new Result("Высокий результат говорит о потребности активно действовать, достигать поставленной цели, добиваться желаемых результатов.", 1-10),
	new Result("Низкие баллы говорят о пассивном отношении к деятельности. Иногда это проявляется в склонности больше размышлять, чем действовать, иногда — в ярко выраженной потребности в расслаблении.", -10-0)
];
const results5 = 
[
	new Result("При высоких баллах эта потребность выражается у респондента ярко.", 1-10),
	new Result("При низких — ярко выражена потребность в безопасности и формирующаяся на основе этой потребности осторожность.", -10-0)
];
const results6 = 
[
	new Result("При высоких баллах у испытуемого ярко выражено стремление к необычному, таинственному.", 1-10),
	new Result("При низких — проявляется тенденция к полезным вещам, на основе которой формируется прагматизм, как черта характера.", -10-0)
];
const results7 = 
[
	new Result("При ярко выраженной потребности (высокие баллы) испытуемый получает удовольствие от процесса получения знаний.", 1-10),
	new Result("При низких баллах эта потребность недостаточно развита.", -10-0)
];
const results8 = 
[
	new Result("При высоких баллах — потребность в восприятии прекрасного выражается ярко. Воспринимая прекрасное, респондент переживает сильные чувства, которые в современной практической психологии называются ресурсными.", 1-10),
	new Result("При низких баллах — эта потребность в восприятии прекрасного не развита.", -10-0)
];
const results9 = 
[
	new Result("При высоких баллах эта потребность выражена ярко. Комфортные условия для такого человека являются очень важными, а достижение комфорта является мощным мотивом деятельности. В психотерапии есть соответствующий термин: гедонистическая установка.", 1-10),
	new Result("При низких баллах можно говорить об аскетической установке личности.", -10-0)
];
const results10 = 
[
	new Result("При высоких баллах потребность в коллекционировании хорошо выражена.", 1-10),
	new Result("При низких - такая потребность не проявляется.", -10-0)
];

//Массив с вопросами
const questions = 
[   
	new Question("1. Я часто беспокоюсь о близких, друзьях.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("2. Испытываю потребность делиться с другими людьми своими мыслями и переживаниями.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("3. Мне очень приятно, когда на меня обращают внимание.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("4. Для меня всегда важно добиться успеха в работе.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("5. Я люблю острые ощущения.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("6. Я охотно побывал бы в каком-нибудь новом, неизведанном месте.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("7. Испытываю большую радость, самостоятельно решив трудную проблему.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("8. Люблю возвышенное чувство, возникающее при восприятии стихов, музыки и т.д.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("9. Предпочитаю простые радости (вкусно поесть, сладко поспать).", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("10. Люблю заниматься коллекционированием.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("11. Хочу приносить людям радость и счастье.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("12. Для меня важно одобрение окружающих.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("13. Приятно испытывать чувство превосходства над противником.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("14. Я увлекаюсь любой работой, которую выполняю.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("15. Охотно иду на риск.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("16. Иногда мне кажется, что должно произойти что-то необыкновенное.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),
	new Question("17. Люблю разбираться в причинах явлений, событий.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("18. Я могу прийти в восторг от красоты природы.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("19. Люблю состояние покоя и свободы от обязанностей.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("20. Радуюсь, когда пополняю свою коллекцию.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),
	new Question("21. Я всегда жалею неудачников.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("22. Я не смог бы (не смогла бы) обойтись без друзей.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("23. Я пойду на многое, чтобы завоевать почет и уважение окружающих.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("24. Приятно чувствовать, что день прошел недаром.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("25. Я человек решительный.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("26. Люблю все таинственное и необычное.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("27. Стремлюсь приводить свои знания в систему.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("28. Произведение искусства может тронуть меня до слез.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("29. Люблю приятное, бездумное времяпровождение, например, вечеринки.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("30. Люблю делать покупки.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("31. Радуюсь, когда кто-нибудь добивается успеха.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("32. Среди моих родственников, знакомых, есть люди, которых я обожаю.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("33. Я самолюбив(а).", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("34. Я чувствую радостное возбуждение, душевный подъем, когда работа идет хорошо.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("35. Я люблю преодолевать опасности.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("36. Иногда меня тянет странствовать.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),
	new Question("37. Я люблю читать о научных открытиях, поисках и находках.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("38. Я испытываю наслаждение, слушая любимую музыку.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("39. Я склонен (склонна) к лени.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("40. Люблю рассматривать свои коллекции.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),
	new Question("41. Я стараюсь помогать людям.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("42. Я чувствую большую благодарность к людям, которые делают мне добро.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("43. Мне всегда хочется взять реванш при неудаче.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("44. Мое настроение поднимается от сознания того, что работа выполнена добросовестно.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("45. Азарт, спортивная злость, обычно улучшает результаты моей деятельности.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("46. Я люблю помечтать.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("47. Самое приятное для меня переживание — радость открытия истины, чувство близости решения.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("48. Я часто переживаю чувство возвышенности и отрешенности при соприкосновении с прекрасным.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("49. Мне бы хотелось жить беззаботно и безмятежно.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	]),

	new Question("50. Я неохотно расстаюсь со своими вещами.", 
	[
		new Answer("✔ Безусловно, да", +2),
		new Answer("✔ Пожалуй, да", +1),
		new Answer("✔ Пожалуй, нет", -1),
		new Answer("✔ Безусловно, нет", -2)
	])
];

//Сам тест
const quiz = new Quiz(1, questions, results1, results2, results3, results4, results5, results6, results7, results8, results9, results10);

Update();

//Обновление теста
function Update()
{
	//Проверяем, есть ли ещё вопросы
	if(quiz.current < quiz.questions.length) 
	{
		//Если есть, меняем вопрос в заголовке
		headElem.innerHTML = quiz.questions[quiz.current].text;

		//Удаляем старые варианты ответов
		buttonsElem.innerHTML = "";

		//Создаём кнопки для новых вариантов ответов
		for(let i = 0; i < quiz.questions[quiz.current].answers.length; i++)
		{
			let btn = document.createElement("button");
			btn.className = "button";

			btn.innerHTML = quiz.questions[quiz.current].answers[i].text;

			btn.setAttribute("index", i);

			buttonsElem.appendChild(btn);
		}
		
		//Выводим номер текущего вопроса
		pagesElem.innerHTML = (quiz.current + 1) + " / " + quiz.questions.length;

		//Вызываем функцию, которая прикрепит события к новым кнопкам
		Init();
	}
	else
	{
		bodyElem[0].style.backgroundImage = "url(https://images.unsplash.com/photo-1582045741356-d2dae798716c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80)";
		headtextElem[0].style.fontSize = "18px";
		headtextElem[0].style.marginLeft = "20px";
		headtextElem[0].style.marginTop = "55px";
		footerElem[0].style.top = "5px";
		//Если это конец, то выводим результат
		buttonsElem.innerHTML = "";
		headElem.innerHTML = "1. Альтруистические эмоции. Баллы: " + quiz.score1 + "<br/>" + quiz.results1[quiz.result1].text + "<br/>" + "2. Коммуникативные эмоции. Баллы: " + quiz.score2 + "<br/>" + quiz.results2[quiz.result2].text + "<br/>" + "3. Глорические эмоции (от лат, gloria — слава). Баллы: " + quiz.score3 + "<br/>" + quiz.results3[quiz.result3].text + "<br/>" + "4. Праксические эмоции. Баллы: " + quiz.score4 + "<br/>" + quiz.results4[quiz.result4].text + "<br/>" + "5. Пугнические эмоции (от лат. pugna — борьба). Баллы: " + quiz.score5 + "<br/>" + "Эти эмоции связаны с потребностью рисковать, преодолевать опасности. " + quiz.results5[quiz.result5].text + "<br/>" + "6. Романтические эмоции. Баллы: " + quiz.score6 + "<br/>" + quiz.results6[quiz.result6].text + "<br/>" + "7. Гностические эмоции (от грен, gnosis — знание). Баллы: " + quiz.score7 + "<br/>" + "Эмоции, связанные с потребностью в получении знаний о новом, неизвестном. " + quiz.results7[quiz.result7].text + "<br/>" + "8. Эстетические эмоции. Баллы: " + quiz.score8 + "<br/>" + quiz.results8[quiz.result8].text + "<br/>" + "9. Гедонистические эмоции. Баллы: " + quiz.score9 + "<br/>" + "Эмоции, связанные с удовлетворением потребности в телесном и душевном комфорте. " + quiz.results9[quiz.result9].text + "<br/>" + "10. Акизитивные эмоции(от франц. acquisition приобретение). Баллы: " + quiz.score10 + "<br/>" + "Это эмоции, возникающие при наличии потребности в накоплении (коллекционировании) вещей, выходящей за пределы практической нужды в них. " + quiz.results10[quiz.result10].text; 
		pagesElem.innerHTML = "Интерпретация полученных результатов: <br/>";
	}
}

function Init()
{
	//Находим все кнопки
	let btns = document.getElementsByClassName("button");

	for(let i = 0; i < btns.length; i++)
	{
		//Прикрепляем событие для каждой отдельной кнопки
		//При нажатии на кнопку будет вызываться функция Click()
		btns[i].addEventListener("click", function (e) { Click(e.target.getAttribute("index")); });
	}
}

function Click(index) 
{
	//Получаем номер правильного ответа
	let correct = quiz.Click(index);

	//Находим все кнопки
	let btns = document.getElementsByClassName("button");

	//Ждём секунду и обновляем тест
	setTimeout(Update, 200);
}