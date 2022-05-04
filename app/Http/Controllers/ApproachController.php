<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Wish;
use App\Models\Approach;
use Illuminate\Http\Request;

class ApproachController extends Controller
{
    /**
     * approachの一覧表示
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(int $wish_id)
    {
        $approach = Approach::query()->get()->all();

        return view('approach.index', compact('approach'));
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function detail(int $id)
    {
        $approach = Approach::query()->findOrFail($id);

        return view('approach.detail', compact('approach'));
    }
}
