<html>
<?php 
require __DIR__ . '/vendor/autoload.php';
use Wcs\{
    Hello
};
$bonjour = new App\Hello();
echo $bonjour->talk();
?>
</html>