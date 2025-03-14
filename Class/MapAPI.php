<?php

namespace Class;


class MapAPI extends Base
{
    protected $baseUrl = "https://serpapi.com/search?&engine=google_maps";
    protected $apiKey;
    public function __construct($apiKey = null)
    {
        $this->apiKey = $apiKey;
    }
    public function generateQuery($queryParams = ['q' => '', 'll' => ''])
    {
        $queryParams['api_key'] = $this->apiKey;
        return $this->sendRequest(http_build_query($queryParams));
    }
}
