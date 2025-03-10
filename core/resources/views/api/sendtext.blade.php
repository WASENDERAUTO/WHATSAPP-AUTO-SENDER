<div class="d-flex mb-3 gap-3">
    <div>
        <span class="badge bg-label-primary rounded-2 p-2">
            <i class="ti ti-brand-whatsapp ti-lg"></i>
        </span>
    </div>
    <div>
        <h4 class="mb-0">
            <span class="align-middle">SendText</span>
        </h4>
        <small>Api Docs Sending Text Messages</small>
    </div>
</div>
<div id="accordionPayment" class="accordion">
    <div class="card">
        <div class="card-body">
            <p>SendText is an API that allows you to send text messages to WhatsApp numbers.</p>
            <span class="text-info">Endpoint :</span> {!! config('app.base_node') !!}/api/send-message <br>
            <span class="text-info">Method :</span> POST <br>
            <span class="text-info">Download Example PHP :</span> <a class="fw-bold" target="_blank" href="https://wasenderauto.github.io/example-Warengateway/">Download</a><br>

            <div class="card accordion-item mt-3">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#sendtext-array" aria-controls="accordionPayment-1">
                        Array Body
                    </button>
                </h2>

                <div id="sendtext-array" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <pre style="border-radius: 6px;"><code class="hljs language-php">{
  "api_key" => "{!! $main_device->api_key !!}",
  "receiver" => "628xxxxxxxx",
  "data":{
    "message": "Hello World"
  }
}</code></pre>
                    </div>
                </div>
            </div>

            <div class="card accordion-item mt-3">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#sendtext-curl" aria-controls="accordionPayment-1">
                        Code Example Curl
                    </button>
                </h2>

                <div id="sendtext-curl" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <pre style="border-radius: 6px;"><code class="hljs language-php">curl -X POST \
'{!! config('app.base_node') !!}/api/send-message' \
--header 'Accept: */*' \
--header 'Content-Type: application/json' \
--data-raw '{
  "api_key": "{!! $main_device->api_key !!}",
  "receiver": "628xxxxxxxx",
  "data":{
    "message": "Hello World"
  }
}</code></pre>
                    </div>
                </div>
            </div>

            <div class="card accordion-item mt-3">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#sendtext-curl-php" aria-controls="accordionPayment-1">
                        Code Example PHP
                    </button>
                </h2>

                <div id="sendtext-curl-php" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <pre style="border-radius: 6px;"><code class="hljs language-php">$body = array(
  "api_key" => "{!! $main_device->api_key !!}",
  "receiver" => "628xxxxxxxx",
  "data" => array("message" => "Hello World")
);

$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "{!! config('app.base_node') !!}/api/send-message",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($body),
  CURLOPT_HTTPHEADER => [
    "Accept: */*",
    "Content-Type: application/json",
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
