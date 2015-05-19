# laravel-prelauncher
A Laravel Package for an easy Prelauncher which can be removed in a few steps after the App goes in production.

## Installation
- Register the Service Provider TecBeast/PreLaunch/PreLaunchServiceProvider
- Edit Config as you wish
- Add Middleware TecBeast/PreLaunch/Middleware/AppIsInPreLaunch
- Add APP_PRELAUNCH=true to .env to enable the prelaunch system
- Add Route::controller to your routes file 

(optional set url / to prelauncher)
```
Route::get('/', '\TecBeast\PreLaunch\Controllers\PreLaunchController@getIndex');
```

## Usage
- switch PreLauncher on and off by using APP_PRELAUNCH in your .env file
- Currently you can only see youre potential clients directly in the database

## Remove after Launch
- Remove Routes
- Remove ServiceProvider
- Optional Remove Migration and Database Table