<?php
 
require_once 'vendor/autoload.php';
 
define('SAUCE_HOST',
SAUCE_USERNAME.':'.SAUCE_ACCESS_KEY.'@ondemand.saucelabs.com');
 
class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
 protected $start_url = 'http://saucelabs.com/test/guinea-pig';
 
 public static $browsers = array(
        array(
            'browserName' => 'firefox',
            'host' => SAUCE_HOST,
            'port' => 80,
            'desiredCapabilities' => array(
                'version' => '15',
                'platform'=> 'Windows 2012'
            )
        )
    );
 
    protected function setUp()
    {
        $this->setBrowserUrl(''); 
    }
 
    public function testTitle()
    {
        $this->url($this->start_url);
        $this->assertContains("I am a page title", $this->title());
    }
}
?>