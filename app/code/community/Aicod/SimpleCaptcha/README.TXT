Aicod_SimpleCaptcha
http://www.ecommercegrow.com/

Purpose / Features:
- Provide a simpler captcha image for shop users.
  
Compatibility:
- Magento 1.7+

Required Dependencies:
- NONE

Installation:
- ATTENTION: ALWAYS INSTALL THE "Required Dependencies" IN THE EXACT ORDER SPECIFIED BEFORE INSTALLING THIS MODULE OR YOUR SHOP COULD BECOME CORRUPTED!
- Intall the provided tgz package file with the magento web gui:
  Magento Backend\System\Magento Connect\Magento Connect Manager\Direct package file upload\Upload
  Alternatively via command line: "MAGENTO_ROOT/mage install-file PACKAGEFILE.tgz"
  Alternatively manually extracting the tgz file directly to MAGENTO_ROOT
- Always remember to flush magento cache after installing any extension: Magento Backend\System\Cache Management\Flush Cache Storage
  And logout/login from the magento backend.

Uninstallation:
- ATTENTION: ALWAYS UNINSTALL EACH MODULE IN THE INVERSE ORDER SPECIFIED IN THE SECTION "Required Dependencies" OR YOUR SHOP COULD BECOME CORRUPTED!
- Choose Unistall in Magento Backend\System\Magento Connect\Magento Connect Manager\Manage Existing Extensions
  Alternatively via command line: "MAGENTO_ROOT/mage uninstall community PACKAGENAME" (use "MAGENTO_ROOT/mage list-installed" to retrive the list of installaed packages)
  Alternatively manually remove each file you have extracted in the installation.

Configuration / Usage:
- Choose the alternative captcha generator at Magento Backend\System\Configuration\Customer Configuration\CAPTCHA\Captcha Type