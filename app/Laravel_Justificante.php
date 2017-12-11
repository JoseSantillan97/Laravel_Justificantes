<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laravel_Justificante extends Model
{
    protected $table = 'Laravel_Justificantes';
    protected $fillable = ['matricula', 'carrera', 'motivo'];
    protected $guarded = ['id'];
}
