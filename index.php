<?php
require_once __DIR__ . '/vendor/autoload.php';
$oPage = new \Ease\TWB\WebPage('Page title');
$form = $oPage->addItem( new \Ease\TWB\Form('ExampleForm') );
$form->addItem(new \Ease\Html\InputTextTag('Name'));
$form->addItem(new \Ease\TWB\SubmitButton('OK', 'success') );
$oPage->draw();
phpinfo();
