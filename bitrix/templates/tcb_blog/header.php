<?php use Bitrix\Main\Page\Asset;?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php $APPLICATION->ShowHead(); ?>
    <?php if($USER->IsAdmin()):?>
    <style>
        #mainNav {
            top: auto;
        }
    </style>
    <?php endif;?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href=<? echo SITE_TEMPLATE_PATH."/vendor/bootstrap/css/bootstrap.min.css"?> rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href=<? echo SITE_TEMPLATE_PATH."/vendor/fontawesome-free/css/all.min.css"?> rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<? echo SITE_TEMPLATE_PATH."/css/grayscale.min.css"?> rel="stylesheet">

</head>
<div id="panel">
    <?php $APPLICATION->ShowPanel();?>
</div>


<body>

<div id="page-top">