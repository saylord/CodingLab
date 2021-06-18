const headElem = document.getElementById("head");
const bodyElem = document.getElementsByTagName("body");
const headtextElem = document.getElementsByClassName("quiz__head");
const buttonsElem = document.getElementById("buttons");
const pagesElem = document.getElementById("pages");

//Класс, который представляет сам тест
class Quiz
{
	constructor(type, questions, results1, results2, results3, results4)
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
		//Количество набранных очков
		this.score = 0;
		this.score1 = 0;
		this.score2 = 0;
		this.score3 = 0;
		this.score4 = 0;

		//Номер результата из массива
		this.result1 = 0;
		this.result2 = 0;
		this.result3 = 0;
		this.result4 = 0;

		//Номер текущего вопроса
		this.current = 0;

		this.results = [];
	}

	Click(index)
	{
		//Добавляем очки
		let value = this.questions[this.current].Click(index);
		this.score += value;
		this.results.push(value);
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
		for(let i = 0; i < this.results.length; i++){
			if (this.results[i] == 1) { this.score1++; }
			if (this.results[i] == 2) { this.score2++; }
			if (this.results[i] == 3) { this.score3++; }
			if (this.results[i] == 4) { this.score4++; }
	    }
	    console.log(this.score1);
	    console.log(this.score2);
	    console.log(this.score3);
	    console.log(this.score4);
	    if(this.score1 == 5 && this.score3 == 5 && this.score4 == 5 && this.score2 == 5){
	    	this.result4 = 0;
	    	this.result2 = 0;
	    	this.result3 = 0;
	    	this.result1 = 0;
	    }
	    else if (this.score1 > this.score2 && this.score1 > this.score3 && this.score1 > this.score4){
	    	this.result2++;
	    	this.result3++;
	    	this.result4++;
	    }
	    else if (this.score2 > this.score1 && this.score2 > this.score3 && this.score2 > this.score4){
	    	this.result1++;
	    	this.result3++;
	    	this.result4++;
	    }
	    else if (this.score3 > this.score2 && this.score3 > this.score1 && this.score3 > this.score4){
	    	this.result2++;
	    	this.result1++;
	    	this.result4++;
	    }
	    else if (this.score4 > this.score2 && this.score4 > this.score3 && this.score1 < this.score4){
	    	this.result2++;
	    	this.result3++;
	    	this.result1++;
	    }
	    else{
	    	this.result2++;
	    	this.result3++;
	    	this.result4++;
	    	this.result1++;
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
	Check(value)
	{
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

//Массив с результатами
const results1 = 
[
	new Result("Холерик:"+ "<br/>" +"  Неуравновешенный тип. Бурные эмоции, вспышки. Речь неровная, сбивчивая. Резкая смена настроений. С людьми неуживчив, прямолинеен. Не умеет ждать, нетерпелив. Стремится к новому постоянно, неустойчив в интересах." + "<br/>", )
];
const results2 = 
[
new Result("Сангвиник:"+ "<br/>" +"  «Живой», общителен, сохраняет самообладание в сложной обстановке. Легко входит в новый коллектив, не скован. Быстро переключается с одной работы на другую. В решениях часто не собран. Речь четкая, громкая, быстрая." + "<br/>", )
];
const results3 = 
[
	new Result("Флегматик:"+ "<br/>" +"  Уравновешенный. Рассудителен, осторожен, общителен в меру. Малоподвижен, инертен. Устойчив в интересах. Придерживается строгого распорядка на рабочем месте. Медленно переключается с одной работы на другую." + "<br/>", )
];
const results4 = 
[
	new Result("Меланхолик:"+ "<br/>" +"  Малоподвижный, неуравновешенный. Все эмоции внутри. Нерешителен, не верит в себя, очень чувствителен. Замкнут, склонен к одиночеству. Устойчив в интересах. На контакты идет тяжело." + "<br/>", )
];
//Массив с вопросами
const questions = 
[   
	new Question("1. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ суетливы и неусидчивы", 1),
		new Answer("✔ жизнерадостны и веселы", 2),
		new Answer("✔ хладнокровны и спокойны", 3),
		new Answer("✔ застенчивы и стеснительны",4)
	]),

		new Question("2. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ вспыльчивы и невыдержанны", 1),
		new Answer("✔ деловиты и  энергичны", 2),
		new Answer("✔ обстоятельны и последовательны", 3),
		new Answer("✔ в новой обстановке теряетесь",4)
	]),

		new Question("3. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ прямолинейны и резки по отношению к другим людям", 1),
		new Answer("✔ склонны себя переоценивать", 2),
		new Answer("✔ умеете ждать", 3),
		new Answer("✔ сомневаетесь в свои силах", 4)
	]),	

		new Question("4. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ незлопамятны", 1),
		new Answer("✔ если что-то перестает интересовать, быстро остываете", 2),
		new Answer("✔ строго придерживаетесь  системы в работе и распорядка дня", 3),
		new Answer("✔ приспосабливаетесь невольно к характеру собеседника",4)
	]),

		new Question("5. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ вы обладатель порывистых, резких движений", 1),
		new Answer("✔ быстро засыпаете", 2),
		new Answer("✔ вам тяжело приспособиться к новой обстановке", 3),
		new Answer("✔ покорны",4)
	]),

		new Question("6. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ к недостаткам нетерпимы", 1),
		new Answer("✔ работоспособны, выносливы", 2),
		new Answer("✔ в своих интересы постоянны", 3),
		new Answer("✔ легко ранимы, чувствительны",4)
	]),

		new Question("7. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ нетерпеливы", 1),
		new Answer("✔ бросаете начатые дела", 2),
		new Answer("✔ рассудительны и осторожны", 3),
		new Answer("✔ трудно устанавливаете контакт с новыми людьми",4)
	]),

		new Question("8. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ у вас выразительная мимика", 1),
		new Answer("✔ быстрая, громкая речь с живыми жестами", 2),
		new Answer("✔ медленно включаетесь в работу", 3),
		new Answer("✔ очень обидчивы",4)
	]),

		new Question("9. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ у вас быстрая, страстная речь", 1),
		new Answer("✔ в новую работу включаетесь быстро", 2),
		new Answer("✔ порыв сдерживаете легко", 3),
		new Answer("✔ очень впечатлительны",4)
	]),

		new Question("10. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ работаете рывками", 1),
		new Answer("✔ за любое новое дело беретесь с увлечением", 2),
		new Answer("✔ попусту сил не растрачиваете", 3),
		new Answer("✔ у вас тихая , слабая речь",4)
	]),

		new Question("11. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ вам присуща несобранность", 1),
		new Answer("✔ настойчивы в достижении цели", 2),
		new Answer("✔ вялы, малоподвижны", 3),
		new Answer("✔ ищите сочувствия других",4)
	]),

		new Question("12. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ быстро решаете и действуете", 1),
		new Answer("✔ в сложной обстановке сохраняете самообладание", 2),
		new Answer("✔ ровные отношения со всеми", 3),
		new Answer("✔ необщительны",4)
	]),

		new Question("13. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ инициативны и решительны", 1),
		new Answer("✔ быстро схватываете новое", 2),
		new Answer("✔ не любите попусту болтать, молчаливы", 3),
		new Answer("✔ одиночество переносите легко",4)
	]),

		new Question("14. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ стремитесь к новому", 1),
		new Answer("✔ у вас всегда бодрое настроение", 2),
		new Answer("✔ любите аккуратность", 3),
		new Answer("✔ робки, малоактивны",4)
	]),

		new Question("15. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ упрямы", 1),
		new Answer("✔ в интересах и склонностях не постоянны", 2),
		new Answer("✔ у вас спокойная, ровная речь с остановками", 3),
		new Answer("✔ при неудачах чувствуете растерянность и подавленность",4)
	]),

		new Question("16. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ имеете склонность к горячности", 1),
		new Answer("✔ тяготитесь однообразной кропотливой работой", 2),
		new Answer("✔ мало восприимчивы к порицанию и одобрению", 3),
		new Answer("✔ у вас  высокие требования к окружающим и себе",4)
	]),

		new Question("17. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ склонность к риску", 1),
		new Answer("✔ к разным обстоятельствам приспосабливаетесь легко", 2),
		new Answer("✔ начатое дело доводите до конца", 3),
		new Answer("✔ у вас быстрая утомляемость",4)
	]),

		new Question("18. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ резкие смены настроения", 1),
		new Answer("✔ склонны отвлекаться", 2),
		new Answer("✔ обладаете выдержкой", 3),
		new Answer("✔ слишком восприимчивы к порицанию и одобрению",4)
	]),

		new Question("19. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ бываете агрессивным, задирой", 1),
		new Answer("✔ отзывчивы и общительны", 2),
		new Answer("✔ незлобивы", 3),
		new Answer("✔ мнительны, подозрительны",4)
	]),

		new Question("20. Выберите наиболее подходящее для вас из четырех утверждений", 
	[
		new Answer("✔ в споре находчивы", 1),
		new Answer("✔ неудачи переживаете легко", 2),
		new Answer("✔ терпеливы и сдержанны", 3),
		new Answer("✔ имеете склонность уходить в себя",4)
	])
];

//Сам тест
const quiz = new Quiz(1, questions, results1, results2, results3, results4);

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
		bodyElem[0].style.backgroundImage = "url(https://images.unsplash.com/photo-1558591710-4b4a1ae0f04d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80)";
		headtextElem[0].style.fontSize = "23px";
		headtextElem[0].style.marginLeft = "60px";
		headtextElem[0].style.marginTop = "70px";
		//Если это конец, то выводим результат
		buttonsElem.innerHTML = "";
		//headElem.innerHTML = quiz.results1[quiz.result1].text + quiz.results2[quiz.result2].text + quiz.results3[quiz.result3].text + quiz.results4[quiz.result4].text;
		pagesElem.innerHTML = "Ваши результаты: <br/> ";
		if(quiz.result1 == 0){
			headElem.innerHTML = quiz.results1[quiz.result1].text;
		}
		else if(quiz.result2 == 0){
			headElem.innerHTML = quiz.results2[quiz.result2].text
		}
		else if(quiz.result3 == 0){
			headElem.innerHTML = quiz.results3[quiz.result3].text;
		}
		else if(quiz.result4 == 0){
			headElem.innerHTML = quiz.results4[quiz.result4].text;
		}
		else{
			headElem.innerHTML = "Внимание! У вас было замечено совпадение с несколькими типами характера, это означает что результаты теста считаются недостоверными, так как ответы были неискренними.";
		}
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
		btns[i].addEventListener("click", function (e) { Click2(e.target.getAttribute("index")); });
	}
}

function Click2(index) 
{
	//Получаем номер правильного ответа
	let correct = quiz.Click(index);

	//Находим все кнопки
	let btns = document.getElementsByClassName("button");

	//Ждём секунду и обновляем тест
	setTimeout(Update, 10);
}