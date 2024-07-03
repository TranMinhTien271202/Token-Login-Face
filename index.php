<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Facebook API Access Token</title>
        <meta name="description" content="Facebook API Access Token Example">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!-- app id 1015870310241641 -->
        <!-- app secret fdef6c70b6330080749dc7d6ac5976d7 -->
        
        <?php
        $app_id = '1015870310241641';  // App ID của bạn
        $app_secret = 'fdef6c70b6330080749dc7d6ac5976d7';  // App Secret của bạn
        $redirect_uri = 'http://yourdomain.com/';  // Thay thế URL này bằng URL của trang hiện tại

        // Kiểm tra xem có mã xác thực từ Facebook không
        $code = isset($_GET['code']) ? $_GET['code'] : '';

        if ($code) {
            // Đổi mã xác thực lấy access token
            $token_url = "https://graph.facebook.com/v12.0/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";
            $response = file_get_contents($token_url);
            $params = json_decode($response, true);
            $access_token = $params['access_token'];

            echo "<h1>Access Token:</h1>";
            echo "<p>" . $access_token . "</p>";
        } else {
            // Tạo URL yêu cầu quyền đăng nhập
            $auth_url = "https://www.facebook.com/v12.0/dialog/oauth?client_id=$app_id&redirect_uri=$redirect_uri&scope=public_profile,email";
            echo "<h1>Login with Facebook</h1>";
            echo "<a href=\"$auth_url\">Click here to login with Facebook</a>";
        }
        ?>
    </body>
</html>
