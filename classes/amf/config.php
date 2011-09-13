<?php

class AMF_Config extends Amfphp_Core_Config {
	
	public function __construct()
	{
		$config = Kohana::$config->load('amfphp');
		
		foreach ($config as $key => $val)
		{
			$this->{$key} = $val;
		}
		
		if (sizeof($this->serviceNames2ClassFindInfo) === 0)
		{
			$root_path = 'classes'.DIRECTORY_SEPARATOR.'amf'.DIRECTORY_SEPARATOR.'service';
			$services = Kohana::list_files($root_path);
			
			$this->define_service_names($root_path, $services);
		}
	}
	
	protected function define_service_names($root_path, $services)
	{
		foreach ($services as $service => $path)
		{
			if (is_array($path))
			{
				$this->define_service_names($service, $path);
			}
			else
			{
				$className = str_replace('classes' . DIRECTORY_SEPARATOR, '', $service);
				$className = str_replace(DIRECTORY_SEPARATOR, '_', $className);
				$className = str_replace('.php', '', $className);
				
				$identifier = str_replace('amf_service_', '', $className);
				
				$this->serviceNames2ClassFindInfo[$identifier] = 
						new Amfphp_Core_Common_ClassFindInfo($path, $className);
			}
		}
	}
	
}