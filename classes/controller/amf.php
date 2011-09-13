<?php

class Controller_AMF extends Controller {
	
	public function action_gateway()
	{
		require_once Kohana::find_file('vendor/amfphp/Amfphp', 'ClassLoader');
		
		$config = new AMF_Config; // AMFPHP Config File reading from Kohana Config File
		
		$gateway = Amfphp_Core_HttpRequestGatewayFactory::createGateway($config);
		
		$gateway->service();
		$gateway->output();
	}
	
}