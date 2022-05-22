<?php
require_once 'db_config.php';
class pdoDB {
    private $con_success = 0;
    public function __construct()
    {
        global $db_info;
        try {
            $db = new PDO($db_info['DB_SERVER'].';dbname='.$db_info['DB_NAME'], $db_info['DB_USER'], $db_info['DB_PW']);
            $con_success = 1;
        } catch(PDOException $e) {
            $con_success = 0;
        }
        if($con_success === 1 && !isset($_SESSION)){
            $ts = new DateTime("now", new DateTimeZone('America/Los_Angeles'));
            $ts = $ts->format('Y-m-d H:i:s');
            $ip = getenv('HTTP_CLIENT_IP')?:
            getenv('HTTP_X_FORWARDED_FOR')?:
            getenv('HTTP_X_FORWARDED')?:
            getenv('HTTP_FORWARDED_FOR')?:
            getenv('HTTP_FORWARDED')?:
            getenv('REMOTE_ADDR');
            $get_browser = json_encode(get_browser(null, true));
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            $stmt = $db->prepare("INSERT INTO access_log (ip_addr, get_browser, user_agent, ts) VALUES (:ip_addr, :get_browser, :user_agent, :ts)");
            $stmt->bindParam(':ip_addr', $ip);
            $stmt->bindParam(':get_browser', $get_browser);
            $stmt->bindParam(':user_agent', $user_agent);
            $stmt->bindParam(':ts', $ts);
            $result = $stmt->execute();
        }
    }
}
?>