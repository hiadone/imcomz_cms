<section class="work">
	<h3 class="tit01 fadein_ani_ready">WORK</h3>
	<ul class="work_list inner_center">
		<?php
		$i = 0;
		if (element('latest', $view)) {
			foreach (element('latest', $view) as $key => $value) {
		?>
			<li class="list_li fadein_ani_ready">
				<a href="<?php echo element('url', $value); ?>" title="<?php echo html_escape(element('title', $value)); ?>">
					<div class="thum"><img src="<?php echo element('thumb_url', $value); ?>" alt="광고주명"></div>
					<div class="txt_box">
						<h4 class="tit"><?php echo html_escape(element('title', $value)); ?></h4>
						<p class="txt"><?php echo html_escape(element('title_sub', $value)); ?></p>
					</div>
				</a>
			</li>
		<?php
				$i++;
			}
		}
		?>
		
	</ul>
	<?php if (element('write_url', $view)) { ?>
		<div class="pull-right mr30">
			<a href="<?php echo element('write_url', $view); ?>" class="btn btn-success btn-sm">업체추가</a>
		</div>
	<?php } ?>
</section>
