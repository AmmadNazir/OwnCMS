<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= (isset($this->title)) ? $this->title : SITE_NAME . ' - ' . SITE_SLOGEN; ?></title>
        <!-- CSS -->
        <link href="<?=SITE_URL?>public/assets/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?=SITE_URL?>public/assets/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/dropzone/3.8.4/css/dropzone.css" rel="stylesheet"/>
        <link href="<?=SITE_URL?>public/assets/css/admin.layout.css" rel="stylesheet"/>
    </head>
    <body>

