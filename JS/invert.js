const assert = require('assert');
let a, b, temp;

a = 999;
b = 555;
temp = a;
a = b;
b = temp;

try {
  assert.equal(555,a);
  assert.equal(999,b);
} catch (e) {
  console.log(e);
}