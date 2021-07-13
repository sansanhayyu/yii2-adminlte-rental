<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'adminLTE/fontawesome-free/css/all.min.css',
        'adminLTE/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'adminLTE/icheck-bootstrap/icheck-bootstrap.min.css',
        'adminLTE/jqvmap/jqvmap.min.css',
        'adminLTE/dist/css/adminlte.min.css',
        'adminLTE/overlayScrollbars/css/OverlayScrollbars.min.css',
        'adminLTE/summernote/summernote-bs4.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'adminLTE/daterangepicker/daterangepicker.css',
        'adminLTE/summernote/summernote-bs4.min.css',
    ];
    public $js = [
        'adminLTE/jqvmap/jquery.vmap.min.js',
        'adminLTE/jqvmap/maps/jquery.vmap.usa.js',
        'adminLTE/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'adminLTE/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'adminLTE/dist/js/adminlte.js',
        'adminLTE/jquery/jquery.min.js',
        'adminLTE/jquery-ui/jquery-ui.min.js',
        'adminLTE/bootstrap/js/bootstrap.bundle.min.js',
        'adminLTE/chart.js/Chart.min.js',
        'adminLTE/sparklines/sparkline.js',
        'adminLTE/jquery-knob/jquery.knob.min.js',
        'adminLTE/moment/moment.min.js',
        'adminLTE/summernote/summernote-bs4.min.js',
        'adminLTE/dist/js/demo.js',
        'adminLTE/dist/js/pages/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];
}
