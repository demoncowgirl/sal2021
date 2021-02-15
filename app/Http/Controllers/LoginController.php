<?php
use Illuminate\Http\Request;

protected function credentials(Request $request)
{

    /// this method is overriden form Illuminate\Foundation\Auth\AuthenticatesUsers; class
    $field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
        ? $this->username()
        : 'username';

    return [
        $field => $request->get($this->username()),
        'password' => $request->password,
    ];
}
