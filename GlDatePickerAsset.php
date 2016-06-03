<?php
/**
 * @author Alex.Zhang <alex@extong.net>
 */

namespace yiizh\gldatepicker;

use yii\web\AssetBundle;

/**
 * @package yiizh\gldatepicker
 */
class GlDatePickerAsset extends AssetBundle
{
    public $sourcePath = '@yiizh/gldatepicker/assets';
    public $css = [
        'styles/glDatePicker.darkneon.css',
        'styles/glDatePicker.default.css',
        'styles/glDatePicker.flatwhite.css',
    ];
    public $js = [
        'glDatePicker.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}