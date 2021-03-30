<?php
require_once('/model/ReadmoreM.php');
class ReadmoreC{

    static function readmorepage($more){
        $mor=ReadmoreM::getmore($more);
        require_once('/vue/readmore.php');
    }
}