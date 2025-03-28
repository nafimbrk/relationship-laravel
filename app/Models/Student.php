<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'nis', 'class_id'];

    public function class()
    {
        // many to one / belongs to
        // kalo fk nya class_id dan pk nya id gini aja udah cukup
        return $this->belongsTo(ClassRoom::class);
    }
}
