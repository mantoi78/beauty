<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

//クラス
class PartController extends Controller
{
    //プロパティ
    /**
     * partの一覧表示
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    //メソッド
    public function index()
    {
        // partsのテーブルの一覧データ
        $parts = Part::query()->get()->all();

        return view('part.index', compact('parts'));
    }

}
