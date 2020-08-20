<?php 
use RainLab\Translate\Classes\Translator;class Cms5f3ee986a003b277165218_733fd39e14539af5631a7f0e06273d44Class extends Cms\Classes\LayoutCode
{


public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
