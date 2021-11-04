<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\license_type
 *
 * @method static \Illuminate\Database\Eloquent\Builder|license_type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|license_type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|license_type query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|license_type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|license_type whereType($value)
 * @property int $catalog_id
 * @property string|null $cost
 * @property string|null $currency
 * @method static \Illuminate\Database\Eloquent\Builder|license_type whereCatalogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|license_type whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|license_type whereCurrency($value)
 */
class license_type extends Model
{
    use HasFactory;
    //id	type

    protected $table = 'license_type';
    protected $fillable = ['id', 'type'];
}
