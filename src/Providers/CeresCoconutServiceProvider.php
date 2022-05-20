<?php

namespace CeresCoconut\Providers;

use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Webshop\CeresCoconut\Providers\CeresCoconutServiceProvider;

class CeresCoconutServiceProvider extends ServiceProvider
{

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
        

$this->overrideTemplate("Ceres::Category.Macros.CategoryTree", "CeresCoconut::Category.Macros.CategoryTree");


    }

}