<?php

class Aicod_SimpleCaptcha_Model_System_Config_Source_Captchatype
{
    public function toOptionArray()
    {
    	$ret = array(
    		array(
    			'value' => 'zend',
    			'label' => 'Zend (Default)'
    		),
    		array(
    			'value' => 'AicodSimpleCaptcha',
    			'label' => 'Simple Captcha'
    		),
    	);
        return $ret;
    }

}

