#include <stdio.h>
#include <assert.h>

float custoFinal(float custoF) 
{
  float custoFim = custoF + (custoF * 0.45f) + (custoF * 0.28f);
  return custoFim;
}

int main()
{
  assert(17300.0f == custoFinal(10000));
  return 0;
}