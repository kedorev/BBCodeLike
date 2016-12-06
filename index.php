<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 06/12/16
 * Time: 09:23
 */

?>
<p xmlns="http://www.w3.org/1999/html">
    Pour chaque information, écriver les avec le nom, suivis de : spérarer les par '|' <br/>
    Exemple  "Title: Mon titre|Mail: mon_email@xxx.xxx"</br>
</p>
    <ul>
        <li>
            Pour mettre en gras : ~gras votre text ici /gras
        </li>
        <li>
            Pour souligner : ~souligne votre text ici /souligne
        </li>
        <li>
            Pour un tableau :
            <ul>
                <li>
                    ~tab en début de tableau
                </li>
                <li>
                    ~_ en début de ligne
                </li>
                <li>
                    ~| en début de colonne
                </li>
                <li>
                    /_ en fin de colonne
                </li>
                <li>
                    /_ en fin de ligne
                </li>
                <li>
                    /tab en fin de tableau
                </li>
            </ul>
        </li>
    </ul>

<form action="generate.php" method="post" id="userform">
<fieldset>
    <label for="Global">Enter Global Information: </label><BR/>
    <textarea form="userform" name="Global" id="Global" rows="4" cols="100"/>

    </textarea>
    <br/>
    <label for="Global">Enter Pseudo Code: </label><BR/>
    <textarea name="pseudoCode" id="pseudoCode" form="userform" rows="10" cols="150">

    </textarea>
    <br/>
    <input type="submit" name="submit" value="Parse"  />
</fieldset>
</form>

