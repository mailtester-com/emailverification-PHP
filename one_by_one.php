$email = "test@example.com";

$key = "PUT YOUR API KEY HERE";

$url = "https://app.mailtester.com/api/verifEmail?secret=".$key."&email=".$email;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );

$response = curl_exec($ch);

echo $response;

curl_close($ch);

