
<div class="main_box1 gall_list01 gallery_list02">
        
        

    <h3 class="tit03">Another <span class="emph_red"><?php echo html_escape(element('board_name', element('board', $view))); ?></span></h3>

    <div class="swiper-container gallery">
        <div class="swiper-wrapper">
    <?php
    $i = 0;
    if (element('latest_portfolio', $view)) {
        foreach (element('latest_portfolio', $view) as $key => $value) {
    ?>
        <div class="swiper-slide list_box">
            <a href="<?php echo element('url', $value); ?>?initialSlide=<?php echo $i; ?>" title="<?php echo html_escape(element('title', $value)); ?>"><div class="list_img"><img src="<?php echo element('thumb_url', $value); ?>" style="width:100%;"></div><h4 class="item_name"><?php echo html_escape(element('title', $value)); ?></h4>
                
                
            </a>
            
        </div>
    <?php
            $i++;
        }
    }
    ?>
        </div>
            <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    
    
</div>
<!-- Initialize Swiper -->
  