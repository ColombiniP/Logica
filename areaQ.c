#include <assert.h>
#include <stdio.h>
int area(int ladoA, int ladoB) {
  return ladoA * ladoB;
}

int main()
{
  assert(27 == area(3, 9));
  return 0;
}