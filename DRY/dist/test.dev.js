"use strict";

function tens1(num) {
  var tens = [' двадцать', ' тридцать', ' сорок', ' пятьдесят', ' шестьдесят', ' семьдесят', ' восемьдесят', ' девяносто'];

  if (String(num).length > 1 && num >= 20) {
    var ten = tens[Math.floor(num / 10) - 2];
    console.log(num);
    console.log(ten);
    return ten;
  } else {
    var ten = "Err";
    return ten;
  }
}

textAnswer = textAnswer + tens1(9);
num = num % 10;