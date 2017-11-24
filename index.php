<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>

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
header("Location: src/view/articles.php");
?>
</body>
</html>