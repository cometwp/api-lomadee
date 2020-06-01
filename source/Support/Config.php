<?php

define("CONST_DB_HOST", "localhost");
define("CONST_DB_USER","root");
define("CONST_DB_PASS","");
define("CONST_DB_NAME","cuponfydb");


define("CONF_URL_BASE","http://www.eguadocupom.com.br");
define("CONF_URL_TEST","http://www.localost/api-lomadee");
define("CONF_URL_ADMIN", "/admin");


define("CONF_SITE_NAME","Égua do Cupom");
define("CONF_SITE_LANG","pt-BR");
define("CONF_SITE_DOMAIN","eguadocupom.com.br");


/**
 * DATE
 */
define("CONF_DATE_BR","d/m/Y H:i:s");
define("CONF_DATE_APP","Y-m-d H:i:s");

/**
 * SESSIONS
 */
define("CONF_SES_PATH", __DIR__ . "/../../storage/sessions/");

/**
 * LOMADEE KEYS
 */
define('LMD_API_TOKEN', '1586524487910acc5cf70');
define('LMD_SOURCE_ID', '36379559');


/**
 * VIEWS
 */
define("CONF_VIEW_PATH",__DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT","php");