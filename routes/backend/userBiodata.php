<?php

use App\Domains\Auth\Http\Controllers\Backend\User\UserBiodataController;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'user-biodata',
    'as' => 'user-biodata.',
], function () {
    Route::get('', [UserBiodataController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__('User Biodata'), route('admin.user-biodata.index'));
        });
});
