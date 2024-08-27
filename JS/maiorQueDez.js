const assert = require('assert');

function maiorQDez(n) {
  if (n >= 10) {
    return 1;
  } else {
    return 0;
  }
}

try {
  assert.equal(maiorQDez(10),1);
  assert.equal(maiorQDez(-10),0);
  assert.equal(maiorQDez(9),0);
} catch (e) {
  console.log(e);
}