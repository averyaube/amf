<?php

return array(
	'serviceFolderPaths' => array(
		Amfphp_ROOTPATH . '/Services/', // Includes default AMFPHP Services.
	),
	'serviceNames2ClassFindInfo' => array(), // Leave empty to autodetect AMF_Service_* classes
	'pluginsFolder' => Amfphp_ROOTPATH . '/Plugins/',
	'pluginsConfig' => array(
		
	),
	'disabledPlugins' => array(
		'AmfphpLogger',
		'AmfphpErrorHandler',
	),
);