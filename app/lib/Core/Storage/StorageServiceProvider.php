<?php namespace Core\Storage;
 
use Illuminate\Support\ServiceProvider;
 
class StorageServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'Core\Storage\User\UserRepository',
      'Core\Storage\User\EloquentUserRepository'
    );
  }
 
}