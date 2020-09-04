<?php 
use RainLab\Translate\Classes\Translator;class Cms5f525de49ecdd246585441_8d3c92cb46aa2725767b5b7578bf5828Class extends Cms\Classes\LayoutCode
{


public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
