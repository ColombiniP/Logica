const assert = require('assert');

function parOuImpar(n) {
  return n % 2;
}

try {
  assert.equal(0,parOuImpar(2));
  assert.equal(1,parOuImpar(3));
} catch (e) {
  console.log(e);
}