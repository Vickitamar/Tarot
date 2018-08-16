<?php 
 //login_success.php 
 require('core/init.php'); 
  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Welcome '.$_SESSION["username"].'</h3>';  
        
 }  
 else  
 {  
      header("location:login-handler.php");  
 }  

$stmt = $connect->query("SELECT * FROM cards ORDER BY RAND() LIMIT 1");
$card = $stmt->fetch();
?>

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Tarot</title>            
           <link rel="stylesheet" type="text/css" href="assets/css/main.css">
           <link rel="stylesheet" type="text/css" href="assets/css/background.css">             
      </head>  
      <body class="mainWrapper">
      	<div class="header">
 			<h1>game</h1>
 		</div>

 		<div class="cardBack">
 			<img src="assets/images/cardBack.jpg" alt="card back" />
 		</div>		
		
		<div class="card">			
			<img src="assets/images/<?php echo $card['image']; ?>" />
		</div>

		<div class="fortune">
			<p><?php echo $card['description']; ?></p>
		</div>
		
		<div class="empty"></div>
		<div class="empty4"></div>
		<div class="col1"></div>
		<div class="col2"></div>
		<div class="col3"></div>
		<div class="col4"></div>
		<div class="col5"></div>
		<div class="col6"></div>
			
		</body>
</html>	