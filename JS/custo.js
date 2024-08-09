const assert = require('assert');

const custoFinal = (cFabrica) => {
  let percentD = 1.28;
  let percentI = 1.45;
  let custoFinal = cFabrica + (cFabrica * percentI - cFabrica) + (cFabrica * percentD - cFabrica); 
  return custoFinal;
}

try {
  assert.equal(17300,custoFinal(10000));
} catch (e) {
  console.log(e);
}
