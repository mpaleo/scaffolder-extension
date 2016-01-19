<?php

namespace ScaffolderExtension;

use Illuminate\Support\ServiceProvider;
use ViewTags\ViewTags;

class ScaffolderExtensionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load extension view
        $this->loadViewsFrom(__DIR__ . '/../../extension-views', 'scaffolder.extension.cool');

        // Tag extension view
        ViewTags::tag('scaffolder.extension.cool::extension', 'scaffolder.extension');
    }

    public function register()
    {
        $this->app->singleton('scaffolder.extension.cool', function ()
        {
            return new Extension();
        });

        $this->app->tag('scaffolder.extension.cool', 'scaffolder.extension');
    }
}
