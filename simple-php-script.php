<?php

  // Setup: $ php composer.phar require facebook/webdriver

  require_once('vendor/autoload.php');
  use Facebook\WebDriver\Remote\RemoteWebDriver;
  use Facebook\WebDriver\WebDriverBy;

  $web_driver = RemoteWebDriver::create(
    "https://YOUR_SAUCE_USERNAME:YOUR_SAUCE_ACCESS_KEY@ondemand.saucelabs.com:443/wd/hub",
    array("platform"=>"Windows 7", "browserName"=>"chrome", "version"=>"40")
  );
  $web_driver->get("https://saucelabs.com/test/guinea-pig");

  /*
    Test actions here...
  */

  $web_driver->quit();
?>