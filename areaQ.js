const assert = require('assert');
const area = function(ladoA, ladoB) {
  return ladoA * ladoB;
}

try {
  assert.equal(27, area(9, 3));
} catch (e) {
  console.log(e);
}