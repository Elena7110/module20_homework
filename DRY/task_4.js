// родительскую функцию
function ElectricalAppliance(name) {
	this.device = 'электроприбор',
		this.name = name

}

// функция с методами, которые включают/выключают прибор из розетки.
ElectricalAppliance.prototype.getDeviceIsWorking = function (power, time, on) {
	let turnOn = on;
	//! было
	//TODO if (on === 1) {
	//TODO 	turnOn = 'вкл';
	//TODO } else {
	//TODO	turnOn = 'выкл';
	//TODO };
	on === 1 ? turnOn = 'вкл' : turnOn = 'выкл'; //! DRY строчка

	// вычисление потребляемой мощности
	console.log(`Потребляемая мощность: ${this.name} за ${time} час. = ${power * time}Вт. ${this.name}: ${turnOn}`);
};

// собственные свойства
function Parameters(name, color) {
	this.name = name,
		this.color = color
}

// делегирующая связь [[Prototype]]
Parameters.prototype = new ElectricalAppliance();

const tableLamp = new Parameters('настольная лампа', 'yellow'); // экземпляр прибора
const laptop = new Parameters('компьютер', 'metallic'); // экземпляр прибора

console.log(tableLamp, laptop);

// передаем значения мощности, времени работы, вкл/выкл прибор из розетки
tableLamp.getDeviceIsWorking(17, 2, 0);
laptop.getDeviceIsWorking(100, 6, 1);