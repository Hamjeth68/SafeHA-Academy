<?php

use App\Http\Livewire\Products;
use App\Http\Livewire\Purchases;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\CurrentTeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\ApiTokenController;
use Laravel\Jetstream\Http\Controllers\Livewire\PrivacyPolicyController;
use Laravel\Jetstream\Http\Controllers\Livewire\TeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\TermsOfServiceController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use Laravel\Jetstream\Http\Controllers\TeamInvitationController;
use Laravel\Jetstream\Jetstream;

Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {
    if (Jetstream::hasTermsAndPrivacyPolicyFeature()) {
        Route::get('/terms-of-service', [TermsOfServiceController::class, 'show'])->name('terms.show');
        Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('policy.show');
    }

    Route::group(['middleware' => ['auth', 'verified', 'admin']], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/products', function () {
            return view('products');
        })->name('products');


        Route::get('/users', function () {
            return view('users');
        })->name('users');
        

        //reporting
        Route::get('/users/pdf', [Users::class, 'createPDF'])->name('users.pdf');
        Route::get('/purchases/pdf', [Purchases::class, 'createPDF'])->name('purchases.pdf');
        Route::get('/products/pdf', [Products::class, 'createPDF'])->name('products.pdf');

        Route::get('/purchases', function () {
            return view('purchases');
        })->name('purchases');

        Route::get('/scurrency', function () {
            return view('scurrency');
        })->name('scurrency');

        // User & Profile...
        Route::get('/user/profile', [UserProfileController::class, 'show'])
            ->name('profile.show');

        // API...
        if (Jetstream::hasApiFeatures()) {
            Route::get('/user/api-tokens', [ApiTokenController::class, 'index'])->name('api-tokens.index');
        }

        // Teams...
        if (Jetstream::hasTeamFeatures()) {
            Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
            Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
            Route::put('/current-team', [CurrentTeamController::class, 'update'])->name('current-team.update');

            Route::get('/team-invitations/{invitation}', [TeamInvitationController::class, 'accept'])
                ->middleware(['signed'])
                ->name('team-invitations.accept');
        }
    });
});
