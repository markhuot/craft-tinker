<?php

namespace markhuot\crafttinker;

use Craft;
use craft\base\Plugin;
use craft\console\Application as ConsoleApplication;

class CraftTinker extends Plugin {

    static $plugin;

    function init() {
        static::$plugin = $this;

        // Add in our console commands
        if (Craft::$app instanceof ConsoleApplication) {
            $this->controllerNamespace = 'markhuot\crafttinker\console';
        }
    }

}
