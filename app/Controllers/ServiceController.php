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

    public function index($category = null)
    {
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

    public function show($category, $slug)
    {
        return view('services/show', [
            'service' => $this->service->whereSlug($slug)->joinCategory()->first(),
            'validation' => \Config\Services::validation(),
        ]);
    }
}
