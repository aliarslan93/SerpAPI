<?php

namespace Class;


class SearchAPI extends Base
{

    protected $baseUrl = "https://serpapi.com/search.json";
    protected $apiKey;
    public function __construct($apiKey = null)
    {
        $this->apiKey = $apiKey;
    }
    public function generateQuery($queryParams = ['q' => '', 'location' => '', 'hl' => '', 'gl' => '', 'google_domain' => ''])
    {
        $queryParams['api_key'] = $this->apiKey;
        return $this->sendRequest(http_build_query($queryParams));
    }
}
