<div class="box">
    <div class="box-header">
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="<?php echo admin_url($this->pagedir); ?>" onclick="return check_form_changed();">기본정보</a></li>
            <li role="presentation" ><a href="<?php echo admin_url($this->pagedir . '/access'); ?>" onclick="return check_form_changed();">접근기능</a></li>
            <!-- <li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/point'); ?>" onclick="return check_form_changed();">포인트기능</a></li>
            <li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/general'); ?>" onclick="return check_form_changed();">일반기능 / 에디터</a></li>
            <li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/note'); ?>" onclick="return check_form_changed();">쪽지기능</a></li>
            <li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/notification'); ?>" onclick="return check_form_changed();">알림기능</a></li> -->
            <li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/company'); ?>" onclick="return check_form_changed();">회사정보</a></li>
            <li role="presentation" class="active"><a href="<?php echo admin_url($this->pagedir . '/intro'); ?>" onclick="return check_form_changed();">소개서</a></li>
        </ul>
    </div>
    <div class="box-table">
        <?php
        echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
        echo show_alert_message(element('alert_message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
        echo show_alert_message(element('message', $view), '<div class="alert alert-warning">', '</div>');
        $attributes = array('class' => 'form-horizontal', 'name' => 'fadminwrite', 'id' => 'fadminwrite');
        echo form_open_multipart(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="is_submit" value="1" />
            <div class="alert alert-info">
                <p>소개서를 등록해 주십시요.</p>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">회사소개서</label>
                <div class="col-sm-10">
                    <?php
                    if (element('site_intro1', element('data', $view))) {
                    ?>
                        <i class="fa fa-download"></i> <a href="javascript:document.location.href='<?php echo element('download_link', $view); ?>'+'/site_intro1/orig_intro1'"><?php echo html_escape(element('orig_intro1', element('data', $view))); ?></a> 
                        <label for="site_intro1_del">
                            <input type="checkbox" name="site_intro1_del" id="site_intro1_del" value="1"/> 삭제
                        </label>
                    <?php
                    }
                    ?>
                    <input type="file" name="site_intro1" id="site_intro1" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">모바일쿠폰소개서</label>
                <div class="col-sm-10">
                    <?php
                    if (element('site_intro2', element('data', $view))) {
                    ?>
                        <i class="fa fa-download"></i> <a href="javascript:document.location.href='<?php echo element('download_link', $view); ?>'+'/site_intro2/orig_intro2'"><?php echo html_escape(element('orig_intro2', element('data', $view))); ?></a> 
                        <label for="site_intro2_del">
                            <input type="checkbox" name="site_intro2_del" id="site_intro2_del" value="1"/> 삭제
                        </label>
                    <?php
                    }
                    ?>
                    <input type="file" name="site_intro2" id="site_intro2" />
                </div>
            </div>
            <div class="btn-group pull-right" role="group" aria-label="...">
                <button type="submit" class="btn btn-success btn-sm">저장하기</button>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>

<script type="text/javascript">
//<![CDATA[
var form_original_data = $('#fadminwrite').serialize();
function check_form_changed() {
    if ($('#fadminwrite').serialize() !== form_original_data) {
        if (confirm('저장하지 않은 정보가 있습니다. 저장하지 않은 상태로 이동하시겠습니까?')) {
            return true;
        } else {
            return false;
        }
    }
    return true;
}
//]]>
</script>
