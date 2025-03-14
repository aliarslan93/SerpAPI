# SerpAPI
Scrape Google and other search engines from our fast, easy, and complete API.
# Official Docs
<a href="https://serpapi.com/" target="_blank">Official Docs </a>

# Usage
Add composer vendor your path index.php
<code>require_once "vendor/autoload.php";</code>
<br>
<code><?php
require_once "vendor/autoload.php";
use Class\SearchAPI;
$searchAPI = new SearchAPI();
$response = $searchAPI->generateQuery(["q" => "Coffee", 'location' => "Austin"]);
/** $response should be Array */
var_dump($response);
exit;
</code>

