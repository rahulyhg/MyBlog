<html>
    <head>
        <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
        <script>
            // Initialize Firebase
            var config = {
                apiKey: "AIzaSyCzm2EaWLkgfxCRsq4kOgZUIQvofFWjtE4",
                authDomain: "myblog-5b6bf.firebaseapp.com",
                databaseURL: "https://myblog-5b6bf.firebaseio.com",
                projectId: "myblog-5b6bf",
                storageBucket: "",
                messagingSenderId: "190365729125"
            };
            firebase.initializeApp(config);
        </script>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
            echo '<p>Bonjour le monde</p>';
            use Kreait\Firebase\Factory;
            $firebase = (new Factory)->create();
        ?>
    </body>
</html>
