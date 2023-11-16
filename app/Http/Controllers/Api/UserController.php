<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Services\APIService;

class UserController extends Controller
{
    protected $apiService;


    public function __construct(APIService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function thirdPartyApi()
    {
        $response = $this->apiService->makeAPIRequest();
        return $response;
    }   

    public function user(Request $request)
    {
        $user = $request->user();
        return $this->successResponse($user, 'User found');
    }
}
