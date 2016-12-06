<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 06/12/16
 * Time: 11:40
 */
include "ChromePhp.php";


if(isset($_POST['pseudoCode']) && isset($_POST['pseudoCode'])) {
    $data = htmlspecialchars($_POST['Global']);
    $pseudoCode = htmlspecialchars($_POST['pseudoCode']);
    //preg_match("Title");


    $keywords = preg_split("/[\|]+/", $data);
    foreach ($keywords as $keyword) {
        $splitKeywords = preg_split("/[\:]+/", $keyword);
        $metaData[$splitKeywords[0]] = $splitKeywords[1];
    }


    /**
     * Define new line, carriage return
     */
    $htmlPatern = array(
        0 => "/\n/",
        1 => "/\r/"

    );

    $htmlConverts = array(
        0 => "<br/>",
        1 => ""
    );

    $pseudoCode = preg_replace($htmlPatern, $htmlConverts, $pseudoCode);




    /**
     * Define HTML
     */
    $htmlPatern = array(
        0 => "/\~titre/",
        1 => "/\/titre/"

    );

    $htmlConverts = array(
        0 => "<h1>",
        1 => "</h1>"
    );

    $pseudoCode = preg_replace($htmlPatern, $htmlConverts, $pseudoCode);


    /**
     * Define CSS
     */
    $htmlPatern = array(
        0 => "/\~gras/",
        1 => "/\/gras/",
        2 => "/\~souligne/",
        3 => "/\/souligne/"

    );

    $htmlConverts = array(
        0 => "<span class=\"bold\">",
        1 => "</span>",
        2 => "<span class=\"underline\">",
        3 => "</span>"
    );

    $pseudoCode = preg_replace($htmlPatern, $htmlConverts, $pseudoCode);


    $htmlPatern = array(
        0 => "/\~tab/",
        1 => "/\/tab/",
        2 => "/\~\_/",
        3 => "/\/\_/",
        4 => "/\~\|/",
        5 => "/\/\|/"


    );

    $htmlConverts = array(
        0 => "<table>",
        1 => "</table>",
        2 => "<tr>",
        3 => "</tr>",
        4 => "<td>",
        5 => "</td>"
    );

    $pseudoCode = preg_replace($htmlPatern, $htmlConverts, $pseudoCode);


    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <?php
            if(isset($metaData['encodage']))
            {
                echo "<meta charset=\"".$metaData['encodage']."\">";
            }
            else
            {
                echo "<meta charset=\"UTF-8\">";
            }
            if(isset($metaData['auteur']))
            {
                echo "<meta name=\"author\" content=\"".$metaData['auteur']."\">";
            }
            else
            {
                echo "<meta charset=\"UTF-8\">";
            }

            ?>
            <title>
                <?php if(isset($metaData['title']))
                    echo $metaData['title'];
                    ?>
            </title>
            <link rel="stylesheet" href="css.css">
        </head>
        <body>
            <?php echo $pseudoCode; ?>
        </body>
    </html>
    <?php
}
