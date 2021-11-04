<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\catalog_download_links
 *
 * @property int $id
 * @property int $catalog_download_id
 * @property string|null $link_0
 * @property string|null $link_1
 * @property string|null $link_2
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download_links newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download_links newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download_links query()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download_links whereCatalogDownloadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download_links whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download_links whereLink0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download_links whereLink1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download_links whereLink2($value)
 * @mixin \Eloquent
 */
class catalog_download_links extends Model
{
    use HasFactory;

    //
    //id
    //catalog_download_id
    //link_0
    //link_1
    //link_2

    protected $table = 'catalog_download_links';
    public $timestamps = false;
    protected $fillable = ['id', 'catalog_download_id', 'link_0', 'link_1', 'link_2'];
}
