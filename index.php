<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPEECH TO TEXT</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="styles.css">

<body>
    <h1 class="text-center">SPEECH TO TEXT</h1>
    <button class="btn btn-primary ml-5 mx-2" id="voice_to_text">
        <img src="voice_recognition.png'" alt="">
        <span class="fw-bold" id="content_default">SOAP-Command</span>
    </button>

    <div id="css_hasil">
    <h1>Hasil Rekord suara ke teks</h1>
    <p id="result"></p>
    </div>"

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            voiceToText({
                defaultButton: false,
                customeButton: "voice_to_text",
                contentButtonDefault: "#content_default",
                customDefaultClassButtonStart: "btn-primary",
                customClassButtonStop: "btn-danger",
                applySpeechTo: "#result"
            });
        });
    </script>
    <script src="main.js"></script>
</body>

</html>