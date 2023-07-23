<?php

namespace App;

use App\Models\NewsModel;

class App {
    public static function getModel($model) 
    {
        if ($model == 'news') {
            return new NewsModel();
        }
    }
}