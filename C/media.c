#include <stdio.h>
#include <assert.h>

int media(int n1, int n2, int n3)
{
  double media = (int) (n1 + n2 + n3) / 3;
  return media;
}

int main()
{
  assert(8 == media(8,9,8));
  return 0;
}