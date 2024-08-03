#include <stdio.h>
#include <assert.h>

float reajuste(float salario, float ajuste)
{
  return salario * (ajuste / 100);
}

int main()
{
  assert(150 == reajuste(,15));
  return 0;
}