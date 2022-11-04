<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function goods(){
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }
}
