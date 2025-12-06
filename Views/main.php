<div class="banner" style="background-image: url( '<?= '/resources/pics/' . $bannerNews['image'] ?>' );">
	<div class="main wrapper">
		<a href="/detail/?id=<?= $bannerNews['id'] ?>">
			<h1> <?= $bannerNews['title'] ?> </h1>
		</a>
		<?= $bannerNews['announce'] ?>
	</div>
</div>

<div class="block-news wrapper">
	<h1>Новости</h1>
	<div class="news">
		<?php foreach ($news as $item) {
			$dateDb = date_create($item['date']);
			$date = date_format($dateDb, 'd.m.Y', );
			$item['date'] = $date; ?>
			<a href="/detail/?id=<?= $item['id']; ?>">
				<div class="news-subject">
					<div class="news-time">
						<p> <?= $item['date'] ?></p>
					</div>
					<div class="news-title">
						<h2> <?= $item['title'] ?> </h2>
					</div>
					<div class="news-announce">
						<?= $item['announce'] ?>
					</div>
					<div class="button">
						ПОДРОБНЕЕ <span class="arrow-link">&#8594</span>
					</div>
				</div>
			</a>
		<?php } ?>
	</div>
</div>

<div class="pagination wrapper">

	<?php

	$pageId = $pages['pageId'];

	$firstPage = $pages['firstPage'];

	$lastPage = $pages['lastPage'];

	$countPages = $pages['countPages'];

	if ($pageId != 1) {
		$prev = $pageId - 1; ?>
		<a href="?page=<?= $prev ?>">
			<div class="prev-page">&#10132</div>
		</a>
	<?php }

	for ($i = $firstPage; $i <= $lastPage; $i++) {
		if ($i == $pageId) {
			$class = 'active'; ?>
			<a href="?page=<?= $i ?>">
				<div class="page <?= $class ?>"><?= $i ?></div>
			</a>
			<?php
		} else { ?>
			<a href="?page=<?= $i ?>">
				<div class="page"><?= $i ?></div>
			</a>
		<?php }
	}

	if ($pageId != $countPages) {
		$next = $pageId + 1; ?>
		<a href="?page=<?= $next ?>">
			<div class="next-page">&#10132</div>
		</a>
	<?php } ?>
</div>