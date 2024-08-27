#include<stdio.h>
#include<assert.h>

int parOuImpar(int n) 
{
  return n % 2;
}

int main()
{
  assert(0 == parOuImpar(2));
  assert(1 == parOuImpar(3));
  return 0;
}