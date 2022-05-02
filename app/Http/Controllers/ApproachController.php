<?php

namespace App\Http\Controllers;

use App\Models\Approach;
use Illuminate\Http\Request;

class ApproachController extends Controller
{
    /**
     * approachの一覧表示
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $approaches = Approach::query()->get()->all();

        return view('approach.index', compact('approaches'));
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function detail(int $id)
    {
        $approaches = Approach::query()->findOrFail($id);

        return view('approach.detail', compact('approache'));
    }
}
