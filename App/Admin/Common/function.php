<?php
function show_status($status)
{
    $tmpl         = C(TMPL_PARSE_STRING);
    $public_admin = $tmpl['__PUBLIC__'].'/icon';
    switch ($status) {
        case 0:
            $showImg = '<IMG SRC="' . $public_admin . '/locked.gif" WIDTH="20" HEIGHT="20" BORDER="0" ALT="禁用">';
        break;
        case 1:
            $showImg = '<IMG SRC="' . $public_admin . '/ok.gif" WIDTH="20" HEIGHT="20" BORDER="0" ALT="正常">';
        break;
        case -1:
            $showImg = '<IMG SRC="' . $public_admin . '/del.gif" WIDTH="20" HEIGHT="20" BORDER="0" ALT="删除">';
        break;
        case 2:
            $showImg = '<IMG SRC="' . $public_admin . '/prected.gif" WIDTH="20" HEIGHT="20" BORDER="0" ALT="待审">';
        break;
    }
    return $showImg;
}