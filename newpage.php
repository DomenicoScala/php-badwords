<?php 

$textParagraph = $_GET['text'];
$badWord = $_GET['censored'];
$textParagraphModified = str_replace($badWord, '***', $textParagraph);
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NewPage</title>
    </head>
    <body>
        
        <div>
            <label for="">
                TESTO:
            </label>
            <p><?php echo $textParagraph ?></p>
        </div>

        <div>
            <label for="">
                LUNGHEZZA:
            </label>
            <p> <?php echo strlen($textParagraph)?></p>
        </div>

        <div>
            <label for="">
                TESTO MODIFICATO
            </label>

            <p><?php echo str_replace($badWord, '***', $textParagraph)?></p>
        </div>
        
        <div>
            <label for="">
                LUNGHEZZA MODIFICATA
            </label>
            <p><?php echo strlen($textParagraphModified) ?></p>
        </div>

    </body>
</html>