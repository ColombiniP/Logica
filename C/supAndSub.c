#include <stdio.h>
#include <assert.h>

int sup(int num)
{
  return ++num;
}

int sub(int num){
  return --num;
}

int main()
{
  assert(5 == sub(6));
  assert(7 == sup(6));
  return 0;
}