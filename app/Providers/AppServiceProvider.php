<?php

namespace App\Providers;


use App\Repositories\ArticleRepository;
use App\Repositories\AttractionRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CollectionRepository;
use App\Repositories\ContactRepository;
use App\Repositories\CustomerMessageRepository;
use App\Repositories\DealRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\RedisRepository;
use App\Repositories\SettingRepository;
use App\Repositories\StoreRepository;
use App\Repositories\TicketComponentRepository;
use App\Repositories\TicketRepository;
use App\Repositories\TourRepository;
use App\Repositories\TourRequestRepository;
use App\Repositories\RequestRepository;
use App\Repositories\TrackingRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('redisService', function () {
            return new RedisRepository();
        });
        $this->app->singleton('linkGeneratorService', function () {
            return new LinkGeneratorRepository();
        });
        $this->app->singleton('settingService', function () {
            return new SettingRepository();
        });
        $this->app->singleton('paymentService', function () {
            return new PaymentRepository();
        });
        $this->app->singleton('storeService', function () {
            return new StoreRepository();
        });
        
        $this->app->singleton('trackingService', function () {
            return new TrackingRepository();
        });
        $this->app->singleton('ticketService', function () {
            return new TicketRepository();
        });
        $this->app->singleton('ticketComponentService', function () {
            return new TicketComponentRepository();
        });
        $this->app->singleton('categoryService', function () {
            return new CategoryRepository();
        });
        $this->app->singleton('collectionService', function(){
            return new CollectionRepository();
        });
        $this->app->singleton('contactService', function(){
            return new ContactRepository();
        });
        $this->app->singleton('tourService', function(){
            return new TourRepository();
        });
        $this->app->singleton('attractionService', function(){
            return new AttractionRepository();
        });
        $this->app->singleton('tourRequestService', function(){
            return new TourRequestRepository();
        });
        $this->app->singleton('customerMessageService', function(){
            return new CustomerMessageRepository();
        });
        $this->app->singleton('requestService', function(){
            return new RequestRepository();
        });
    }
}
