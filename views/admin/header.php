<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= (isset($this->title)) ? $this->title : SITE_NAME . ' - ' . SITE_SLOGEN; ?></title>

        <!-- CSS -->
        <link href="<?=SITE_URL?>assets/admin/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?=SITE_URL?>assets/admin/css/layout-one.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="mcadminbar navbar-fixed-top">
            <div class="mclogo pull-left">
                <a href="#" title="Mato CMS"><span class="glyphicon glyphicon-globe"></span>Master P</a>
            </div><!-- /.maker-logo -->
            <!--        <div class="mc-visitsite">
                            <a href="#"><span class="glyphicon glyphicon-new-window"></span></a>
                        </div>-->
            <div class="mcadmindetail pull-right">
                <div class="mcadminimg pull-left">
                    <!--<img src="" class="glyphicon glyphicon-user">-->
<!--                    <span class="glyphicon glyphicon-user"></span>-->
                </div>
                <div class="msadmindropdown">
                    <span class="glyphicon glyphicon-menu-down"></span>
                </div>
            </div>
<!--            <div class="mcadminnavigation">
                <ul>
                    <li><a href="<?=SITE_URL_ADMIN?>">Dashboard</a></li>
                    <li><a href="<?=SITE_URL_ADMIN?>media">Media</a></li>
                    <li><a href="">Pages</a></li>
                    <li><a href="">Posts</a></li>
                    <li><a href="">Comments</a></li>
                    <li><a href="">Web Design</a></li>
                    <li><a href="">Users</a></li>
                </ul>
            </div> /.mc-navigation -->
        </div><!-- /.header -->
        