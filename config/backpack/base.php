<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Look & feel customizations
    |--------------------------------------------------------------------------
    |
    | Make it yours.
    |
    */

    // Date & Datetime Format Syntax: https://carbon.nesbot.com/docs/#api-localization
    'default_date_format'     => 'D MMM YYYY',
    'default_datetime_format' => 'D MMM YYYY, HH:mm',

    // Direction, according to language
    // (left-to-right vs right-to-left)
    'html_direction' => 'ltr',

    // ----
    // HEAD
    // ----

    // Project name. Shown in the window title.
    'project_name' => 'CMS',

    // When clicking on the admin panel's top-left logo/name,
    // where should the user be redirected?
    // The string below will be passed through the url() helper.
    // - default: '' (project root)
    // - alternative: 'admin' (the admin's dashboard)
    'home_link' => '',

    // Content of the HTML meta robots tag to prevent indexing and link following
    'meta_robots_content' => 'noindex, nofollow',

    // ---------
    // DASHBOARD
    // ---------

    // Show "Getting Started with Backpack" info block?
    'show_getting_started' => env('APP_ENV') == 'local',

    // ------
    // STYLES
    // ------

    // CSS files that are loaded in all pages, using Laravel's asset() helper
    'styles' => [
        'packages/backpack/base/css/bundle.css', // has primary color electric purple (backpack default)
        // 'packages/backpack/base/css/blue-bundle.css', // has primary color blue

        // Here's what's inside the bundle:
        // 'packages/@digitallyhappy/backstrap/css/style.min.css',
        // 'packages/animate.css/animate.min.css',
        // 'packages/noty/noty.css',

        // Load the fonts separately (so that you can replace them at will):
        'packages/source-sans-pro/source-sans-pro.css',
        'packages/line-awesome/css/line-awesome.min.css',

        // Example (the fonts above, loaded from CDN instead)
        // 'https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css',
        // 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',

        // Example (load font-awesome instead of line-awesome):
        // 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css',
    ],

    // CSS files that are loaded in all pages, using Laravel's mix() helper
    'mix_styles' => [ // file_path => manifest_directory_path
        // 'css/app.css' => '',
    ],

    // CSS files that are loaded in all pages, using Laravel's @vite() helper
    // Please note that support for Vite was added in Laravel 9.19. Earlier versions are not able to use this feature.
    'vite_styles' => [ // resource file_path
        // 'resources/css/app.css' => '',
    ],

    // ------
    // HEADER
    // ------

    // Menu logo. You can replace this with an <img> tag if you have a logo.
    'project_logo'   => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="79" height="22" viewBox="0 0 79 22">
    <defs>
      <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 281 78">
        <image width="281" height="78" xlink:href="data:image/png;base64,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"></image>
      </pattern>
    </defs>
    <rect id="LOGO_Y_2020_web_green" width="79" height="22" fill="url(#pattern)"></rect>
  </svg> <b>CMS</b>',

    // Show / hide breadcrumbs on admin panel pages.
    'breadcrumbs' => true,

    // Horizontal navbar classes. Helps make the admin panel look similar to your project's design.
    'header_class' => 'app-header bg-dark border-0 navbar',
    // For background colors use: bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white
    // For links to be visible on different background colors use: "navbar-dark", "navbar-light", "navbar-color"

    // ----
    // BODY
    // ----

    // Body element classes.
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    // Try sidebar-hidden, sidebar-fixed, sidebar-compact, sidebar-lg-show

    // Sidebar element classes.
    'sidebar_class' => 'sidebar sidebar-pills bg-dark',
    // Remove "sidebar-transparent" for standard sidebar look
    // Try "sidebar-light" or "sidebar-dark" for dark/light links
    // You can also add a background class like bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan

    // ------
    // FOOTER
    // ------

    // Footer element classes.
    'footer_class' => 'app-footer d-print-none bg-dark',
    // hide it with d-none
    // change background color with bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white

    // Developer or company name. Shown in footer.
    'developer_name' => 'Ípsillon',

    // Developer website. Link in footer. Type false if you want to hide it.
    'developer_link' => 'https://ipsillon.cc',

    // Show powered by Laravel Backpack in the footer? true/false
    'show_powered_by' => false,

    

    // -------
    // SCRIPTS
    // -------

    // JS files that are loaded in all pages, using Laravel's asset() helper
    'scripts' => [
        // Backstrap includes jQuery, Bootstrap, CoreUI, PNotify, Popper
        'packages/backpack/base/js/bundle.js',

        // examples (everything inside the bundle, loaded from CDN)
        // 'https://code.jquery.com/jquery-3.4.1.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        // 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        // 'https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
        // 'https://unpkg.com/sweetalert/dist/sweetalert.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js'

        // examples (VueJS or React)
        // 'https://unpkg.com/vue@2.4.4/dist/vue.min.js',
        // 'https://unpkg.com/react@16/umd/react.production.min.js',
        // 'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js',
    ],

    // JS files that are loaded in all pages, using Laravel's mix() helper
    'mix_scripts' => [ // file_path => manifest_directory_path
        // 'js/app.js' => '',
    ],

    // JS files that are loaded in all pages, using Laravel's @vite() helper
    'vite_scripts' => [ // resource file_path
        // 'resources/js/app.js',
    ],

    // -------------
    // CACHE-BUSTING
    // -------------

    // All JS and CSS assets defined above have this string appended as query string (?v=string).
    // If you want to manually trigger cachebusting for all styles and scripts,
    // append or prepend something to the string below, so that it's different.
    'cachebusting_string' => \PackageVersions\Versions::getVersion('backpack/crud'),

    /*
    |--------------------------------------------------------------------------
    | Registration Open
    |--------------------------------------------------------------------------
    |
    | Choose whether new users/admins are allowed to register.
    | This will show the Register button on the login page and allow access to the
    | Register functions in AuthController.
    |
    | By default the registration is open only on localhost.
    */

    'registration_open' => env('BACKPACK_REGISTRATION_OPEN', env('APP_ENV') === 'local'),

    /*
    |--------------------------------------------------------------------------
    | Routing
    |--------------------------------------------------------------------------
    */

    // The prefix used in all base routes (the 'admin' in admin/dashboard)
    // You can make sure all your URLs use this prefix by using the backpack_url() helper instead of url()
    'route_prefix' => 'admin',

    // The web middleware (group) used in all base & CRUD routes
    // If you've modified your "web" middleware group (ex: removed sessions), you can use a different
    // route group, that has all the the middleware listed below in the comments.
    'web_middleware' => 'web',
    // Or you can comment the above, and uncomment the complete list below.
    // 'web_middleware' => [
    //     \App\Http\Middleware\EncryptCookies::class,
    //     \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
    //     \Illuminate\Session\Middleware\StartSession::class,
    //     \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    //     \App\Http\Middleware\VerifyCsrfToken::class,
    // ],

    // Set this to false if you would like to use your own AuthController and PasswordController
    // (you then need to setup your auth routes manually in your routes.php file)
    // Warning: if you disable this, the password recovery routes (below) will be disabled too!
    'setup_auth_routes' => true,

    // Set this to false if you would like to skip adding the dashboard routes
    // (you then need to overwrite the login route on your AuthController)
    'setup_dashboard_routes' => true,

    // Set this to false if you would like to skip adding "my account" routes
    // (you then need to manually define the routes in your web.php)
    'setup_my_account_routes' => true,

    // Set this to false if you would like to skip adding the password recovery routes
    // (you then need to manually define the routes in your web.php)
    'setup_password_recovery_routes' => true,

    /*
    |--------------------------------------------------------------------------
    | Security
    |--------------------------------------------------------------------------
    */

    // Backpack will prevent visitors from requesting password recovery too many times
    // for a certain email, to make sure they cannot be spammed that way.
    // How many seconds should a visitor wait, after they've requested a
    // password reset, before they can try again for the same email?
    'password_recovery_throttle_notifications' => 600, // time in seconds

    // Backpack will prevent an IP from trying to reset the password too many times,
    // so that a malicious actor cannot try too many emails, too see if they have
    // accounts or to increase the AWS/SendGrid/etc bill.
    //
    // How many times in any given time period should the user be allowed to
    // attempt a password reset? Take into account that user might wrongly
    // type an email at first, so at least allow one more try.
    // Defaults to 3,10 - 3 times in 10 minutes.
    'password_recovery_throttle_access' => '3,10',

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    */

    // Fully qualified namespace of the User model
    'user_model_fqn' => config('auth.providers.users.model'),
    // 'user_model_fqn' => App\User::class, // works on Laravel <= 7
    // 'user_model_fqn' => App\Models\User::class, // works on Laravel >= 8

    // The classes for the middleware to check if the visitor is an admin
    // Can be a single class or an array of classes
    'middleware_class' => [
        App\Http\Middleware\CheckIfAdmin::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        // \Backpack\CRUD\app\Http\Middleware\UseBackpackAuthGuardInsteadOfDefaultAuthGuard::class,
    ],

    // Alias for that middleware
    'middleware_key' => 'admin',
    // Note: It's recommended to use the backpack_middleware() helper everywhere, which pulls this key for you.

    // Username column for authentication
    // The Backpack default is the same as the Laravel default (email)
    // If you need to switch to username, you also need to create that column in your db
    'authentication_column'      => 'email',
    'authentication_column_name' => 'Email',

    // Backpack assumes that your "database email column" for operations like Login and Register is called "email".
    // If your database email column have a different name, you can configure it here. Eg: `user_mail`
    'email_column' => 'email',

    // The guard that protects the Backpack admin panel.
    // If null, the config.auth.defaults.guard value will be used.
    'guard' => 'backpack',

    // The password reset configuration for Backpack.
    // If null, the config.auth.defaults.passwords value will be used.
    'passwords' => 'backpack',

    // What kind of avatar will you like to show to the user?
    // Default: gravatar (automatically use the gravatar for their email)
    // Other options:
    // - null (generic image with their first letter)
    // - example_method_name (specify the method on the User model that returns the URL)
    'avatar_type' => 'gravatar',

    // Gravatar fallback options are 'identicon', 'monsterid', 'wavatar', 'retro', 'robohash', 'blank'
    // 'blank' will keep the generic image with the user first letter
    'gravatar_fallback' => 'blank',

    /*
    |--------------------------------------------------------------------------
    | Theme (User Interface)
    |--------------------------------------------------------------------------
    */
    // Change the view namespace in order to load a different theme than the one Backpack provides.
    // You can create child themes yourself, by creating a view folder anywhere in your resources/views
    // and choosing that view_namespace instead of the default one. Backpack will load a file from there
    // if it exists, otherwise it will load it from the default namespace ("backpack::").

    'view_namespace' => 'backpack::',

    // EXAMPLE: if you create a new folder in resources/views/vendor/myname/mypackage,
    // your namespace would be the one below. IMPORTANT: in this case the namespace ends with a dot.
    // 'view_namespace' => 'vendor.myname.mypackage.',

    // Tell Backpack to look in more places for component views (like widgets)
    'component_view_namespaces' => [
        'widgets' => [
            'backpack::widgets', // falls back to 'resources/views/vendor/backpack/base/widgets'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | File System
    |--------------------------------------------------------------------------
    */

    // Backpack\Base sets up its own filesystem disk, just like you would by
    // adding an entry to your config/filesystems.php. It points to the root
    // of your project and it's used throughout all Backpack packages.
    //
    // You can rename this disk here. Default: root
    'root_disk_name' => 'root',

    /*
    |--------------------------------------------------------------------------
    | Backpack Token Username
    |--------------------------------------------------------------------------
    |
    | If you have access to closed-source Backpack add-ons, please provide
    | your token username here, if you're getting yellow alerts on your
    | admin panel's pages. Normally this is not needed, it is
    | preferred to add this as an environment variable
    | (most likely in your .env file).
    |
    | More info and payment form on:
    | https://www.backpackforlaravel.com
    |
    */

    'token_username' => env('BACKPACK_TOKEN_USERNAME', false),
];
