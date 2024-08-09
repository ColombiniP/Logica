const assert = require('assert');

const sup = function(num) {
  return ++num;
}

const sub = function(num) {
  return --num;
}

try {
  assert.equal(5, sub(6));
  assert.equal(7, sup(6));
} catch (e) {
  console.log(e);
}