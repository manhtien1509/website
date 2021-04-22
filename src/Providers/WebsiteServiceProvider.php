<?php 
namespace Waygou\Website\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{
	public function boot()
	{
		dd("Hello");
	}

	public function register()
	{

	}
}