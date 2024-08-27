const assert = require('assert');

function ehPositivo(n) {
  if (n < 0) {
    return 0;
  } else {
    return 1;
  }
}

try {
  assert.equal(ehPositivo(10), 1);
  assert.equal(ehPositivo(0), 1);
  assert.equal(ehPositivo(-10), 0);
} catch (e) {
  console.log(e);
}