# WordPress Update Manager Pro Plugin
A WordPress plugin to manage your wordpress core, plugin and theme updates.

## Watch Video Tutorial
[![Sample](http://img.youtube.com/vi/_AeUZUDBUXU/0.jpg)](https://www.youtube.com/watch?v=_AeUZUDBUXU)

## What you can do with this plugin
+ Disable all automatic updates
```php
add_filter( 'automatic_updater_disabled', '__return_true' );
```
+ Disable/Enable development updates
```php
// Enable
add_filter( 'allow_dev_auto_core_updates', '__return_true' ); 
// Disable
add_filter( 'allow_dev_auto_core_updates', '__return_false' ); 
```
+ Disable/Enable minor updates 
```php
// Enable
add_filter( 'allow_minor_auto_core_updates', '__return_true' ); 
// Disable
add_filter( 'allow_minor_auto_core_updates', '__return_false' ); 
```
+ Disable/Enable major updates
```php
// Enable
add_filter( 'allow_major_auto_core_updates', '__return_true' );
// Disable
add_filter( 'allow_major_auto_core_updates', '__return_false' );
```
+ Disable/Enable automatic updates for All plugins:
```php
// Enable
add_filter( 'auto_update_plugin', '__return_true' );
// Disable
add_filter( 'auto_update_plugin', '__return_false' );
```
+ Disable/Enable automatic updates for All themes:
```php
// Enable
add_filter( 'auto_update_theme', '__return_false' );
// Disable
add_filter( 'auto_update_theme', '__return_true' );
```
