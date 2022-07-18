<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Service;

class ServiceController extends BaseController
{
    protected $service, $category;

    public function __construct()
    {
        $this->service = new Service();
        $this->category = new Category();
    }

    public function index()
    {
        $category = $this->request->getGet('category');
        $search = $this->request->getGet('search');
        return view('services/index', [
            'services' => $this->service
                ->search($search)
                ->whereCategory($category)
                ->joinCategory()
                ->orderBy('created_at', 'desc')->findAll(),
            'categories' => $this->category->findAll(),
            'search' => $search,
        ]);
    }

    public function show()
    {
        return view('services/index');
    }
}
