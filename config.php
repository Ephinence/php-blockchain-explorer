<?php
	set_time_limit(0);
	
	// CRYPTO OPTIONS
	define("CRYPTONAME",		"BizCoin");
	define("CRYPTOSHORTNAME",	"BIZ");
	
	//DAEMON OPTIONS
	define("WALLET_RPC_USER",	"user");
	define("WALLET_RPC_PASS",	"pass");
	define("WALLET_RPC_SERVER",	"127.0.0.1");
	define("WALLET_RPC_PORT",	"33482");

	//DATABASE SETTINGS
	define("DATABASE_NAME",		"explorer");
	define("DATABASE_HOST",		"localhost");
	define("DATABASE_USER",		"root");
	define("DATABASE_PASS",		"root");
	
	require_once("classes/json-rpc-client.php");
	require_once("classes/database.class.php");
	require_once("classes/daemon.class.php");
	require_once("classes/client.class.php");
	
	Connect();
?>
