<?php
namespace MdTanvirHasanAnik\Chat;
use Illuminate\Support\ServiceProvider;
class ChatServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views' , 'chat');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
    public function register()
    {
//        parent::register(); // TODO: Change the autogenerated stub
    }
}
