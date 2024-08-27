  /**
   * ax(2) + bx + c = 0
   * delta = (Δ = b2 - 4.a.c)
   * x1    = ( (-b + √Δ)/2a)
   * x2    = ( (-b - √Δ)/2a)
   */
const assert = require('assert');
let a,b,c;
a = 1;
b = 0;
c = -16;

const delta = (a,b,c) => b ** 2 - 4 * a * c;
const raiz1 = (a,b,c) => ((-b + Math.sqrt(delta(a,b,c))) / 2 * a);
const raiz2 = (a,b,c) => ((-b - Math.sqrt(delta(a,b,c))) / 2 * a);

console.log(delta(a,b,c)); // 64
console.log(raiz1(a,b,c)); // 4
console.log(raiz2(a,b,c)); // -4

try {
  assert.equal(64,delta(a,b,c));
  assert.equal(4,raiz1(a,b,c));
  assert.equal(-4,raiz2(a,b,c));
} catch (e) {
  console.log(e);
}