<?php 
use RainLab\Translate\Classes\Translator;class Cms5f342b2976e68435307298_e7da2464e1b48eaf918b8e9ea36fe30eClass extends Cms\Classes\LayoutCode
{

public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
