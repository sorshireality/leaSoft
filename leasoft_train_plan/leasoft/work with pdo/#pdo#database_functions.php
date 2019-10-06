<?php
#Проверка есть ли попытка добавить данные
if (isset($_GET['submited'])) { if ($_GET['text_notate']!="") addGrubNotate($_GET['text_notate']);
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
function addGrubNotate($text)
{
    try {

        $connection = connectionDB();
        $sql = "INSERT INTO notations_table (notate,author) VALUES (:text,'Barak Obama')";
        $s = $connection->prepare($sql);
        $s->execute(['text' => $text]);
        print_r($s);
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
        $sql = "Delete from notations_table Where id=:id";
        $s = $connection->prepare($sql);
        $s->execute(['id' => $id]);
    print_r($s);
        #header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
    } catch (PDOException $e)
    {
        echo 'Error delete data : '.$e->getMessage();
        exit();
    }
    }
?>