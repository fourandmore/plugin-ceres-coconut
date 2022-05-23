<?php

namespace CeresCoconut\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;

class CeresCoconutServiceProvider extends TemplateServiceProvider {	

	public function boot() {
		$this->overrideTemplate("Ceres::Category.Macros.CategoryTree", "CeresCoconut::Category.Macros.CategoryTree");
        $this->overrideTemplate("Ceres::PageDesign.Partials.Head", "CeresCoconut::PageDesign.Partials.Head");
	}
}