<?php
global $READER;

define("DS", "\\", false);
define("DS_FORWARD", "/", false);
define("ROOT", dirname(__FILE__).DS, false);
define("ROOT_FORWARD", dirname(__FILE__).DS_FORWARD, false);
define("ROOT_DB", dirname(__FILE__).DS."db".DS, false);
define("ROOT_DB_FORWARD", dirname(__FILE__).DS_FORWARD."db".DS_FORWARD, false);
define("ROOT_TEMP", dirname(__FILE__).DS."libs".DS."temp".DS, false);
define("ROOT_TEMP_FORWARD", dirname(__FILE__).DS_FORWARD."libs".DS_FORWARD."temp".DS_FORWARD, false);
define("DOC_ROOT", $_SERVER['DOCUMENT_ROOT'], false);
define("DOC_ROOT_BACKWARDS", str_replace("/","\\", $_SERVER['DOCUMENT_ROOT']), false);
define("PPDB_CONNECT", $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'], false);
define("PPDB_SERVER_NAME", $_SERVER['SERVER_NAME'], false);
define("PPDB_SERVER_PORT", $_SERVER['SERVER_PORT'], false);
define("SESSION_USER", $_SESSION['username'], false);
define("JUSTIFY", "justify", false);
define("LEFT", "left", false);
define("CENTER", "center", false);
define("RIGHT", "right", false);
define("CAPITALIZE", "capitalize", false);
define("UPPERCASE", "uppercase", false);
define("LOWERCASE", "lowercase", false);
define("FILE_INFO", ["created", "updated", "size", "type"], false);

?>
