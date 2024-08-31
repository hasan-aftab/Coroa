<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BetCategory;
use App\Models\BetEvent;
use App\Models\BetSection;
use App\Models\Category;
use App\Models\Game;
use App\Models\GameExclusive;
use App\Models\GamesKscinus;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gamesPopulars      = Game::orderBy('views', 'desc')->whereActive(1)->limit(12)->get();
        $games              = Game::limit(24)->whereActive(1)->get();
        $gamesExclusives    = GameExclusive::whereActive(1)
            ->orderBy('views', 'desc')
            ->get();
        $gamesPragmatic    = GamesKscinus::whereStatus(1)
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

//        $gameCardImages = [
//            'eb557ede-b7cd-44e4-b52f-05e68c0048b5.png',
//            'd3e67e6b-d882-4d34-8ff3-a4ff6c388d4c.png',
//            'f76d3f4a-9712-4bd1-9426-f3ab7069b6a2.png',
//            '5b5df584-a36b-4bd3-b16a-bdaaa8644d50.png',
//            'ff0b0511-1f48-43d1-8dd3-294bb6437b4b.png',
//            'f5bd4e53-2b58-4c29-b9ce-4da5336e3ad3.png'
//        ];

        return view('web.home.index', [
            'gamesPopulars' => $gamesPopulars,
            'games' => $games,
            'gamesExclusives' => $gamesExclusives,
            'gamesPragmatic' => $gamesPragmatic,
            'events' => $events,
//            'gameCardImages' => $gameCardImages
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function banned()
    {
        return view('web.banned.index');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function howWorks()
    {
        return view('web.home.how-works');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function aboutUs()
    {
        return view('web.home.about-us');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function suporte()
    {
        return view('web.home.suporte');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function showGameByCategory(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if(!empty($category)) {
            $games = Game::where('category_id', $category->id)->whereActive(1)->paginate();

            return view('web.categories.index', compact(['games', 'category']));
        }

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
