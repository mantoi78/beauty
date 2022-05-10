<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Wish;
use App\Models\Approach;

class ApproachController extends Controller
{
    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function detail(int $id)
    {
        $approach = Approach::query()->findOrFail($id);
        $wish = Wish::query()->findOrFail($approach->wish_id);
        $part = Part::query()->findOrFail($wish->part_id);

        return view('approach.detail', compact('approach', 'part'));
    }
}
