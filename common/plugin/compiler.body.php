<?php

function smarty_compiler_body($arrParams,  $smarty){
    $strAttr = '';
    foreach ($arrParams as $_key => $_value) {
        $strAttr .= ' ' . $_key . '="<?php echo ' . $_value . ';?>"';
    }
    return '<body' . $strAttr . '>';
}

function smarty_compiler_bodyclose($arrParams,  $smarty){
    $strCode = '</body>';
    return $strCode;
}