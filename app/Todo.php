<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'todos';

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];
}
