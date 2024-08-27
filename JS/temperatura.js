const assert = require('assert');

const toCelcius = (fahr) => {
  return parseInt((fahr - 32) * 5 / 9);
}

const toFahrenheit = (celc) => {
  return parseInt((celc * 9 / 5) + 32);
}

console.log(toCelcius(80));
console.log(toFahrenheit(21));

try {
  assert.equal(toCelcius(80),26);
  assert.equal(toFahrenheit(21),69);
} catch (e) {
  console.log(e);
}