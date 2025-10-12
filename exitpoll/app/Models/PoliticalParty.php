<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoliticalParty extends Model
{
    protected $fillable = ['name', 'abbreviation', 'votes', 'color', 'seats'];
}
