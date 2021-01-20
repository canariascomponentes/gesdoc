<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    //protected $table = "users"; Olvida la convención y administra la tabla con ese nombre

    // protected $fillable = ['name', 'description', 'category']; //para asignacion masiva definimos los campos que quieres que se rellenen al crear un objeto

    protected $guarded = []; //Si tenemos muchos campos en lugar de fillable podemos decir en guarded los campos protegidos que no se rellenan

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
