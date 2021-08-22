<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressController extends Controller
{
    protected $statusRepository;

    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    public function list(): JsonResponse
    {
        $items = $this->statusRepository->list();

        return response()->json(['items' => $items]);
    }
}
