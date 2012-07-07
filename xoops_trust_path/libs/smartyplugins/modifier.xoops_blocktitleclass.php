<?php
function smarty_modifier_xoops_blocktitleclass( $string )
{
if (preg_match('/\[\[(\w+)/', $string, $matches)) {
return $matches[1];
}
return "";
}
?>