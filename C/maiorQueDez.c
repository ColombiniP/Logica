#include<stdio.h>
#include<assert.h>

int maiorQDez(int n)
{
  if (n > 10) {
    return 1;
  } else {
    return 0;
  }
}

int main()
{
  assert(maiorQDez(5) == 0);
  assert(maiorQDez(0) == 0);
  assert(maiorQDez(15) == 1);
  assert(maiorQDez(-15) == 0);
  return 0;
}