<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Content Questions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php include 'includes/nav.php'; ?>
<div id="background">
    <div class="container my-3">
        <div class="container" id="content-container">
            <h1>Content Questions</h1>
            <p>Click on "Show/Hide Answer" to reveal the answer for each question</p>

            <div class="container" id="content-container">
                <h2>--Question--</h2>
                <table class="table table-dark border text-light">
                    <tbody>
                        <tr>
                            <td>
                            --Description--
                            </td>
                        </tr>
                        <tr class="answer-row">
                            <td>
                                <a class="btn" data-bs-toggle="collapse" href="#collapseExample" id="outline-button" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Show/Hide Answer
                                </a>
                                
                                <div class="collapse" id="collapseExample">
                                --Answer--
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
