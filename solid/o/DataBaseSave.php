<?php
namespace solid\o;

// класс DataBaseSave имплементирует (реализует) интерфейс Saver
class DataBaseSave implements Saver
{
// объявляем  закрытые свойста  
    private $mysqli, $host, $user, $pass, $db;
// создаем конструктор и указываем четыре свойства, которые мы инициализируем в данном конструкторе
    public function __construct($host, $user, $pass, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
    }
// создаем функцию connect
    public function connect() {
        $this->mysqli = new \mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->mysqli->connect_error) {
            die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
                . $this->mysqli->connect_error);
        }
    }
// пишем публичный метод который будетсохранять информацию в базуданных
    public function save($data) {
		// соединение с базой данных
        $this->connect();
		//   сохраняем информацию в базе данных
        $this->mysqli->query("INSERT INTO `reports` (report) VALUES ('".$data."')");
    }


}