<?php
namespace Craft;

class WidontExtensionPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Widont Twig Extension');
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Kind';
    }

    public function getDeveloperUrl()
    {
        return 'http://madebykind.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.widontextension.twigextensions.WidontTwigExtension');
        return new WidontTwigExtension();
    }
}
