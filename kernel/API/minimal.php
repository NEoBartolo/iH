<?php
function sMsg($ID, $TX, $MK) {file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$ID.'&text='.urlencode($TX).'&reply_markup='.$MK.'&parse_mode=html&disable_web_page_preview=true');} 
function saCQ($cID, $TX, $show_alert) {file_get_contents($GLOBALS['api'].'/answerCallbackQuery?callback_query_id='.$ID.'&text='.urlencode($TX).'&show_alert='.$show_alert); } 
function eMsgTxt($ID, $mID, $TX, $MK) { file_get_contents($GLOBALS['api'] . '/editMessageText?chat_id='.$ID.'&message_id='.$mID.'&text='.urlencode($TX). '&reply_markup=' . $MK. '&parse_mode=html&disable_web_page_preview=true'); } 
function dMsg($ID, $mID) { file_get_contents($GLOBALS['api'] . '/deleteMessage?chat_id='.$ID.'&message_id='.$mID.''); } 
?>