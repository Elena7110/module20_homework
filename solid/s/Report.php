<?php  
//! код не по принципам solid
// namespace solid\s;
//class Report
// {

// 	// получение информации о докторе, выписывающим отчет
// public function getDoctor (){
// 	// Возврещает строку "Doctor"
// 	echo "Doctor";
// }

//   // получение информации о пациенте из отчета
// public function getPatient (){
// 	// Возврещает строку "Patient"
// 	echo "Patient";
// }

// // получение информации по отчету
// public function getData (){
// 	// Возврещает данные по отчету
// 	echo "Data";
// }

// // метод для отображения на экране информации по конкретному отчету (метод, который отличается от первых трех методов и нарушает принцип о том, что класс должен выполнять только одно определенное действие )
// public function renderReport (){
// 	// Выводна экран всего, что касается отчета
// 	echo $this->getDoctor().'<br/>'. $this->getDoctor().'<br/>'.$this->getData();
// }
// }
?>

//! ----------------------------------------------------------------

<?php
//! исправление
namespace solid\s;
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