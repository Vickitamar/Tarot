<?php

$stmt = $connect->query("SELECT * FROM cards ORDER BY RAND() LIMIT 1");
$card = $stmt->fetch();



?>


<?php
			$suits = array('Clubs', 'Diamonds');
			$cards = array(2, 5);
			$deck = array();

			foreach ($suits as $suit) {
			 foreach ($cards as $card) {
			   $deck[]=$card. "of" . $suit;
			 }
			}

			//shuffle($deck);

			$image = $deck[array_rand($deck)];
		?>



		<?php echo $row['user']; ?>	