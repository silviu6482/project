<?php $result = $this->user_model->get_content(); ?>
<div class="main_title">
	<h1><?php echo $result[1]['text'] ?></h1>
	<h3><?php echo $result[2]['text'] ?></h3>
	<div class="section1">
		<img src="<?=site_url('../public/img/red1.jpg')?>" class="text_wrap_right">
		<p><?php echo $result[0]['text'] ?></p>
	</div>
	<div class="section2">
		<img src="<?=site_url('../public/img/red2.jpg')?>" class="text_wrap_left">
		<p><?php echo $result[0]['text'] ?></p>
	</div>
	<div class="section3">
		<img src="<?=site_url('../public/img/red1.jpg')?>" class="text_wrap_right">
		<p><?php echo $result[0]['text'] ?></p>
	</div>
	<div class="section4">
		<img src="<?=site_url('../public/img/red2.jpg')?>" class="text_wrap_left">
		<p><?php echo $result[0]['text'] ?></p>
	</div>
	<div class="section5">
		<img src="<?=site_url('../public/img/red2.jpg')?>" class="text_wrap_right">
		<p><?php echo $result[0]['text'] ?></p>
</div>

<a href="#" class="scrollToTop"></a>
<a href="#">Back top</a>