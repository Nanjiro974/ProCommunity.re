<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Policies
    |--------------------------------------------------------------------------
    |
    | Here we specify the policy classes to use. Change these if you want to
    | extend the provided classes and use your own instead.
    |
    */

    'policies' => [
        // 'forum' => TeamTeaTime\Forum\Policies\ForumPolicy::class,
        'forum' => App\Policies\CustomForumPolicy::class,
        // 'thread'=>  App\Policies\CustomThreadPolicy::class,
        // 'post'  =>  App\Policies\CustomPostPolicy::class,
        'model' => [
            // TeamTeaTime\Forum\Models\Category::class => TeamTeaTime\Forum\Policies\CategoryPolicy::class,
            // TeamTeaTime\Forum\Models\Thread::class => TeamTeaTime\Forum\Policies\ThreadPolicy::class,
            // TeamTeaTime\Forum\Models\Post::class => TeamTeaTime\Forum\Policies\PostPolicy::class,
            TeamTeaTime\Forum\Models\Category::class => App\Policies\CustomCategoryPolicy::class,
            TeamTeaTime\Forum\Models\Thread::class =>   App\Policies\CustomThreadPolicy::class,
            TeamTeaTime\Forum\Models\Post::class =>     App\Policies\CustomPostPolicy::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Application user model
    |--------------------------------------------------------------------------
    |
    | Your application's user model.
    |
    */

    'user_model' => App\Models\User::class,

    /*
    |--------------------------------------------------------------------------
    | Application user name
    |--------------------------------------------------------------------------
    |
    | The user model attribute to use for displaying usernames.
    |
    */

    'user_name' => 'name',

];
