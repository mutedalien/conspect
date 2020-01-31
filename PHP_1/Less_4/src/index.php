<html>
    <head></head>
    <body>
    <!-- Делаем скелет сайта -->
        <table border="1" width="100%" height="100%">
            <tr height="15%">
                <td colspan="3">
                   <?php include "blocks/header.php";?>
                </td>
            </tr>
            
            <tr>
                <td width="10%">Левое меню</td>
                <td> <?php include "blocks/content.php";?></td>
                <td width="10%">Правое меню</td>
            </tr>
            <tr height="15%">
                 <td colspan="3">
                    <h1>Подвал сайта</h1>
                </td>
            </tr>
        </table>
    </body>
</html>