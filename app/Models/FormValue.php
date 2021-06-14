<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormValue extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function formData()
    {
        return $this->belongsTo(FormData::class);
    }
}
