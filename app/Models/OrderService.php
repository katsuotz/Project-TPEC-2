<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderService extends Model
{
    protected $table = 'order_services';
    protected $protectFields = true;
    protected $primaryKey = 'order_service_id';
    protected $allowedFields = [
        'service_id',
        'order_id',
        'title',
        'description',
        'price',
        'image',
    ];

    // Dates
    protected $useTimestamps = true;
}
