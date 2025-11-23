<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
?>
<div class ="menu">
	<a href="/project/main.php">Главная</a>
	<p>/</p>
	<?php
	require_once 'work_news/controllers/WorkNewsPage.php';
	$work_news = new WorkNews();
	$news = $work_news->getWorkNewsByIndex();
	$title = $news['title'];
	$date_db = date_create($news['date']);
	$date = date_format($date_db, 'd.m.Y');
	$announce = $news['announce'];
	$content = $news['content'];
	$pic = "/project/pics/$news[image]";
	?>
	<p> <?php echo $title ?> </p>
</div>
<h1> <?php echo $title ?> </h1>
<div class="main-content">
	<div class ="text">
		<div class="news-time">
			<p> <?php echo $date ?> </p>
		</div>
		<div class="news-announce">
			<h2> <?php $announce ?> </h2>
		</div>
		<div class="news-text"> 
			<?php echo $content ?>
		</div>
	</div>
	<div class="img">
		<img src="<?php echo $pic ?>" alt="content picture">
	</div>
</div>
<div class="back-page">
	<a href="/project/main.php">
		<span class="left-arr">&#8592</span>
		НАЗАД К НОВОСТЯМ
	</a>
</div>