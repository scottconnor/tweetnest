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
	//added 1.2 comment here
	//this is another 1.2 comment
	//moving back to master?
	//this is a new 1.2 comment