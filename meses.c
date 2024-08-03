#include <stdio.h>
#include <assert.h>

int dias(int meses)
{
  return meses * 30;
}

int main()
{
  assert(210 == dias(7));
  return 0;
}