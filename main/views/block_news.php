<div class="news">
	<?php
	require_once 'main/controllers/News.php';

	$blockNews = new News();
	$data = $blockNews->getNews();

	foreach ($data as $news) {
		$id = $news['id'];
		$date_db = date_create($news['date']);
		$date = date_format($date_db, 'd.m.Y', );
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
				<a href="/work_news.php/?id=<?php echo $id; ?>">
					ПОДРОБНЕЕ <span class="arrow-link">&#8594</span>
				</a>
			</div>
		</div>
	<?php } ?>
</div>
<div class="pagination wrapper">
	<?php
	require_once 'main/controllers/Pagination.php';

	$pagination = new Pagination();
	$pages = $pagination->getPage();

	$id_page = $pages['id_page'];

	$first_page = $pages['first_page'];

	$last_page = $pages['last_page'];

	$count_pages = $pages['count_pages'];

	if ($id_page != 1) {
		$prev = $id_page - 1; ?>
		<a href="?page=<?php echo $prev ?>">
			<div class="prev-page">&#10132</div>
		</a>
	<?php }

	for ($i = $first_page; $i <= $last_page; $i++) {
		if ($i == $id_page) {
			$class = 'active'; ?>
			<a href="?page=<?php echo $i ?>">
				<div class="page <?php echo $class ?>"><?php echo $i ?></div>
			</a>
			<?php
		} else { ?>
			<a href="?page=<?php echo $i ?>">
				<div class="page"><?php echo $i ?></div>
			</a>
		<?php }
	}

	if ($id_page != $count_pages) {
		$next = $id_page + 1; ?>
		<a href="?page=<?php echo $next ?>">
			<div class="next-page">&#10132</div>
		</a>
	<?php } ?>
</div>