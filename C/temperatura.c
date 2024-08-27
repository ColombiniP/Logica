#include <stdio.h>
#include <assert.h>
/**
 * Crie duas funções para conversão de temperaturas.

Uma converterá celsius em fahrenheit e a outra fará o inverso.
 * 
 * toFahrenheit
 * (0 °C × 9/5) + 32 = 32 °F
 * 
 * toCelsius
 * (32 °F − 32) × 5/9 = 0 °C
 */
 
 
 float toCelsius(float fahr)
 {
   float celsius = ( fahr - 32) * 5 / 9;
   return celsius;
 }
 
 float toFahrenheit(float celsius)
 {
   float fahrenheit = ( celsius * 9 / 5) + 32;
   return fahrenheit;
 }
 
 int main(void)
 {
   float fahraToCel = toCelsius(32);
   float celToFahr = toFahrenheit(0);
    printf("ºC = %.2f\n",fahraToCel);
    printf("ºF = %.2f\n",celToFahr);
    
    assert(toCelsius(32) == 0);
    assert(toFahrenheit(0) == 32);
 }