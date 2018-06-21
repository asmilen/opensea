<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/17/2018
 * Time: 3:14 PM
 */

namespace App\Http\Controllers\System;


use App\Models\Store;
use Illuminate\Support\Facades\App;

class SettingController
{
    public function index () {
        return view('system.setting.index');
    }

    public function frontendConfig() {
        $allStores = App::make('storeService')->query([
            'status' => Store::STATUS_ENABLE
        ])->get();
        $listTopStoreSelected = App::make('settingService')->value('topStores');
        return view('system.setting.frontend-config', compact(['allStores', 'listTopStoreSelected']));
    }
}
