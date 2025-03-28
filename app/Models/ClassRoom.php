<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    // kalo nama tabel gk sesuai ketentuan laravel ini wajib di definisikan
    // laravel menganggap nama tabel itu bentuk plural / jamak dari nama model
    protected $table = 'class';

    public function students()
    {
        // one to many / has many
        // harus ditulis karena nama tabel class otomatis yg dikenalin kan kalo namanya class_id, sedangkan nama model ClassRoom maka laravel ngenalinnya adl class_room_id sebagai fk nya
        return $this->hasMany(Student::class, 'class_id', 'id');
    }
}
