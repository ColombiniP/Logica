#include<stdio.h>
#include<assert.h>

int ehPositivo(int n)
{
  if (n >= 0) {
    return 1;
  } else {
    return 0;
  }
}

int main()
{
  assert(ehPositivo(10) == 1);
  assert(ehPositivo(0) == 1);
  assert(ehPositivo(-10) == 0);
  return 0;
}