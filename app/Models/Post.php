<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    /**
     * LLAVE PRIMARIA DE LA TABLA
     *
     * @var string
     */
    protected $primaryKey = 'post_id';

    /*LOS ATRIBUTOS QUE SE VAN A LLENAR*/
    protected $fillable = [
        'titulo',
        'extracto',
        'contenido',
        'acceso',
        'caducable',
        'comentable',
    ];

        /**
     * The table associated with the model.
     *
     * @var string
     */
        protected $table = 'posts';
}
