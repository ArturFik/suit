<?php
echo "PHP Version: " . phpversion() . "<br>";
echo "Architecture: " . (PHP_INT_SIZE === 8 ? 'x64' : 'x86') . "<br>";

$ioncubeFile = 'C:\OSPanel\modules\php\PHP_7.4\ext\ioncube_loader_win_7.4.dll';
if (file_exists($ioncubeFile)) {
    echo "✅ ioncube file EXISTS: " . $ioncubeFile . "<br>";
} else {
    echo "❌ ioncube file NOT FOUND: " . $ioncubeFile . "<br>";
}

if (extension_loaded('ionCube Loader')) {
    echo "✅ ionCube IS LOADED";
} else {
    echo "❌ ionCube NOT LOADED";
}
?>