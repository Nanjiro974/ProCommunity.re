<?php

namespace App\Policies;

use TeamTeaTime\Category\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use TeamTeaTime\Forum\Policies\CategoryPolicy;

class CustomCategoryPolicy extends CategoryPolicy
{
    public function createThreads($user,$category): bool
    {
    
        $role = $user->toArray()["role"];
        if ($role == "admin") 
        {
            return true;
        } 
        else {
            return false;
             }
    }  

    
// TODO: to delete
// {
//     use HandlesAuthorization;

//     /**
//      * Determine whether the user can view any models.
//      *
//      * @param  \App\Models\User  $user
//      * @return \Illuminate\Auth\Access\Response|bool
//      */
//     public function viewAny(User $user)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can view the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Post  $post
//      * @return \Illuminate\Auth\Access\Response|bool
//      */
//     public function view(User $user, Post $post)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can create models.
//      *
//      * @param  \App\Models\User  $user
//      * @return \Illuminate\Auth\Access\Response|bool
//      */
//     public function create(User $user)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can update the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Post  $post
//      * @return \Illuminate\Auth\Access\Response|bool
//      */
//     public function update(User $user, Post $post)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can delete the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Post  $post
//      * @return \Illuminate\Auth\Access\Response|bool
//      */
//     public function delete(User $user, Post $post)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can restore the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Post  $post
//      * @return \Illuminate\Auth\Access\Response|bool
//      */
//     public function restore(User $user, Post $post)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can permanently delete the model.
//      *
//      * @param  \App\Models\User  $user
//      * @param  \App\Models\Post  $post
//      * @return \Illuminate\Auth\Access\Response|bool
//      */
//     public function forceDelete(User $user, Post $post)
//     {
//         //
//     }
 }
