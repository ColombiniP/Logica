const assert = require('assert');

const juros_s = (capital,taxaEmprestimo,periodo) => capital * (taxaEmprestimo / 100) * periodo;

// console.log(juros_s(16,4,4));

try {
  assert.equal(2.56,juros_s(16,4,4))
} catch (e) {
  console.log(e)
}