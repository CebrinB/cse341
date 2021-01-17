<?php require $_SERVER['DOCUMENT_ROOT'] . '/template/header.php'; ?>
<?php
// catch values
$assignments = is_set($assignments) ? $assignments : [];
$projects = is_set($projects) ? $projects : [];
?>
<main>
	<h1>CSE 341 Assignments</h1>
	<h3 style="text-align:center;">Assignments</h3>
	<ul class="grid">
		<?php foreach($assignments as $a) {
			echo '<li><a href="'. $a['url'] .'">'. $a['week'] .'</a><div class="sub-title">'. $a['title'] .'</div></li>';
		} ?>
	</ul>
	<h3 style="text-align:center;">Projects</h3>
	<ul class="grid">
		<?php foreach($projects as $p) {
			echo '<li><a href="'. $p['url'] .'">'. $p['week'] .'</a><div class="sub-title">'. $p['title'] .'</div></li>';
		} ?>
	</ul>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'; ?>