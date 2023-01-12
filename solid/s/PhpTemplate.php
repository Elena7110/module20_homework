<?php
namespace solid\s;
// класс, который будет реализовывать интерфейс Template
class PhpTemplate implements Template
{

	// добавляем в структуру текущего класса мотод render 
    function render($data)
    {
        echo '<h2>'.$data.'</h2>';
    }
}