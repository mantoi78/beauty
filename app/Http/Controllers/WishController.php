<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    /**
     * wishの一覧表示
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(int $part_id)
    {
        $part = Part::query()->with('wishes')->with('wishes.approaches')->find($part_id);
        dd($part);
        return view('wish.index', compact('part'));
    }


}
