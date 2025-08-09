<?php

namespace App\Services;

interface ProviderServiceInterface
{
    
    public function fetchContent(string $url, int $page = 1, int $perPage = 10) :array;

    public function addDataToDatabase(array $data) :void;

}
