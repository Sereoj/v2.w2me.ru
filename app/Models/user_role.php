<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\user_role
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|user_role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_role query()
 * @method static \Illuminate\Database\Eloquent\Builder|user_role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_role whereName($value)
 * @mixin \Eloquent
 */
class user_role extends Model
{
    use HasFactory;

    protected $table = 'user_role';
    protected $fillable = ['id', 'name'];
    public $timestamps = false;
}
