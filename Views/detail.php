<div class="content-news wrapper">
	<div class="menu">
		<a href="/">Главная</a>
		<p>/</p>
		<p> <?= $news['title'] ?> </p>
	</div>
	<h1> <?= $news['title'] ?> </h1>
	<div class="main-content">
		<div class="text">
			<div class="news-time">
				<p> <?= $news['date'] ?> </p>
			</div>
			<div class="news-announce">
				<h2> <?= $news['announce'] ?> </h2>
			</div>
			<div class="news-text">
				<?= $news['content'] ?>
			</div>
		</div>
		<div class="img">
			<img src="<?= '/resources/pics/' . $news['image'] ?>" alt="content picture">
		</div>
	</div>

	<div class="back-page">
		<a href="/">
			<span class="left-arr">&#8592</span>
			НАЗАД К НОВОСТЯМ
		</a>
	</div>
</div>