<?php
/**
 *  app/Models/ProductFeature.php
 *
 * Date-Time: 10.06.21
 * Time: 11:09
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductFeature
 * @package App\Models
 * @property integer $id
 * @property integer $feature_id
 * @property integer $product_id
 * @property string $answers
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class ProductFeature extends Model
{
    use HasFactory, softDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_features';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'feature_id',
        'product_id',
        'answers'
    ];

    /** @var array */
    protected $casts = ['answers' => 'array'];
}
