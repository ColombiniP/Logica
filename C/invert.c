#include<stdio.h>
#include<assert.h>
int main()
{
  int a,b,temp;
  a = 999;
  b = 555;
  printf("Variável a: %d\n",a);
  printf("Variável b: %d\n",b);
  temp = a;
  a = b;
  b = temp;
  printf("Variável a: %d\n",a);
  printf("Variável b: %d\n",b);
  
  assert(a==555);
  assert(b==999);
  return 0;
}