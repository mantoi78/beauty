<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Modelクラスは、主にデータベースとの連携を行う役割を担います。基本的には1テーブルにつき1Modelクラス
//Approachテーブルに紐付け
class Approach extends Model
{
    use HasFactory;

    protected $fillable = ['wish_id', 'name', 'description'];

    /**
     * @return BelongsTo
     */
    public function wishes(): BelongsTo
    {
        //$approach->wish approachとwishの関連　対
        return $this->belongsTo(wish::class);
    }
}
