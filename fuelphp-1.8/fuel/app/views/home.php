<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		
		<title>Home</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.1.2/css/bulma.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	    <?php echo Asset::css('mainstyle.css'); ?>
	    <?php echo Asset::js('mainjs.js'); ?>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	</head>
	<body>
		<div class="body-wrapper">
			<div class="container is-fluid">
				<div class="notification">
		

	<div class="content01">
		<div class="content01-text">
			
				<p>こんにちはnameさん</p>
				<p>あなたが借りている書籍はn件です。</p>
		</div>
		<div class="control content01-button">
			<button class="button"><a href="">詳しく見る</a></button>
		</div>
	</div>
	
	<div class="content02">
		<h1 class="content02-title">
			HOW TO USE
		</h1>
		<hr>

		<div class="content02-text">
			<p>1.本を棚から見つける</p>
			<p>2.専用端末でコードをスキャン</p>
			<p>3.ログインして貸出確定</p>
			<p>4.本を再度スキャンで返却完了</p>
		</div>
	</div>
	
	<div class="content03">
		<h1 class="content03-title">
			LIST
		</h1>
		<hr>
	</div>


<?php foreach ($books_data as $item): ?>
	<div class="level is-mobile book-data">
			<div class="level-item">
				<?php echo $item->image; ?>
			</div>
			<div class="level-item has-text-centered">
				<?php echo $item->title; ?>
				<?php echo $item->status; ?>
			</div>
	</div>
<?php endforeach; ?>	


 
   
  </div>
</div>




	
	</body>


</html>
