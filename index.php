<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестово задание</title>
</head>
<body class="full">
	<div class="graph">
		<ul class="months">
		<li></li>
		<li>Мар</li>
		<li>Апр</li>
		<li>Май</li>
		<li>Июн</li>
		<li>Июл</li>
		<li>Авг</li>
		<li>Сен</li>
		<li>Окт</li>
		<li>Ноя</li>
		<li>Дек</li>
		<li>Янв</li>
		<li>Фев</li>
		</ul>
		<ul class="days">
		<li>Пн</li>
		<li>Вт</li>
		<li>Ср</li>
		<li>Чт</li>
		<li>Пт</li>
		<li>Сб</li>
		<li>Вс</li>
		</ul>
		
		<ul class="squares"></ul>
  </div>

<script>
	const squares = document.querySelector('.squares');
	for (var i = 1; i < 365; i++) {
		const level = Math.floor(Math.random() * 5);  
		squares.insertAdjacentHTML('beforeend', `<li data-level="${level}"></li>`);
	}
</script>

<style>
	li{list-style-type: none;}
	:root {
		--square-size: 15px;
		--square-gap: 5px;
		--week-width: calc(var(--square-size) + var(--square-gap));
	}
	.months { grid-area: months; }
	.days { grid-area: days; }
	.squares { grid-area: squares; }
	.graph {
		display: inline-grid;
		grid-template-areas: "empty months"	"days squares";
		grid-template-columns: auto 1fr;
		grid-gap: 10px;
	}
	.months {
		display: grid;
		grid-template-columns:
							calc(var(--week-width) * 2) /* Отступ */ 
							calc(var(--week-width) * 4) /* Янв */
							calc(var(--week-width) * 4) /* Фев */
							calc(var(--week-width) * 4) /* Мар */
							calc(var(--week-width) * 5) /* Апр */
							calc(var(--week-width) * 4) /* Май */
							calc(var(--week-width) * 4) /* Июн */
							calc(var(--week-width) * 5) /* Июл */
							calc(var(--week-width) * 4) /* Авг */
							calc(var(--week-width) * 4) /* Сен */
							calc(var(--week-width) * 5) /* Окт */
							calc(var(--week-width) * 4) /* Ноя */
							calc(var(--week-width) * 5) /* Дек */;
	}
	.days,.squares {
		display: grid;
		grid-gap: var(--square-gap);
		grid-template-rows: repeat(7, var(--square-size));
	}
	.squares {
		grid-auto-flow: column;
		grid-auto-columns: var(--square-size);
	}
	.graph {
		padding: 20px;
		border: 1px #e1e4e8 solid;
		margin: 20px;
	}
	.days li:nth-child(even) {
  		visibility: hidden;
	}
	.days li:nth-child(7) {
  		visibility: hidden;
	}
	.squares li {
  		background-color: #ebedf0;
	}
	.squares li[data-level="1"] {
  		background-color: #e1e4e8;
	}
	.squares li[data-level="2"] {
  		background-color: #c6e48b;
	}
	.squares li[data-level="3"] {
  		background-color: #7bc96f;
	}
	.squares li[data-level="4"] {
  		background-color: #196127;
	}

</style>
</body>
</html> 
