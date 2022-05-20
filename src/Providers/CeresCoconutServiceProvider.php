<?php

namespace CeresCoconut\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use IO\Helper\TemplateContainer;
use IO\Extensions\Functions\Partial;
use IO\Services\ItemSearch\Helper\ResultFieldTemplate;
use Plenty\Plugin\ConfigRepository;

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