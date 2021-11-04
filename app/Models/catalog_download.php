<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\catalog_download
 *
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $size
 * @property string|null $links
 * @property int $count_download
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download whereCountDownload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download whereLinks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download whereUpdatedAt($value)
 * @property int $catalog_id
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download whereCatalogId($value)
 */
class catalog_download extends Model
{
    use HasFactory;

    //id	size	links	count_download	created_at	updated_at
    protected $table = 'catalog_download';
    protected $fillable = ['id', 'catalog_id', 'size', 'count_download'];

    public function links()
    {
        return $this->hasOne(catalog_download_links::class);
    }


}
