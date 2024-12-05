<?php
function mostrar_formulario(){
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Nome:<input type=text name="nome"><br>
        Email:<input type=text name="mail"><br><br>
        Qual é a sua linguagem de programação preferida?<br>
        <input type=radio name="linguagem" value="PHP"> PHP<br>
        <input type=radio name="linguagem" value="C++"> C++<br>
        <input type=radio name="linguagem" value="C"> C<br>
        <input type=radio name="linguagem" value="ASP"> ASP<br><br>
        Qual é a seu <emph>browser</emph> preferido?<br>
        <input type=radio name="browser" value="Firefox">Firefox<br>
        <input type=radio name="browser" value="Chrome">Chrome<br><br>
        <input type=submit value="Enviar dados">
        </form>
    <?php
}