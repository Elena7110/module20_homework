<?php
namespace solid\s;
// класс, который будет реализовывать интерфейс Template
class HtmlTemplate implements Template
{

	// добавляем в структуру текущего класса мотод render 
    function render($data)
    {
		// выводим на экран содержимо переменной data с подключенными шаблонами дизайна
        echo '<h1>'.$data.'</h1>';
    }
}


?>