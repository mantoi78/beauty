<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        //ページネーションオプション
        $option = array_merge([
            'perPage' => 21,
            'columns' => "*",
            'pageName' => 'page',
            'page' => 1
        ], ['page' => $request->query('page')]);

        //salonsのテーブルの一覧データ
        $salons = Salon::query()->orderByDesc('assessment')->paginate(
            $option['perPage'],
            $option['columns'],
            $option['pageName'],
            $option['page'],
        );

        return view('salon.index', compact('salons'));
    }
}
