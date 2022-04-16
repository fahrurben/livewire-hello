<?php


namespace App\Domains\Auth\Http\Controllers\Backend\User;


class UserBiodataController
{
    public function index()
    {
        return view('backend.auth.user.biodata.index');
    }
}
