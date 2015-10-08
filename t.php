<?php
require('Page.php');
require('./libs/Smarty.class.php');

header('Content-type:text/html;Charset=utf8');


$pdo = new Pdo('mysql:host=localhost;dbname=test', 'root', '');
$pdo->query('set names utf8');

$smarty = new Smarty;

$count = $pdo->query('select name from demo')->rowCount();

$page = new Page($count, 5, 10, array('info'=>123)); //传入的参数，待完善

$limit = $page->getLimit();
$show  = $page->getShow();
$smarty->assign('show', $show);

$total = $pdo->query("select name from demo $limit")->fetchAll();

$smarty->assign('total', $total);
$smarty->display('hehe.html');

