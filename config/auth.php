// config/auth.php

'guards' => [
'web' => [
'driver' => 'session',
'provider' => 'users',
],

'api' => [
'driver' => 'passport',
'provider' => 'users',
],
],

'providers' => [
'users' => [
'driver' => 'eloquent',
'model' => App\Models\User::class,
],
],