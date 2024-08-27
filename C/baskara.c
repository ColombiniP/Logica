#include <math.h>
#include <assert.h>
#include <stdio.h>

int delta(int a, int b, int c) 
{
  return b * b -4 * a * c;
}

int raiz1(int a, int b, int c) 
{
    return (-b + sqrt(delta(a,b,c))) / 2 * a;
}
int raiz2(int a, int b, int c) 
{
    return (-b - sqrt(delta(a,b,c))) / 2 * a;
}

int main(void)
{
  int a,b,c;
  a = 1;
  b = 0;
  c = -16;
  
  int x = delta(a,b,c);
  int x1 = raiz1(a,b,c);
  int x2 = raiz2(a,b,c);
  
  printf("delta = %d\n",x);
  printf("raiz + = %d\n",x1);
  printf("raiz - = %d\n",x2);
  
  assert(64 == delta(a,b,c));
  assert(4 == raiz1(a,b,c));
  assert(-4 == raiz2(a,b,c));
  
  return 0;
}