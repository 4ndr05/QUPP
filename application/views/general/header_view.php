<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="shortcut icon" href="/images/ico.ico"/>
        <link type="text/css" rel="stylesheet" href="/css/reset.css" media="screen"/>
        <link type="text/css" rel="stylesheet" href="/css/administrador.css" media="screen"/>
        <link type="text/css" rel="stylesheet" href="/css/general.css" media="screen"/>
        <?php if (!empty($links) && is_array($links)): ?>
            <?php foreach ($links as $link): ?>
                <link type="text/css" rel="stylesheet" href="<?php echo $link; ?>.css" media="screen"/>
            <?php endforeach; ?>
        <?php endif; ?>

        <script src="/js/jquery-1.10.2.js"></script>
        <script src="/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/js/jquery.cycle.all.js"></script>
        <?php if (!empty($scripts) && is_array($scripts)): ?>
            <?php foreach ($scripts as $script): ?>
                <script type="text/javascript" src="<?php echo $script; ?>.js"></script>
            <?php endforeach; ?>
        <?php endif; ?>


        <?php if (!empty($title)): ?>
            <title><?php echo( $title); ?>-Quierounperro.com</title>
        <?php else: ?>
            <title>Quierounperro.com</title>
        <?php endif; ?>
    </head>