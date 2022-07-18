<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Service;

class Home extends BaseController
{
    protected $service, $category;

    public function __construct()
    {
        $this->service = new Service();
        $this->category = new Category();
    }

    public function index()
    {
        return view('index', [
            'services' => $this->service->joinCategory()->orderBy('created_at', 'desc')->findAll(),
            'categories' => $this->category->findAll(),
        ]);
    }

    public function merchant()
    {
        return view('merchant/index');
    }
}
