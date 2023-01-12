<?php
namespace solid\o;


interface Saver
{
	// указываем метод который должны будут реализовать все калссы, которые его имплементируют
    function save($data);
}