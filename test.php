<?php
    require "inc/preheader.php";
    echo "<pre>\n";
    echo "DB_OFFSET: ".DB_OFFSET."\n";
    echo "\$dbtR['diff']: ".$dbtR['diff']."\n";
    echo "timezone: ".$config['timezone']."\n";
    echo "date(\"Z\"): ".date("Z")."\n";
    echo "date(\"Z\")-\$dbtR['diff']*36: ";
    echo date("Z")-$dbtR['diff']*36;
	//adding new line here
	//adding second comment here
	//added 1.1 comment here (2)