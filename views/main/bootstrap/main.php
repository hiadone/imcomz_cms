<!-- header start -->
<header>
	<div class="inner_center">
		<h1 class="h_logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url('/assets/images/logo.png')?>" alt="아이엠컴즈"></a></h1>
		<nav class="gnb">
		<button class="btn_nav open"><img src="<?php echo base_url('/assets/images/h_icon_ham.svg')?>" alt="메뉴버튼"></button>
		<ul class="gnb_ul">					
			<li class="gnb_li"><a href="#main">HOME</a></li>
			<li class="gnb_li"><a href="#about">ABOUT</a></li>
			<li class="gnb_li"><a href="#service">SERVICE</a></li>
			<li class="gnb_li"><a href="#contact">CONTACT</a></li>
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

	<section class="main_bnr" id="main">
		<h2 class="hidden">배너</h2>
		<div class="bnr_box swiper-container">
			<ul class="bnr_list swiper-wrapper">
				<?php echo main_banner("main_slide","order","","<li class='bnr_li swiper-slide'>","</li>") ?>
				<!-- <li class="bnr_li swiper-slide">
					<img class="show_pc" src="images/bnr02.jpg" alt="아이엠컴즈, 초심을 잃지 않는 사람들">
					<img class="show_mo" src="images/bnr02_m.jpg" alt="아이엠컴즈, 초심을 잃지 않는 사람들">
				</li>
				<li class="bnr_li swiper-slide">
					<img class="img_pc" src="http://placehold.it/1920x600" alt="아이엠컴즈, 초심을 잃지 않는 사람들">
					<img class="img_mo" src="http://placehold.it/1000x618" alt="아이엠컴즈, 초심을 잃지 않는 사람들">
				</li> -->
			</ul>
			<div class="swiper-pagination bnr_pagination"></div>
			<div class="inner_center">
				<div class="swiper-button-next btn_next" ></div>
				<div class="swiper-button-prev btn_prev" ></div>
			</div>
			
		</div>
	</section>
	<!-- ABOUT -->
	<section class="about" id="about">
		<h2 class="tit01 fadein_ani_ready">ABOUT</h2>
		<p class="sub_tit01 fadein_ani_ready">아이엠컴즈는 온라인 마케팅 전략기획, 광고 디자인 및 제작, 프로모션, 모바일 기프트 사업 등<br> 온라인 광고 사업의 최고 수준의 기획 및 노하우를 접목하여 광고주 맞춤 통합 서비스를 제공합니다.</p>
		<ul class="inner_center about_list">
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_about_01.png')?>" alt="온라인 마케팅 아이콘">
				<div class="txt_box">
					<h4 class="tit">온라인 마케팅</h4>
					<p class="txt">광고주 특성과 캠페인 목표에<br> 맞춘 광고 기획 및 통합 운영</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_about_02.png')?>" alt="SNS채널 운영 아이콘">
				<div class="txt_box">
					<h4 class="tit">SNS채널 운영</h4>
					<p class="txt">브랜드 이미지 구축 및 고객 커뮤니케이션을<br> 위한 SNS 채널 운영 및 컨텐츠 기획/제작</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_about_03.png')?>" alt="디자인 제작 아이콘">
				<div class="txt_box">
					<h4 class="tit">디자인 제작</h4>
					<p class="txt">전문성을 기반으로 광고소재 및 랜딩페이지<br> 영상 컨텐츠 등 다양한 크리에이티브 제작</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_about_04.png')?>" alt="모바일 쿠폰 아이콘">
				<div class="txt_box">
					<h4 class="tit">모바일 쿠폰</h4>
					<p class="txt">모바일 기프트 발급/인증 플랫폼을 활용한<br> 모바일 쿠폰 사업 총괄 대행</p>
				</div>
			</li>
		</ul>
	</section>
	<!-- SERVICE -->
	<section class="service" id="service">
		<h2 class="tit01 fadein_ani_ready">SERVICE</h2>
		<p class="sub_tit01 fadein_ani_ready">아이엠컴즈는 온라인 마케팅 전략기획, 광고 디자인 및 제작, 프로모션, 모바일 기프트 사업 등<br> 온라인 광고 사업의 최고 수준의 기획 및 노하우를 접목하여 광고주 맞춤 통합 서비스를 제공합니다.</p>
		<ul class="service_list">
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_service_01.png')?>" alt="display ad 아이콘">
				<div class="txt_box">
					<h4 class="tit">DISPLAY AD</h4>
					<p class="txt">포털사이트 광고, 네트워크 광고, 모바일 광고 등<br> 다양한 DISPLAY AD 진행</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_service_02.png')?>" alt="search ad 아이콘">
				<div class="txt_box">
					<h4 class="tit">SEARCH AD</h4>
					<p class="txt">네이버 파워링크, 네이버 쇼핑검색, 카카오, 구글 등<br> 다양한 SEARCH AD 진행</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_service_03.png')?>" alt="sns 아이콘">
				<div class="txt_box">
					<h4 class="tit">SNS</h4>
					<p class="txt">유튜브, 페이스북, 인스타그램 등<br> 광고주 SNS 채널 운영</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_service_04.png')?>" alt="design 아이콘">
				<div class="txt_box">
					<h4 class="tit">DESIGN</h4>
					<p class="txt">이미지 배너, 플래시 배너, 랜딩페이지<br> SNS 컨텐츠 등 다자인 제작</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_service_05.png')?>" alt="mobile coupon 아이콘">
				<div class="txt_box">
					<h4 class="tit">MOBILE COUPON</h4>
					<p class="txt">모바일 쿠폰 할인 발송 및 재발송 등의<br> 업무 처리 진행</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_service_06.png')?>" alt="viral marketing 아이콘">
				<div class="txt_box">
					<h4 class="tit">VIRAL MARKETING</h4>
					<p class="txt">컨텐츠 배포, 체험단 운영 등<br> 다양한 VIRAL 광고 진행</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/icon_service_07.png')?>" alt="video 아이콘">
				<div class="txt_box">
					<h4 class="tit">VIDEO</h4>
					<p class="txt">다양한 형태의 영상 컨텐츠<br> 기획 및 제작 진행</p>
				</div>
			</li>
		</ul>
	</section>

	<?php
	$k = 0;
	$is_open = false;
	if (element('board_list', $view)) {
		foreach (element('board_list', $view) as $key => $board) {
			$config = array(
				'skin' => 'bootstrap',
				'brd_key' => element('brd_key', $board),
				'limit' => 5,
				'length' => 40,
				'length_sub' => 80,
				'is_gallery' => 1,
				'image_width' => '',
				'image_height' => '',
				'cache_minute' => 1,
				'findex' => 'post_order',
			);
			if ($k % 2 === 0) {
				echo '<div class="">';
				$is_open = true;
			}
			echo $this->board->latest($config);
			if ($k % 2 === 1) {
				echo '</div>';
				$is_open = false;
			}
			$k++;
		}
	}
	if ($is_open) {
		echo '</div>';
		$is_open = false;
	}

	?>

	<section class="contact" id="contact">
		<h2 class="tit01 fadein_ani_ready">CONTACT</h2>
		<p class="sub_tit01 fadein_ani_ready">광고 문의 주시면 친절히 답변 드리겠습니다.</p>
		<ul class="inner_center contact_list">
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/contact_onlinemarketing.png')?>" alt="ONLINE MARKETING">
				<div class="txt_box">
					<p class="txt">마케팅팀</p>
					<p class="txt">070&#45;7777&#45;3633</p>
					<p class="txt">sales@imcomz.com</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/contact_designgreative.png')?>" alt="DESIGN CREATIVE">
				<div class="txt_box">
					<p class="txt">디자인팀</p>
					<p class="txt">02&#45;6269&#45;4602</p>
					<p class="txt">design@imcomz.com</p>
				</div>
			</li>
			<li class="list_li fadein_ani_ready">
				<img src="<?php echo base_url('/assets/images/contact_mobilecoupon.png')?>" alt="MOBILE COUPON">
				<div class="txt_box">
					<p class="txt">마케팅팀</p>
					<p class="txt">02&#45;6269&#45;4531</p>
					<p class="txt">sales@imcomz.com</p>
				</div>
			</li>
		</ul>
		<!-- map -->
		<div class="map">
			<img src="<?php echo base_url('/assets/images/map.jpg')?>" alt="아이엠컴즈약도">
			<div class="hidden">
				서울 금천구 벚꽃로 244 벽산 디지털밸리 5차 1412호
			</div>
		</div>
		<!-- 회사 소개서 -->
		<ul class="download_intro">
			<li class="btn_download"><a href="javascript:document.location.href='/postact/intro_download/site_intro1/orig_intro1'"><strong class="txt">회사소개서</strong><span class="hidden">다운로드하기</span><span class="triangle"></span></a></li>
			<li class="btn_download"><a href="javascript:document.location.href='/postact/intro_download/site_intro2/orig_intro2'"><strong class="txt">모바일 쿠폰 소개서</strong><span class="hidden">다운로드하기</span><span class="triangle"></span></a></li>
		</ul>
	</section>
	<footer>
		<div class="copyright">Copyright &copy; 2019 IMCOMZ All Right Reserved.</div>
	</footer>
</div>

	<script>
		$(function() {
			// 메인페이지 배너 swiper
			let delay = 4000;
			if($('li.bnr_li.swiper-slide').length == 1){
				delay = 4000000;
			}
				
				var swiper = new Swiper('.main_bnr .bnr_box', {
					slidesPerView: 1,
					spaceBetween: 0,
					loop: true,
					pagination: {
						el: '.swiper-pagination',
						clickable: true,
					},
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					},
					autoplay: {
						delay: delay,
						disableOnInteraction: false,
					},
				});
			
			
			
		//end	
		});
			
	</script>

	<script>
		$(function(){
			//모바일 헤더 여닫기
			var $gnbUl = $('.gnb .gnb_ul')
			var $gnbBtn = $('.gnb .btn_nav')
			function openGnb(){
				$gnbUl.slideDown(400,function(){
					$gnbBtn.removeClass('open');
					$(this).stop(true,true);
				});
			}
			function closeGnb(){
				$gnbUl.slideUp(400,function(){
					$gnbBtn.addClass('open');
					$(this).stop(true,true);
					$gnbUl.css('display','');
				});
			}
			
			$gnbBtn.on('click',function(){
				var gnbBtnClass = $(this).hasClass('open');
				if(gnbBtnClass == true){
					openGnb();
				}else{
					closeGnb();
				}
				
			});
			
			// SCROLLSPY (메인페이지만)							 
			function scrollSpy() {
				var mh = $('header').height();

				$(".gnb .gnb_li:not('.noscroll')").removeClass("active"); //we remove active from every menu element

				//we get the divs offsets looping the menu links and getting the targets (this is dynamic: when we change div #suzy's height, code won't break!)
				var divs = [];
				$(".gnb .gnb_li:not('.noscroll') a").each(function(i) {
					var appo = $(this).attr("href");
					//here we get the distance from top of each div
					divs[i] = $(appo).offset().top;
				});

				//gets actual scroll and adds window height/2 to change the active menu voice when the lower div reaches half of screen (it can be changed)
				var pos = $(window).scrollTop();
				var off = ($(window).height()) / 2;

				pos = pos + off;

				//we parse our "div distances from top" object (divs) until we find a div which is further from top than the actual scroll position(+ of course window height/2). When we find it, we assign "active" class to the Nth menu voice which is corresponding to the last div closer to the top than the actual scroll -> trick is looping from index=0 while Nth css numeration starts from 1, so when the index=3 (fourth div) breaks our cycly, we give active to the third element in menu.
				var index = 0;

				for (index = 0; index < divs.length; index++) {
					if (pos < divs[index]) {
						break;
					}
				}
				index--;
				$(".gnb .gnb_li:not('.noscroll'):eq(" + index + ")").addClass("active");
			};

			$(window).scroll(function() {
				scrollSpy();
			});
			$(document).ready(function() {
				scrollSpy();
			});
			
			// header 메뉴 클릭시 scroll animation
			$(".gnb .gnb_li:not('.noscroll')>a").on("click", function() {
				var menuId = $(this).attr('href');
				var scrollName = $(menuId).offset().top;
				$('html,body').animate({
					scrollTop: scrollName - 60
				}, 400, 'swing');

				if(!$gnbBtn.hasClass('open')) closeGnb();
				
				return false;
			});
			
			//스크롤시 요소 fadeIn animation
			$(window).scroll(function() {
				$(".fadein_ani_ready").each(function() {
					paragraphMiddle = $(this).offset().top + (0.5 * $(this).height());
					windowBottom = $(window).scrollTop() + $(window).height();

					if (paragraphMiddle < windowBottom) {
						$(this).addClass("fadein_ani");
					}
				});
			});

			/* On Load: Trigger Scroll Once*/
			$(window).scroll();
		//end
		});
	
	</script>