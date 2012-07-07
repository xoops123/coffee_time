<?php
function smarty_modifier_xoops_blocktitleclassdel( $string )
{
return preg_replace('/\[\[\w+/', '', $string);
}
?>