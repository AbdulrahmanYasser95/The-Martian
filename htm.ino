#include <dht.h>

dht DHT;

#define DHT11_PIN 7

void setup(){
  Serial.begin(9600);
}

void loop()
{
  int chk = DHT.read11(DHT11_PIN);
  Serial.print("Temperature = ");
  Serial.println(DHT.temperature);
  Serial.print("Humidity = ");
  Serial.println(DHT.humidity);
  Serial.print("Soil moisture level =");
  Serial.println(analogRead(A0));
  if (analogRead(A0)<200){
    Serial.println("Irrigation: On");
  }
  else {
    Serial.println("Irrigation: Off");
    }
  Serial.println("");
  delay(1000);
}

