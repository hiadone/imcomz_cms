<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<?php $this->managelayout->add_css(base_url('/assets/css/swiper.min.css')); ?>
<?php	$this->managelayout->add_js(base_url('plugin/zeroclipboard/ZeroClipboard.js')); ?>
<?php $this->managelayout->add_js(base_url('/assets/js/swiper.min.js')); ?>

<?php
if (element('syntax_highlighter', element('board', $view)) OR element('comment_syntax_highlighter', element('board', $view))) {
	$this->managelayout->add_css(base_url('assets/js/syntaxhighlighter/styles/shCore.css'));
	$this->managelayout->add_css(base_url('assets/js/syntaxhighlighter/styles/shThemeMidnight.css'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shCore.js'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushJScript.js'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushPhp.js'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushCss.js'));
	$this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushXml.js'));
?>
	<script type="text/javascript">
	SyntaxHighlighter.config.clipboardSwf = '<?php echo base_url('assets/js/syntaxhighlighter/scripts/clipboard.swf'); ?>';
	var is_SyntaxHighlighter = true;
	SyntaxHighlighter.all();
	</script>
<?php } ?>

<?php echo element('headercontent', element('board', $view)); ?>

<!-- header start -->
<header>
	<div class="inner_center">
		<h1 class="h_logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url('/assets/images/logo.png')?>" alt="아이엠컴즈"></a></h1>
		<nav class="gnb">
		<button class="btn_nav open"><img src="<?php echo base_url('/assets/images/h_icon_ham.svg')?>" alt="메뉴버튼"></button>
		<ul class="gnb_ul">					
			<li class="gnb_li"><a href="<?php echo site_url(); ?>">HOME</a></li>
			<li class="gnb_li"><a href="<?php echo site_url(); ?>">ABOUT</a></li>
			<li class="gnb_li"><a href="<?php echo site_url(); ?>">SERVICE</a></li>
			<li class="gnb_li"><a href="<?php echo site_url(); ?>">CONTACT</a></li>
			<?php if ($this->member->is_admin() === 'super') { ?>
			<li class="gnb_li noscroll" ><a href="<?php echo site_url(config_item('uri_segment_admin')); ?>" title="관리자 페이지로 이동">관리자</a></li>
			<?php } ?>
		</ul>
	</nav>
	</div>
<!-- header-content end -->
</header>
	<!-- main start -->
	
<div class="wrap">
	
	<div class="container">
		<?php echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info">', '</div>'); ?>	
		<?php if (element('extra_content', $view)) { ?>
			<ul class="list-group">
				<?php foreach (element('extra_content', $view) as $key => $value) { ?>
					<li class="list-group-item">
						<div class="col-sm-2"> <strong><?php echo html_escape(element('display_name', $value)); ?></strong></div>
						<div class="list-group-item-text" style="min-height:20px;"><?php echo nl2br(html_escape(element('output', $value))); ?></div></li>
				<?php } ?>
			</ul>
		<?php } ?>
		<section class="post">
			<h2 class="hidden">portfolio</h2>
			<!-- 본문 내용 시작 -->
			<div id="post-content"><?php echo element('content', element('post', $view)); ?></div>
			<!-- 본문 내용 끝 -->
			
			<div class="inner_center">
				<div class="border_button ">


				<div class="group mb10">
				<?php 
				$config = array(
						'skin' => 'bootstrap',
						'brd_key' => element('brd_key', element('board', $view)),
						'post_id' => element('post_id', element('post', $view)),
						'is_gallery' => 1,
						'image_height' => 200,
						'image_width' => 200,
						'cache_minute' => 1,
					);
				echo $this->board->latest_portfolio($config);

				?>
				</div>

				<?php 
				/*if (element('prev_post', $view)) { ?>
					
					<a href="<?php echo element('url', element('prev_post', $view)); ?>" class="btn btn-warning btn-sm pull-left"><i class="glyphicon glyphicon-arrow-left"></i> 이전글</a>
				<?php } ?>
				<?php if (element('next_post', $view)) { ?>

					<a href="<?php echo element('url', element('next_post', $view)); ?>" class="btn btn-warning btn-sm pull-right">다음글 <i class="glyphicon glyphicon-arrow-right"></i></a>
				<?php } */?>
		
				</div>
				<?php
				if (element('use_sns_button', $view)) {
					$this->managelayout->add_js(base_url('assets/js/sns.js'));
					if ($this->cbconfig->item('kakao_apikey')) {
						$this->managelayout->add_js('https://developers.kakao.com/sdk/js/kakao.min.js');
				?>
					<script type="text/javascript">Kakao.init('<?php echo $this->cbconfig->item('kakao_apikey'); ?>');</script>
				<?php } ?>
					<div class="sns_button">
						<a href="javascript:;" onClick="sendSns('facebook', '<?php echo element('short_url', $view); ?>', '<?php echo html_escape(element('post_title', element('post', $view)));?>');" title="이 글을 페이스북으로 퍼가기"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_facebook.png" width="22" height="22" alt="이 글을 페이스북으로 퍼가기" title="이 글을 페이스북으로 퍼가기" /></a>
						<a href="javascript:;" onClick="sendSns('twitter', '<?php echo element('short_url', $view); ?>', '<?php echo html_escape(element('post_title', element('post', $view)));?>');" title="이 글을 트위터로 퍼가기"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_twitter.png" width="22" height="22" alt="이 글을 트위터로 퍼가기" title="이 글을 트위터로 퍼가기" /></a>
						<?php if ($this->cbconfig->item('kakao_apikey')) { ?>
							<a href="javascript:;" onClick="kakaolink_send('<?php echo html_escape(element('post_title', element('post', $view)));?>', '<?php echo element('short_url', $view); ?>');" title="이 글을 카카오톡으로 퍼가기"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_kakaotalk.png" width="22" height="22" alt="이 글을 카카오톡으로 퍼가기" title="이 글을 카카오톡으로 퍼가기" /></a>
						<?php } ?>
						<a href="javascript:;" onClick="sendSns('kakaostory', '<?php echo element('short_url', $view); ?>', '<?php echo html_escape(element('post_title', element('post', $view)));?>');" title="이 글을 카카오스토리로 퍼가기"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_kakaostory.png" width="22" height="22" alt="이 글을 카카오스토리로 퍼가기" title="이 글을 카카오스토리로 퍼가기" /></a>
						<a href="javascript:;" onClick="sendSns('band', '<?php echo element('short_url', $view); ?>', '<?php echo html_escape(element('post_title', element('post', $view)));?>');" title="이 글을 밴드로 퍼가기"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_band.png" width="22" height="22" alt="이 글을 밴드로 퍼가기" title="이 글을 밴드로 퍼가기" /></a>
					</div>
				<?php } ?>

				

				

				<div class="border_button mt20 mb20">
					<div class="btn-group pull-left" role="group" aria-label="...">
						<?php if (element('modify_url', $view)) { ?>
							<a href="<?php echo element('modify_url', $view); ?>" class="btn btn-default btn-sm">수정</a>
						<?php } ?>
						<?php	if (element('delete_url', $view)) { ?>
							<button type="button" class="btn btn-default btn-sm btn-one-delete" data-one-delete-url="<?php echo element('delete_url', $view); ?>">삭제</button>
						<?php } ?>
							
						
						
						
						</div>
					<?php if (element('write_url', $view)) { ?>
						<div class="pull-right">
							<a href="<?php echo element('write_url', $view); ?>" class="btn btn-success btn-sm">업체추가</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>

	</div>
	
</div>
<?php echo element('footercontent', element('board', $view)); ?>


<script type="text/javascript">
//<![CDATA[
    var swiper = new Swiper('.gallery_list02 .swiper-container', {
      slidesPerView: cb_device_type =='mobile' ? 2.5:5.5  ,
      spaceBetween: 10,
      freeMode: true,
      pagination: {
        el: '.gallery_list02 .swiper-pagination',
        clickable: true,
      },
      <?php if($this->input->get('initialSlide')) 
      echo 'initialSlide:'.$this->input->get('initialSlide');
      ?>
    });

//]]>
</script>

<?php if (element('target_blank', element('board', $view))) { ?>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
	$("#post-content a[href^='http']").attr('target', '_blank');
});
//]]>
</script>
<?php } ?>
