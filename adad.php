<?php
// Cấu hình thông tin ứng dụng Facebook của bạn
$appId = '7734667119902424';
$appSecret = '9ecb079755a718d31aa8f71db25c88c2';
$redirectUri = 'https://campaign.local/';

// Bước 1: Lấy mã xác thực từ tham số 'code' trong URL chuyển hướng
if (isset($_GET['code'])) {
    $authCode = $_GET['code'];
    
    // Bước 2: Trao đổi mã xác thực để lấy Short-Lived Access Token
    $tokenUrl = 'https://graph.facebook.com/v15.0/oauth/access_token?' .
        'client_id=' . $appId .
        '&redirect_uri=' . urlencode($redirectUri) .
        '&client_secret=' . $appSecret .
        '&code=' . $authCode;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $tokenUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    $shortLivedToken = $data['access_token'] ?? null;

    if ($shortLivedToken) {
        echo "Short-Lived Access Token: " . $shortLivedToken . "<br>";

        // Bước 3: Đổi Short-Lived Access Token Thành Long-Lived Access Token
        $longLivedTokenUrl = 'https://graph.facebook.com/v15.0/oauth/access_token?' .
            'grant_type=fb_exchange_token' .
            '&client_id=' . $appId .
            '&client_secret=' . $appSecret .
            '&fb_exchange_token=' . $shortLivedToken;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $longLivedTokenUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($response, true);
        $longLivedToken = $data['access_token'] ?? null;

        if ($longLivedToken) {
            echo "Long-Lived Access Token: " . $longLivedToken . "<br>";

            // Bước 4: Sử dụng Long-Lived Access Token để thực hiện API Call
            $accountId = '1577936289047836';  // Thay thế YOUR_AD_ACCOUNT_ID bằng ID của tài khoản quảng cáo
            $apiUrl = "https://graph.facebook.com/v15.0/act_{$accountId}/campaigns?fields=id,name&access_token={$longLivedToken}";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            // $data = json_decode($response, true);

            echo($response);
            // if (isset($data['data'])) {
            //     foreach ($data['data'] as $campaign) {
            //         echo "Campaign ID: " . $campaign['id'] . "<br>";
            //         echo "Campaign Name: " . $campaign['name'] . "<br>";
            //     }
            // } else {
            //     echo "Không thể lấy thông tin các chiến dịch.";
            // }
        } else {
            echo "Không thể lấy Long-Lived Access Token.";
        }
    } else {
        echo "Không thể lấy Short-Lived Access Token.";
    }
} else {
    // Nếu không có mã xác thực, yêu cầu người dùng cấp quyền
    $scope = 'ads_management,ads_read,business_management';
    $authUrl = "https://www.facebook.com/v15.0/dialog/oauth?client_id={$appId}&redirect_uri=" . $redirectUri . "&scope={$scope}&response_type=code";

    echo "Hãy truy cập vào đường dẫn sau để cấp quyền và lấy mã xác thực: <a href=\"$authUrl\">$authUrl</a>";
}

?>
