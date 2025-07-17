<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'u111878875_Crm2',
    'user' => 'u111878875_Crm2',
    'password' => 'Zero123123.*',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false,
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1751849507.641776,
  'cryptKey' => '51f785db72958bc78133f3547ea846c8',
  'hashSecretKey' => 'b917015378916b10f249a37e2f7230b1',
  'defaultPermissions' => [
    'user' => 111878875,
    'group' => 2005189882
  ],
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.11.10',
  'instanceId' => '4458fb4c-fbea-4b70-ac7c-45ffcbbaa709'
];
