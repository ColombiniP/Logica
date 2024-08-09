const assert = require('assert');

const media = function(n1, n2, n3) {
  let media = (n1 + n2 + n3) / 3;
  let resultado = parseInt(media);
  return resultado;
}

try {
  // console.log(media(7,8,7))
  assert.equal(5, media(7,8,0));
} catch(e) {
  console.log(e);
}