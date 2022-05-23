<?php

namespace CeresCoconut\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use IO\Helper\TemplateContainer;
use IO\Extensions\Functions\Partial;
use IO\Services\ItemSearch\Helper\ResultFieldTemplate;
use Plenty\Plugin\ConfigRepository;
use Plenty\Modules\Webshop\CeresCoconut\Providers\CeresCoconutServiceProvider;


/**
 * Class CeresCoconutServiceProvider
 * @package CeresCoconut\Providers
 */
class CeresCoconutServiceProvider extends ServiceProvider
{
    const PRIORITY = 0;

    public function register()
    {

    }

    public function boot(Twig $twig, Dispatcher $dispatcher, ConfigRepository $config)
    {
		   $this->overrideTemplate("Ceres::Category.Macros.CategoryTree.twig", "CeresCoconut::Category.Macros.CategoryTree.twig");
	
}
}
