<?php

namespace App\Models;

use CodeIgniter\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'service_id';
    protected $allowedFields = [
        'title',
        'description',
        'estimated_price',
        'image',
        'slug',
        'category_id',
        'user_id',
    ];

    // Dates
    protected $useTimestamps = true;

    public function joinCategory()
    {
        return $this->join('categories', 'categories.category_id = services.category_id');
    }
}
