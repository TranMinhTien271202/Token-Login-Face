<?php

namespace App\Controllers;

use Core\Controller;

class EnvController extends Controller {
    public function env_index() {
        $envFile = dirname(__DIR__, 2) . '/.env';
        if (!file_exists($envFile)) {
            $this->render('env/env', ['error' => 'File .env không tồn tại'], 404);
        }
        $envContent = file_get_contents($envFile);
        $lines = explode("\n", $envContent);
        $envVariables = [];
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0 || trim($line) === '') {
                continue;
            }
            list($key, $value) = explode('=', $line, 2) + [NULL, NULL];
            $key = trim($key);
            $value = trim($value);

            if ($key === 'APP_ID' || $key === 'APP_SECRET' || $key === 'REDIRECT_URI') {
                $envVariables[$key] = $value;
            }
        }
        $this->render('env/env', ['config' => $envVariables]);
    }
}
