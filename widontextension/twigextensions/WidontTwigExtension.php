<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class WidontTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'Widont';
    }

    public function getFilters()
    {
        return array(
           'widont' => new Twig_Filter_Method($this, 'widont'),
        );
    }

    public function widont($text)
    {
        return preg_replace('/\s+(\S+)$/', '&#160;$1', rtrim($text));
    }

}
