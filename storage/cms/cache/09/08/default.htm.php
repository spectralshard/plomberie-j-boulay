<?php 
use RainLab\Translate\Classes\Translator;class Cms5f3abb2bd0b4d736156632_c4c18778625cbb6aad1dea182a14af4aClass extends Cms\Classes\LayoutCode
{


public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
