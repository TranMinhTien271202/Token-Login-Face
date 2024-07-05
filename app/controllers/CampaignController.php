<?php

namespace App\Controllers;

use Core\Controller;

class CampaignController extends Controller
{
    public function CP_index()
    {
        $key = 'campaign';
        $this->render('campaign\Campaign', ['key' => $key]);
    }

    public function CP_CampaignCreate()
    { 
        $post_json = file_get_contents('php://input');
        $data = json_decode($post_json, true);
        $name = $data['data']['name'] ?? null;
        $purchaseMethod = $data['data']['purchase_method'] ?? null;
        $special_ad_categories = [];
        $status = $data['data']['status'] ?? null;
        $objective = $data['data']['objective'] ?? null;
        $datas = [
            'name' => $name,
            'purchase_method' => $purchaseMethod,
            'status' => $status,
            'objective' => $objective,
            'special_ad_categories' => $special_ad_categories
        ];
        $data_json = json_encode($datas);
        $token = $_COOKIE['token_campaign'];
        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json',
        );
        $url = 'https://graph.facebook.com/v20.0/act_431786637562827/campaigns';
        $ch = curl_init($url);

        // Cấu hình các tùy chọn cho cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);

        if(curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        echo $response;
        var_dump($response);
        die();
    }

    public function CP_adset()
    {
        $key = 'adset';
        $this->render('campaign\Campaign', ['key' => $key]);
    }

    public function CP_ads()
    {
        $key = 'ads';
        $this->render('campaign\Campaign', ['key' => $key]);
    }
}
