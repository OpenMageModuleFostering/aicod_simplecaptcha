<?php

/*
while(ob_get_level())
    ob_end_flush();

var_dump(class_exists('Mage_Captcha_Model_Zend'));
exit("dasdasdasdasd");
*/

//if(!class_exists('Mage_Italy_Rewrite_Captcha_Model_AicodSimpleCaptcha')) {

class Aicod_SimpleCaptcha_Rewrite_Captcha_Model_AicodSimpleCaptcha extends Mage_Captcha_Model_Zend
{
	public function generate()
    {
        $id = parent::generate();
        $tries = 5;
        // If there's already such file, try creating a new ID
        while($tries-- && file_exists($this->getImgDir() . $id . $this->getSuffix())) {
            $id = $this->_generateRandomId();
            $this->_setId($id);
        }
        $this->_generateImage2($id, $this->getWord());

        if (mt_rand(1, $this->getGcFreq()) == 1) {
            $this->_gc();
        }
        return $id;
    }

	protected function _generateImage2($id, $word)
    {
        //$font = $this->getFont();

        $w     = $this->getWidth();
        $h     = $this->getHeight();
        $fsize = $this->getFontSize();

        $img_file   = $this->getImgDir() . $id . $this->getSuffix();


        $dir = Mage::getModuleDir('', 'Aicod_SimpleCaptcha')."/lib";
        
        /*
        require_once $dir."/cool-captcha/captcha.php";
        $cp = new SimpleCaptcha();
        $cp->resourcesPath = $dir."/cool-captcha/resources";
        $cp->imageFormat = 'jpg';
        $cp->session_var = null;
        $cp->captcha_text = $word;
        $cp->width = $w;
        $cp->height = $h;
        $cp->CreateImage($img_file);
        //$cp->CreateImage(null);
        */

        
        require_once $dir."/gregwar-captcha/CaptchaBuilderInterface.php";
        require_once $dir."/gregwar-captcha/PhraseBuilderInterface.php";
		require_once $dir."/gregwar-captcha/PhraseBuilder.php";
        require_once $dir."/gregwar-captcha/ImageFileHandler.php";
        require_once $dir."/gregwar-captcha/CaptchaBuilder.php";
		$builder = new \Gregwar\Captcha\CaptchaBuilder($word);
		$builder->build($w,$h);
        $builder->save($img_file);
        

        /*
        $canvas = imagecreatetruecolor($w,$h);
        $black = imagecolorallocate($im, 0, 0, 0);
        imagecopyresampled($canvas, $builder->getGd(), 10, 10, 0, 0,  $w - 20 , $h - 20, $w, $h);
        imagefill($canvas, 0, 0, $black);
        //imagecopyresampled($canvas, $cp->im, 10, 10, 0, 0,  $w - 20 , $h - 20, $w, $h);
        imagejpeg($canvas, $img_file, 90);
        */

		
    }
}

//}