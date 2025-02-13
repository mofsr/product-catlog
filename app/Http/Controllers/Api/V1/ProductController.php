<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(Request $request)
    {
        return response()->json($this->productRepository->getAll($request->all()));
    }

    public function show($id)
    {
        return response()->json($this->productRepository->findById($id));
    }

    public function store(ProductRequest $request)
    {
        return response()->json($this->productRepository->create($request->validated()), Response::HTTP_CREATED);
    }

    public function update(ProductRequest $request, $id)
    {
        return response()->json($this->productRepository->update($id, $request->validated()));
    }

    public function destroy($id)
    {
        return response()->json(['message' => 'Deleted'], $this->productRepository->delete($id) ? Response::HTTP_OK : Response::HTTP_NOT_FOUND);
    }
}
