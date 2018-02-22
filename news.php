<?php
define('NEWS_TITLE', 'news_title.txt');
define('NEWS_CONTENT_GENERAL', 'news_content_general.txt');

class news {
	private $date;
	private $title;
	private $place;
	private $foto;
	private $content;

	public function date() {
		echo $this->date = date('l jS \of F Y h:i A') . '<br>';
	}
	public function title() {
		echo $this->title = file_get_contents(NEWS_TITLE) . '<br>';
	}
	public function content() {
		echo $this->content = file_get_contents(NEWS_CONTENT_GENERAL) . '<br>';	
	}	

}
?>
<html>
	<head>
		<meta charset="utf-8">
		<style type="text/css">
		  .news {
		  	max-width: 400px;
		  	padding: 10px;
		  }
		  .date_news {color: lightblue;}
		  .header_news {font-weight: 900;}
		  .content_news {text-align: justify;}
		</style>
	</head>
	<body>
		<section class="news">
		  	<?$accident = new news();?>
				<div class="date_news">			
					<?	$accident->date();?></div>
					<div class="header_news">
					<?	$accident->title();?></div>
					<div class="content_news">
					<?	$accident->content();?></div>
		</section>		  
	</body>
</html>	

