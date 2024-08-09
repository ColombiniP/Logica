#include<stdio.h>
#include<assert.h>

float juros(float capital, float taxaEmprestimo, float periodo)
{
  return capital * (taxaEmprestimo / 100) * periodo;
}

int main()
{
  // J = C.i.n -> formula
  /*
  *J = juros,
  *C = capital,
  *i = taxa de empréstimo
  *n = períodos
  */
  assert(2560 == juros(16000,4,4));
  return 0;
}