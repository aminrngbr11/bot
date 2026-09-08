<?php
// This variable added for high load panels which their response time is long and bot can't communicate with online panel!
// null for default settings
$request_exec_timeout = null;
$dbhost = 'sakura.proxy.rlwy.net:12041';
$dbname = 'railway';
$usernamedb = 'root';
$passworddb = 'FKiQRcLJMSnlsHzbaWyGtVoBKEcBSoCE';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$dsn = "mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $usernamedb, $passworddb, $options);
} catch (\PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("error: database connection failed");
}
$APIKEY = '8942433541:AAG_lvWnQkj_9S5WWM4fKU8TXmcDZjbZq4E';
$adminnumber = '8782675695';
$domainhosts = 'bot-production-0a7d.up.railway.app';
$usernamebot = '@MobinaVpnShopBot';

?>
