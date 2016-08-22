<html>
<body class="respond">
<?php
	$question = $_POST['userInput'];

	echo "<p>You asked: $question</p>";

	// Search userInput for key words that will trigger a funny response
    $search = $_GET['userInput'];

	// Store responses in an array and return a random item based on the number called into $var
	$response = array(
		"You would ask that wouldn't you?",
		"Probably",
		"Never.",
		"OK but just this one time.",
		"Fine... Absolutely!",
		"Hahaha. No.",
		"Ummm, no.",
		"Ask again later (and not just 2 seconds from now you jerk).",
		"Error. Bad user. Have someone else ask the question.",
		"If you have to ask, you already know the answer.",
		"I can't believe you'd ask that!",
		"Don't you have some work to do?",
		"Outlook not good",
		"Absolutely!",
		"Why do you care?",
		"Bite me.",
		"Survey says no",
		"You do realize you're asking a machine right? How did things get this low?",
		"Ummmm. Sure. Why not?",
		"You'll never know unless you try.",
		"Never.",
		"OK. Yeah.",
		"What do you want me to say? Ummm.... yes?",
		"Of course, but who isn't?",
		"Absotively Posilutely"
	);

	if($search == "jerk"){

		echo "<h2>$response[22]</h2><h6>Response Number: 21</h6>\n";
		include("includes/askagain.inc.php");

	}else{

	$arrayLength = (count($response))-1;

	$number = rand(0,$arrayLength);

	echo "<h2>$response[$number]</h2><h6>Response Number: $number</h6>\n";

	include("includes/askagain.inc.php");

	}

	// Test to make sure all the outputs work.
		/*$counter = 0; $response = array(
		"You would ask that wouldn't you?",
		"Probably",
		"Never.",
		"OK but just this one time.",
		"Fine... Absolutely!",
		"Hahaha. No.",
		"Ummm, no.",
		"Ask again later (and not just 2 seconds from now you jerk).",
		"Error. Bad user. Have someone else ask the question.",
		"If you have to ask, you already know the answer.",
		"I can't believe you'd ask that!",
		"Don't you have some work to do?",
		"Outlook not good",
		"Absolutely!",
		"Why do you care?",
		"Bite me.",
		"Survey says no",
		"You do realize you're asking a machine right? How did things get this low.",
		"Ummmm. Sure. Why not?",
		"You'll never know unless you try."
	);
	$arrayLength = count($response);


	while ($counter < $arrayLength+1)
	{
		echo $response[$counter] ;
		echo "<br>";
		$counter += 1;
	}

	echo "<h3>Ask another question</h3>";

	include("8ball.php");*/


	// Old method - Did not make a lot of sense
	/*$response = array("You would ask that wouldn't you?","Probably","Hahaha. No.");
	$string = strlen($question);
	$var = rand(1,100);
	$number = round($var + $string / $var);
	if ($number > 50)
	{
	echo "<h2>$response[0]</h2><h6>Response Number: $number</h6>\n";
	} elseif ($number  > 25)
	{    echo "<h2>$response[1]</h2><h6>Response Number: $number</h6>\n";
	} else
	{
     		echo "<h2>$response[2]</h2><h6>Response Number: $number</h6>\n";
	}*/



?>

</body>
</html>
