<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Profile Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in profile messages
    | that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'title' => 'Profile',
    'profile' => [
        'title' => 'Profile Information',
        'description' => 'Update your account\'s profile information and email address.',
        'photo' => 'Photo',
        'select' => 'Select A New Photo',
        'remove' => 'Remove Photo',
        'unverified' => 'Your email address is unverified.',
        'resend' => 'Click here to re-send the verification email.',
        'sent' => 'A new verification link has been sent to your email address.',
    ],
    'password' => [
        'title' => 'Update Password',
        'description' => 'Ensure your account is using a long, random password to stay secure.',
        'current' => 'Current Password',
        'new' => 'New Password',
    ],
    '2fa' => [
        'title' => 'Two Factor Authentication',
        'description' => 'Add additional security to your account using two factor authentication.',
        'disabled' => 'You have not enabled two factor authentication.',
        'enabled' => [
            'confirm' => 'Finish enabling two factor authentication.',
            'enabled' => 'You have enabled two factor authentication.',
        ],
        'explanation' => 'When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Authenticator application.',
    ],

];
