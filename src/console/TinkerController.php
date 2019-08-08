<?php

namespace markhuot\crafttinker\console;

use yii\console\Controller;

class TinkerController extends Controller {

    function actionIndex() {
        $_SERVER['argv'] = [];
        $_SERVER['argc'] = 0;
        $argv = [];
        $argc = 0;

        call_user_func(\Psy\bin());
    }

}