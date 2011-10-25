<?php

/**
 * Just a quick little test service
 *
 * @package AMF
 * @category Example
 * @author Lowgain
 */
class AMF_Service_Test {
	
	/**
	*
	* AMFPHP services are cool because they're just plain classes
	* and what you return gets serialized automatically!
	*
	* @return string
	*/
	public function say_hi()
	{
		return 'hi!';
	}
	
}