<?php
//服务器列表
$config['server_list'] = array(
	#array(
	#	'name' => 'localhost server', 
	#	'host' => '127.0.0.1',
	#	'port' => 6379,
	#	'auth' => FALSE, //如无密码，可不设置此键，或将值设置为FALSE or NULL
	#),	
	array(
		'name' => 'cluster server',
		'cluster_list' => array(
			'10.206.48.81:7000',
			'10.206.48.81:7001',
			'10.206.48.81:7002',
			'10.206.48.81:7003',
			'10.206.48.81:7004',
			'10.206.48.81:7005',
		),
	),
	
);
