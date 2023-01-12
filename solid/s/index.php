<?php
namespace solid\s;
// создаем объект отчета
$report = new \solid\s\Report();
// создаем объект шаблонизатора
$template = new \solid\s\HtmlTemplate();

// обращаемся к шаблонизатору и вызываем на исполнение метод render
// $template->render($report->renderReport());

$report = new \solid\o\Report();
// создаем объект репозитория.В качестве первого аргумента передаем объект отчета report, в качестве второго объект имя файла
// $repository = new \solid\o\ReportRepository($report, new \solid\o\FIleSave(filepath: 'file.txt'));
// в качестве второго аргумента передать объект класса DataBaseSave: сервер, пользователь, пароль, база данных
$repository = new \solid\o\ReportRepository($report, new \solid\o\DataBaseSave(host: "localhost", user: 'root', pass: '', db: 'solid'));
// вызываем на исполнение метод save
$repository->save();
?>