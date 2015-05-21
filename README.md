# laravel-prelauncher
A Laravel Package for an easy Prelauncher which can be removed in a few steps after the App goes in production.

## What will it do
- A Middleware will lock you're App down to use urls only with prelaunch/*
- The included Controller takes care of the rest

## Installation
- Register the Service Provider TecBeast/PreLaunch/PreLaunchServiceProvider
- Edit Config as you wish
- Add Middleware TecBeast/PreLaunch/Middleware/AppIsInPreLaunch
- Add APP_PRELAUNCH=true to .env to enable the prelaunch system
- Add GOOGLE_RECAPTACHA_SECRET=googles_secret to .env for Google reCaptcha
- Add Route::controller to your routes file 

## Usage
- switch PreLauncher on and off by using APP_PRELAUNCH in your .env file
- Currently you can only see youre potential clients directly in the database

## Remove after Launch
- Remove Routes
- Remove ServiceProvider
- Optional Remove Migration and Database Table
- Clean up .env