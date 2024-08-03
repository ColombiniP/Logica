#include <stdio.h>
#include <assert.h>

int dobro(int num) {
  return num * 2;
}
  
int main(void)
{
  assert(10 == dobro(5));
  assert(12 == dobro(6));
}