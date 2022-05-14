<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Wish;
use App\Models\Approach;
use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //salonsのテーブルの一覧データ
        $salons = Salon::query()->get()->all();

        return view('salon.index', compact('salons'));
    }
}
