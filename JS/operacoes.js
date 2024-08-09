const assert = require('assert');

const soma = (a,b) => a + b
const sub = (a,b) => a - b
const divisao = (a,b) => a / b
const mult = (a,b) => a * b

try {
  assert.equal(10, soma(5,5));
  assert.equal(10, sub(20,10));
  assert.equal(10, divisao(20,2));
  assert.equal(10, mult(5,2));
} catch (e) {
  console.log(e);
}