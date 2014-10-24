<?php  return '$group=$modx->user->get(\'primary_group\');
$doc_id = (isset($doc_id) && (int)$doc_id>0) ? (int)$doc_id : 1;

$document = $modx->getObject(\'modResource\',$doc_id);


switch($group) {
case 4: 
 $output=$document->getTVValue(\'price1\'); break;
case 5: 
 $output=$document->getTVValue(\'price2\'); break;
case 6: 
 $output=$document->getTVValue(\'price3\'); break;

default: 
 $output=$document->getTVValue(\'price\'); break;
}
return $output;
return;
';