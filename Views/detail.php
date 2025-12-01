<div class="content-news wrapper">
	<div class="menu">
		<a href="/">Главная</a>
		<p>/</p>
		<p> <?php echo $news['title'] ?> </p>
	</div>
	<h1> <?php echo $news['title'] ?> </h1>
	<div class="main-content">
		<div class="text">
			<div class="news-time">
				<p> <?php echo $news['date'] ?> </p>
			</div>
			<div class="news-announce">
				<h2> <?php $news['announce'] ?> </h2>
			</div>
			<div class="news-text">
				<?php echo $news['content'] ?>
			</div>
		</div>
		<div class="img">
			<img src="<?= '/pics/' . $news['image'] ?>" alt="content picture">
		</div>
	</div>

	<div class="back-page">
		<a href="/">
			<span class="left-arr">&#8592</span>
			НАЗАД К НОВОСТЯМ
		</a>
	</div>
</div>