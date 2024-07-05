<?php

namespace App\Controllers;

use Core\Controller;

class FaceBookController extends Controller {
    public function FB_index() {
        $APP_ID = $_ENV['APP_ID'] ?? '';
        $REDIRECT_URI = $_ENV['REDIRECT_URI'] ?? '';
        $SCOPE = 'ads_management,ads_read,business_management';
        $url = "https://www.facebook.com/v20.0/dialog/oauth?client_id={$APP_ID}&redirect_uri=" . $REDIRECT_URI . "&scope={$SCOPE}&response_type=code";
        header("Location: " . $url);
        die();
    }

    public function FB_callback() {
        $params = $_GET['code'];
        if (isset($params)) {
            $APP_ID = $_ENV['APP_ID'] ?? '';
            $REDIRECT_URI = $_ENV['REDIRECT_URI'] ?? '';
            $APP_SECRET = $_ENV['APP_SECRET'] ?? '';
            $tokenUrl = 'https://graph.facebook.com/v20.0/oauth/access_token?'.'client_id='.$APP_ID.'&redirect_uri='.$REDIRECT_URI.'&client_secret='.$APP_SECRET.'&code=' . $params;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $tokenUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $data = json_decode($response, true);
            $shortLivedToken = $data['access_token'] ?? null;
            $access_token = $this->changetoken($shortLivedToken);
            $expireTime = time() + (30 * 24 * 60 * 60);
            setcookie("token_campaign", $access_token, $expireTime, "/");
            // $this->Response(['code' => $access_token]);
            $this->redirect('/');
        }
    }
    public function changetoken($token) {
        $APP_ID = $_ENV['APP_ID'] ?? '';
        $APP_SECRET = $_ENV['APP_SECRET'] ?? '';
        if($token) {
            $longLivedTokenUrl = 'https://graph.facebook.com/v15.0/oauth/access_token?' .
            'grant_type=fb_exchange_token' .
            '&client_id=' . $APP_ID .
            '&client_secret=' . $APP_SECRET .
            '&fb_exchange_token=' . $token;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $longLivedTokenUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $data = json_decode($response, true);
            $longLivedToken = $data['access_token'] ?? null;

            return $longLivedToken;
        }
    }
}
