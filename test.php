<?php
    require "inc/preheader.php";
    echo "<pre>\n";
    echo "DB_OFFSET: ".DB_OFFSET."\n";
    echo "\$dbtR['diff']: ".$dbtR['diff']."\n";
    echo "timezone: ".$config['timezone']."\n";
    echo "date(\"Z\"): ".date("Z")."\n";
    echo "date(\"Z\")-\$dbtR['diff']*36: ";
    echo date("Z")-$dbtR['diff']*36;
	//local edit 1
	//web edit 1
	//local edit 2
	function localFunction(){
		//do some stuff in here
	//web edit 2
	function webFunction(){
		//do web stuff
	}
