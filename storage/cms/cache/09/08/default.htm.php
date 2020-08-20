<?php 
use RainLab\Translate\Classes\Translator;class Cms5f3e9f404ff29368107388_8da45c1c31754a04b37cabee29aff523Class extends Cms\Classes\LayoutCode
{


public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
