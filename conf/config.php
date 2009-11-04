<?php

# collectd's datadir
$CONFIG['datadir'] = '/var/lib/collectd/rrd';

# category of hosts to show on main page
#$CONFIG['cat']['category1'] = array('host1', 'host2');

# default plugins to show on host page
$CONFIG['overview'] = array('load', 'cpu', 'memory', 'swap');

# default width/height of the graphs
$CONFIG['width'] = 400;
$CONFIG['heigth'] = 175;
# default width/height of detailed graphs
$CONFIG['detail-width'] = 800;
$CONFIG['detail-heigth'] = 350;

# collectd's unix socket (unixsock plugin)
# enabled: 'unix:///var/run/collectd-unixsock'
# disabled: NULL
$CONFIG['socket'] = NULL;

# group data to show in a graph
# XXX: these settings have to move to their plugins
$CONFIG['groupby'] = array(
	'cpu' => 'type',
	'irq' => 'type',
	'memory' => 'type',
	'processes' => 'type',
	'swap' => 'type',
	'sensors' => 'type',
);

# load local configuration
if (file_exists(dirname(__FILE__).'/config.local.php'))
	include 'config.local.php';

?>
