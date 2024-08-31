<?php

use App\Models\BetEvent;
use App\Models\Game;
use App\Models\GameExclusive;
use App\Models\GamesKscinus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::any('/old-design', function () {
    $gamesPopulars = Game::orderBy('views', 'desc')->whereActive(1)->limit(6)->get();
    $games = Game::limit(24)->whereActive(1)->get();
    $gamesExclusives = GameExclusive::whereActive(1)
        ->orderBy('views', 'desc')
        ->get();
    $gamesPragmatic = GamesKscinus::whereStatus(1)
        ->orderBy('views', 'desc')
        ->get();

    $events = BetEvent::where('bet_category_id', 1)
        ->whereDate('event_day', '>=', Carbon::today())
        ->orderBy('event_day', 'desc')
        ->orderByRaw('CASE
                WHEN DATE(event_day) = ? THEN 0
                ELSE 1
                END', [Carbon::today()->toDateString()])
        ->take(8)
        ->get();

    $gameCardImages = [
        'eb557ede-b7cd-44e4-b52f-05e68c0048b5.png',
        'd3e67e6b-d882-4d34-8ff3-a4ff6c388d4c.png',
        'f76d3f4a-9712-4bd1-9426-f3ab7069b6a2.png',
        '5b5df584-a36b-4bd3-b16a-bdaaa8644d50.png',
        'ff0b0511-1f48-43d1-8dd3-294bb6437b4b.png',
        'f5bd4e53-2b58-4c29-b9ce-4da5336e3ad3.png'
    ];

    return view('new-index', [
        'gamesPopulars' => $gamesPopulars,
        'games' => $games,
        'gamesExclusives' => $gamesExclusives,
        'gamesPragmatic' => $gamesPragmatic,
        'events' => $events,
        'gameCardImages' => $gameCardImages
    ]);
});

Route::get('/test', function () {
    return view('emails.new-withdrawal', ['valor' => \Helper::amountFormatDecimal(150), 'usuario' => 'Victor']);
});

include_once(__DIR__ . '/groups/auth/login.php');
include_once(__DIR__ . '/groups/auth/social.php');
include_once(__DIR__ . '/groups/auth/register.php');

// PROVIDERS
include_once(__DIR__ . '/groups/provider/slotegrator.php');
include_once(__DIR__ . '/groups/provider/pragmatic.php');
include_once(__DIR__ . '/groups/provider/suitpay.php');

Route::prefix('painel')
    ->as('panel.')
    ->middleware(['auth'])
    ->group(function () {
        include_once(__DIR__ . '/groups/panel/wallet.php');
        include_once(__DIR__ . '/groups/panel/bets.php');
        include_once(__DIR__ . '/groups/panel/profile.php');
        include_once(__DIR__ . '/groups/panel/notifications.php');
        include_once(__DIR__ . '/groups/panel/affiliates.php');
    });

Route::middleware(['web'])
    ->as('web.')
    ->group(function () {
        include_once(__DIR__ . '/groups/web/home.php');
        include_once(__DIR__ . '/groups/web/game.php');
        include_once(__DIR__ . '/groups/web/category.php');
        include_once(__DIR__ . '/groups/web/bets.php');
        include_once(__DIR__ . '/groups/web/vgames.php');
        include_once(__DIR__ . '/groups/web/kscinus.php');
    });

// URL::forceScheme('https');
