<?php declare(strict_types=1); //Pour faire la difference entre les types des parametres ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LearnToCode</title>
</head>
<body>
	<h1>Bonjour tout le monde !!</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cumque quia inventore doloribus. Ullam veritatis, nobis adipisci nesciunt sint dicta alias ex, sed quod, natus in autem fugiat enim ea repellendus quibusdam. Beatae magnam excepturi officia ducimus quae eveniet, quibusdam facilis delectus. Facere, est cum ipsa labore voluptate nesciunt odio dolorum perferendis impedit recusandae corporis consequuntur rerum iste iure doloribus temporibus enim incidunt! Sequi totam facere officiis, quis ad quia quas ab dolore id fuga tenetur nihil labore voluptates omnis aliquam corporis sint similique error quae deleniti quo! Id cumque eos saepe magni ab consectetur minima, commodi est mollitia alias, beatae et sit in laboriosam, nisi, sed at qui eveniet exercitationem necessitatibus. Dolor ut labore reiciendis in, quidem consequuntur, quisquam ex, odio vitae dignissimos itaque, pariatur repellendus quo! Sunt est ex voluptatem ipsam accusantium suscipit? Non, fugit, doloremque. Magnam ea sed voluptate voluptas rerum minus quaerat perferendis cum dolorem fugiat assumenda repellendus possimus ullam aliquam rem inventore, quas officia libero atque voluptatem deleniti delectus sapiente tempora. Doloribus laudantium velit nostrum maxime corrupti vitae vel ipsum, tempore ad ut deleniti omnis cupiditate, itaque iure totam suscipit, consequatur ab dolorum et quia nesciunt atque. Cupiditate eius, nam omnis consequatur in non sequi.</p>
	
	<?php  
		/****************************Declaration des variables et outputs.***************************/

		// echo "<h1>Hello world !!</h1> <br>  How are you ? <br>";

		// $num = 5;

		// $num2 = 2;

		// $num3 = $num ** $num2; // Pour calculer la puissance càd $num à la puissance de $num2

		// define('maConstante','Bonjour');

		// echo 'la valeur de num est ' . $num3 . ' et c\'est tout';
		// echo "la valeur de num est $num3 et c'est tout";



		/********************************Les Chaines de caracteres*********************************/

		// $var = 'Hello world !!';

		// echo 'La longueur de cette chaine est : ' . strlen($var) . '<br>';

		// echo 'Dans cette chaine il y a ' . str_word_count($var) . ' mots<br>';

		// echo 'La position de world dans var est: ' . strpos($var, 'world') . '<br>';

		// echo str_replace('world', 'every body', $var);

		/********************************Les Tableaux************************************/

		//-------Les tableax indicés:-------

		//++++Methode1++++
		// $notes[0] = 17;
		// $notes[1] = 18;

		// echo $notes[0];

		//++++Methode2++++
		// $notes[] = 17;
		// $notes[] = 18;

		// echo $notes[0];

		//++++Methode3++++
		// $notes = array(17,18,20);

		// echo $notes[0];


		//-------Les tableax associatifs:-------

		//++++Methode1++++
		// $notes['anas'] = 18;
		// $notes['hamza'] = 15;

		// echo $notes['anas'];


		//++++Methode2++++
		// $notes = array('anas'=>18,'hamza'=>15);

		// echo $notes['anas'];

		//++++Methode d'affichage dans les tableaux associatifs:++++
		// foreach ($notes as $key => $value) {
		// 	echo "l'indice est: $key et la valeur est $value<br>";
		// }


		//-------Les tableax multidimensionnels:-------

		//++++Methode1++++
		// $notes = array(array('anas',17,20),
		// 			   array('hamza',15,22));


		// echo $notes[0][2];

		//-------Les fonctions de calcul des tailles des tableaux::-------
		// echo count($notes);
		// echo sizeof($notes);

		//-------Les fonctions de trie des tableaux indicés:-------

		// $notes = array(17,18,20);

		/*sort($notes);  //par ordre croissant 
		rsort($notes); // par ordre decroissant*/


		//-------Les fonctions de trie des tableaux associatifs:-------

		// $notes = array('anas'=>18,'hamza'=>15);

		//++++Le trie par valeur:++++

		// asort($notes); //par ordre croissant 

		// foreach ($notes as $key => $value) {
		// 	echo "l'indice est: $key et la valeur est $value<br>";
		// }

		// arsort($notes); // par ordre decroissant

		// foreach ($notes as $key => $value) {
		// 	echo "l'indice est: $key et la valeur est $value<br>";
		// }

		//++++Le trie par indice:++++

		// ksort($notes); //par ordre croissant 

		// foreach ($notes as $key => $value) {
		// 	echo "l'indice est: $key et la valeur est $value<br>";
		// }

		// krsort($notes);  // par ordre decroissant

		// foreach ($notes as $key => $value) {
		// 	echo "l'indice est: $key et la valeur est $value<br>";
		// }




		/********************************Les Conditions************************************/


		// $num = 9;

		// if($num < 0)
		// 	echo 'Ce nombre est negatif';
		// elseif($num == 0)
		// 	echo 'Ce nombre est nul';
		// else
		// 	echo 'Ce nombre est positif';


		// switch ($num) {
		// 	case 8:
		// 		echo 'Ce nombre est egale a 8';
		// 		break;
		// 	case 9:
		// 		echo 'Ce nombre est egale a 9';
		// 		break;		
		// 	default:
		// 		echo 'Ce nombre est inconnu';
		// 		break;
		// }



		/********************************Les Boucles************************************/

		// for ($i=0; $i < 9; $i++) { 
		// 	echo $i . '<br>';
		// }

		

		// $i = 9;


		// while ($i < 13){

		// 	echo 'Hello world !!';

		// 	$i++;

		// }


		// $i = 9;

		// do{
		// 	echo 'Hello world !!';
		// 	$i++;

		// }while($i < 13);
		
		/********************************Les fonctions************************************/

		//Fonction qui ne retourne aucune valeur (Procedure)

		// function fct(){
		// 	echo 'Hello world !!';
		// }

		// fct();

		//*********************************************************//
		

		//Fonction qui retourne une valeur

		// function fct(){
		// 	return 'Hello world !!';
		// }

		// echo fct();

		//*********************************************************//
		
		//On peut ajouter des parametres aux fonctions

		// function fct($per){
		// 	echo "Hello $per !!";
		// }

		// fct('anas');

		//*********************************************************//
		
		//Et on peut donner à chaque parametre un type specifie

		// function fct(string $per){
		// 	echo "Hello $per !!";
		// }

		// fct('anas');

		//*********************************************************//

		//On peut aussi donner aux parametres des valeurs par defaut

		// function setAge(int $age = 10){
		// 	echo $age;
		// }

		// setAge(); //Dans ce cas on peut ne pas donner aucun argument à la fonction

		//*********************************************************//
		
		//On peut aussi specifier le type de retour

		// function fct(float $num1,float $num2){
		// 	return (int) ($num1 + $num2);
		// }

		// echo fct(5.2,5.3);

	?>

</body>
</html>
