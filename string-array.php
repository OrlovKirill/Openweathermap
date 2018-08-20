<?
// основной массив всех животных по континентам
$animals_place = [
	"Africa" => ["Syncerus caffer", "Loxodonta africana", "Hippopotamus amphibius"],
	"Australia" => ["Bubalus arnee", "Camelus", "Macropus", "Phascolarctos cinereus"],
	"Asia" =>  ["Elephas maximus", "Bos javanicus", "Arctictis binturong", "Ursus arctos"],
	"Europe" =>	["Sciurus vulgaris", "Oryctolagus cuniculus", "Sus scrofa", "Lepus"]
];
// будущие массивы
$continents = [];
$second_word = [];
$first_word = [];
// отобразить всех животных по континентам
foreach($animals_place as $continent => $animals){
	$continents[] = $continent;
	echo "<h2>$continent</h2>";
	for($i = 0; $i <count ($animals)-1; $i++){
		echo $animals[$i] . ', ';
	}
	echo (end($animals)). ".";
// вытащить все первые слова в отдельный массив и вторые слова из животных  
	foreach ($animals as $double) {
		$words_count= explode (" ", $double);
		if(count($words_count) == 2){
			$first_word[] = $words_count[0];
			$second_word[] = $words_count[1];
		}
	}
}
echo "<br>";
echo "<h2>Выдуманные животные</h2>";
// проверка print_r($second_word)
//перемешиваем все и выводим на экран
shuffle($second_word);
shuffle($first_word);
	for ($i=0; $i <count($second_word)-1; $i++){
		echo $first_word[$i] .' '. $second_word[$i] .', ' ;
	}
	echo (end($first_word).' '. end($second_word). '.');

?> 