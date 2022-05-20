<?php

namespace CeresCoconut\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use IO\Helper\TemplateContainer;
use IO\Extensions\Functions\Partial;
use IO\Services\ItemSearch\Helper\ResultFieldTemplate;
use Plenty\Plugin\ConfigRepository;


/**
 * Class CeresCoconutServiceProvider
 * @package CeresCoconut\Providers
 */
class CeresCoconutServiceProvider extends ServiceProvider
{public function boot()
	{
		$this->overrideTemplate("Ceres::Category.Macros.CategoryTree", "CeresCoconut::Category.Macros.CategoryTree");
}
	}