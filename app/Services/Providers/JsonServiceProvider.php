<?php

namespace App\Services\Providers;

use App\Services\ProviderServiceInterface;

class JsonServiceProvider extends ProviderServiceInterface
{

    public function fetchContent(string $url, int $page = 1, int $perPage = 10) :array
    {
        $response = Http::get($url, [
            'q' => $query,
            'page' => $page,
            'per_page' => $perPage
        ])->throw()->json();

        return $response;
    }

    public function addDataToDatabase(array $data) :void
    {

    }
    
}
