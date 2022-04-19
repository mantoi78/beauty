<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index()
    {
        // partsのテーブルの一覧データ
        $parts = Part::query()->get()->all();

        return view('part.index', compact('parts'));
    }
}
