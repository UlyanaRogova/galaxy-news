<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
?>

<div class="news">
	<?php
	require 'main/controllers/BlockNews.php';
	$grid = new BlockNews();
	$data = $grid->getGridNews();
	foreach($data as $news):
		$id = $news['id'];
		$date_db = date_create($news['date']);
		$date = date_format( $date_db, 'd.m.Y',);
		$title = $news['title'];
		$announce = $news['announce'];
	?>

	<div class="news-subject">
		<div class="news-time">
			<p> <?php echo $date ?></p>
		</div>
		<div class="news-title">
			<h2> <?php echo $title ?> </h2>
		</div>
		<div class="news-announce">
			<?php echo $announce ?>
		</div>
		<div class="button">
			<a href="/project/work_news.php/?id=<?php echo $id;?>">
				ПОДРОБНЕЕ <span class="arrow-link">&#8594</span>
			</a>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<div class="pagination wrapper">
	<?php 
	require_once 'main/controllers/Pagination.php';
	$pages = new Pagination(); 
	$pages->showPrev();
	$pages->showPages();
	$pages->showNext(); 
	?>
</div>