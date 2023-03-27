<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeFakultas extends Model
{
    use HasFactory;
    protected $table = 'codefakultas';
    protected $fillable = 'code_fakultas';
}
