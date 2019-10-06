<?php session_start(); ?>
<html>
<head>
    <?php include "#pdo#notate_list.php"?>
    <title>Notate List</title></head>
<body>
<?php if (isset($_SESSION['username'])) {?>
<div style="width: 100%; background: limegreen; text-align: center">
    Hello broh <?php print $_SESSION['username']; ?>
    <a href="?forgot_user=true"><input type="button" value="Забыть"></a>
</div>
<?php } ?>
<table border="3px">
    <tr><th>Id</th><th>Notate</th><th>Author</th><th></th></tr>
    <?php  $local_notation = getNotationList(); foreach ($local_notation as $value => $item) { ?>
        <tr>
            <td><?php print $value;?></td>
            <td><?php print $item['notate'];?></td>
            <td><?php print $item['author'];?></td>
            <td>
                <form action="#" method="GET">
                <input type="hidden" name="id" value=<?php print $value; ?>>
                    <input type="submit" name="delete" value="Удалить">

                </form>
            </td>

        </tr>
    <?php } ?>

</table>
<form action="#pdo#database_functions.php" method="get">
    <?php if (!isset($_SESSION['username'])) { ?>
    Введите ваше имя : <input type="text" name="author_name"> Запомнить меня <input type="checkbox" name="remember"><br>
    <?php } ?>
Введите текст заметки : <input type="text" name="text_notate"><br>
<input type="submit" name="submited" value="Добавить">
</form>
</body>
</html>