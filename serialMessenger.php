<?php

/*

If script throws error, try: 

sudo chmod 777 [_port address_] :: (/dev/ttyACM0)

*/

// Load the serial port class
require("php_serial.class.php");

// Initialize the class
$serial = new phpSerial();

// Specify the device being used
$serial->deviceSet("/dev/ttyACM0");

// Set baud rate
$serial->confBaudRate(9600); // Orig Value: 115200
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none");

// Open the device
$serial->deviceOpen();

if (isset($_GET['pwmValue']) ) {
  $serial->sendMessage( chr($_GET['pwmValue']) );
} 



?>
