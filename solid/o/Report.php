<?php 
namespace solid\o;
class Report
{

	// получение информации о докторе, выписывающим отчет
public function getDoctor (){
	// Возврещает строку "Doctor"
	return "Doctor";
}

  // получение информации о пациенте из отчета
public function getPatient (){
	// Возврещает строку "Patient"
	return "Patient";
}

// получение информации по отчету
public function getData (){
	// Возврещает данные по отчету
	return "Data";
}

// методе возвращаем  отпределенный набор данных без вывода на экран. Убрав функцию echo перенли причину по изменеию текущего класса на лругой клас
public function renderReport (){
	return $this->getDoctor().'<br/>'. $this->getDoctor().'<br/>'.$this->getData();
}
}
?>