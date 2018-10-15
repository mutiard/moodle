<?php

$ADMIN->add('reports', new admin_externalpage('report_myreport', get_string('pluginname', 'report_myreport'), "$CFG->wwwroot/report/myreport/index.php",'report/myreport:view'));
$settings = null;