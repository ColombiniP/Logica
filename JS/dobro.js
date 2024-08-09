const assert = require('assert');
const dobro = function(num) {
  return num * 2;
}

try {
  assert.equal(10, dobro(5));
  assert.equal(12, dobro(6));
} catch (e) {
  console.log(e)
}