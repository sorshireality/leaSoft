<?php
#Если нажата кнопка выйти
if (isset($_GET['forgot_user']))
{
    unset($_SESSION['username']);
    header('Location: '.$_SERVER['HTTP_REFERER']);
}

#Проверка есть ли попытка добавить данные
if (isset($_GET['submited'])) {if ($_GET['text_notate']!=""){
    if ($_GET['author_name']=="") addGrubNotate($_GET['text_notate']);
    else {
        if ($_GET['remember'] = true) $_SESSION['username']=$_GET['author_name'];
        addGrubNotate($_GET['text_notate'],$_GET['author_name']);
         }
}
else {header('Location: ' . $_SERVER['HTTP_REFERER']); exit();}}

#Проверка есть ли попытка удалить данные
if (isset($_GET['delete'])) {deleteGrubNotate($_GET['id']);}

#Функция подключения к ДБ
function connectionDB($host="localhost",$db="munchkin",$name="non-root", $password="!rxY7vb11"): PDO
{
    return new PDO("mysql:host=$host;dbname=$db","$name","$password");
}


#Функция показа всех данных в таблице
function getAllData(): PDOStatement
{
try
{
    $connect = connectionDB();
    $sql = "Select * from notations_table ";
    return $result = $connect->query($sql);
} catch (PDOException $e)
{
    echo "error connect".$e->getMessage();
}
}

#Функция добавления заметки
function addGrubNotate($text,$author = "Lizer")
{
    try {

        $connection = connectionDB();
        $sql = "INSERT INTO notations_table (notate,author) VALUES (:text,:author)";
        $s = $connection->prepare($sql);
        $s->execute(['text' => $text, 'author' => $author]);
        print_r($s);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    } catch (PDOException $e) {
        echo "Error add : " . $e->getMessage();
        exit();
    }
}


#Функция удаления заметки
function deleteGrubNotate($id){
    try{
        $connection = connectionDB();
        $sql = "Delete FROM notations_table Where id=:id";
        $s = $connection->prepare($sql);
        $s->execute(['id' => $id]);
        #print_r($s);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
    } catch (PDOException $e)
    {
        echo 'Error delete data : '.$e->getMessage();
        exit();
    }
    }
?>