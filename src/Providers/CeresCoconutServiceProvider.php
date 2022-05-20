<?php

namespace CeresCoconut\Providers;

use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class CeresCoconutServiceProvider extends ServiceProvider
{
    const PRIORITY = 0;

    /**
     * Register the service provider.
     */
    public function register()
    {

    }

    /**
     * Boot a template for the footer that will be displayed in the template plugin instead of the original footer.
     */
    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
                $enabledOverrides = explode(", ", $config->get("CeresCoconut.templates.override"));

$this->overrideTemplate("Ceres::PageDesign.Partials.Header.DefaultHeader.twig", "CeresCoconut::PageDesign.Partials.Header.DefaultHeader.twig");


    }

}