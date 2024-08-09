#include <stdio.h>
#include <assert.h>

int soma (int a, int b) 
{
  return a + b;
}
int sub (int a, int b) 
{
  return a - b;
}
int mult (int a, int b) 
{
  return a * b;
}
double divisao (double a, double b)
{
  return a / b;
}

int main() 
{
    assert(10 == soma(5,5));
    assert(2 == sub(5,3));
    assert(15 == mult(5,3));
    assert(6 == divisao(12,2));
    return 0;
}