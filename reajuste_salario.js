const assert = require('assert');
const reajuste = (salario, taxa) => salario * (taxa / 100);

try {
  assert.equal(150, reajuste(1000,15));
} catch (e) {
  console.log(e);
}