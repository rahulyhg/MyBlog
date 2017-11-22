<html>
<head>
    <title>Test PHP</title>
    <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCzm2EaWLkgfxCRsq4kOgZUIQvofFWjtE4",
            authDomain: "myblog-5b6bf.firebaseapp.com",
            databaseURL: "https://myblog-5b6bf.firebaseio.com",
            projectId: "myblog-5b6bf",
            storageBucket: "myblog-5b6bf.appspot.com",
            messagingSenderId: "190365729125"
        };
        firebase.initializeApp(config);
    </script>
</head>
<body>
<?php
require __DIR__ . '/../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount =
    ServiceAccount::fromJsonFile(__DIR__ . '/../myblog-5b6bf-firebase-adminsdk-fvoav-26320f1a36.json');
$apiKey = 'AIzaSyCzm2EaWLkgfxCRsq4kOgZUIQvofFWjtE4';

$firebase = (new Factory)
    ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
    ->create();
$database = $firebase->getDatabase();
$reference = $database->getReference('test/user');
$reference->set([
    'name' => 'My Application',
    'emails' => [
        'support' => 'support@domain.tld',
        'sales' => 'sales@domain.tld',
    ],
    'website' => 'https://app.domain.tld',
]);
?>
</body>
</html>
