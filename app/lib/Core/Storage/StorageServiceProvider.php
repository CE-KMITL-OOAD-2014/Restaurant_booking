<?php namespace Core\Storage;
 
use Illuminate\Support\ServiceProvider;
 
class StorageServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'Core\Storage\User\UserRepository',
      'Core\Storage\User\EloquentUserRepository'
    );

    $this->app->bind(
      'Core\Storage\Restaurant\RestaurantRepository',
      'Core\Storage\Restaurant\EloquentRestaurantRepository'
    );

    $this->app->bind(
      'Core\Storage\Area\AreaRepository',
      'Core\Storage\Area\EloquentAreaRepository'
    );
  }
 
}