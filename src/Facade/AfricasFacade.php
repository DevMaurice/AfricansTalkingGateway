<?php
namespace DevMaurice\AfricansTalkGateway\Facade;

use Illuminate\Support\Facades\Facade;

class AfricasFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'AfricansTalkGateway'; }

}