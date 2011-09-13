<?php

class Controller_AMF extends Controller {
	
	public function action_gateway()
	{
		require_once Kohana::find_file('vendor/amfphp/Amfphp', 'ClassLoader');
		
		// AMFPHP Config File reading from Kohana Config File.
		// Configured to use Kohana's filesystem to look for services.
		$config = new AMF_Config; 
		
		// Standard AMFPHP 2.0 Initialization
		$gateway = Amfphp_Core_HttpRequestGatewayFactory::createGateway($config);
		
		$gateway->service();
		$gateway->output();
	}
	
}