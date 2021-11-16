#include "DHT.h"
//include libary untuk jaringan WiFi
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>
#define triggerPin  D8
#define echoPin     D7

//siapkan variabel untuk WiFi hotspot dan password
const char* ssid = "DUTA TERAPI";
const char* pass = "76543210";

//siapkan variabel host/ server yang menampung aplikasi web dan database
const char* host = "192.168.0.21";

void setup() {
  Serial.begin (9600);
  pinMode(triggerPin, OUTPUT);
  pinMode(echoPin, INPUT);

  //koneksi ke WiFi
  WiFi.begin(ssid, pass);
  Serial.println("connecting...");
  while(WiFi.status() != WL_CONNECTED)
  {
    Serial.print(".");
    delay(500);

    //apabila berhasil terkoneksi
    Serial.println("Connected");
  }
  
}
void loop() {
  long duration, ketinggian, air,luas,Volume,Volume_Tabung,Volume_persen ;
  digitalWrite(triggerPin, LOW);
  delayMicroseconds(2); 
  digitalWrite(triggerPin, HIGH);
  delayMicroseconds(10); 
  digitalWrite(triggerPin, LOW);
  duration = pulseIn(echoPin, HIGH);
  ketinggian = (duration/2) / 29.1;
  air = 132-ketinggian ;
  luas = (22/7*52*52);
  Volume = air*luas;
  Volume_Tabung = Volume/1000;
  Serial.println("volume air :");
  Serial.print(Volume_Tabung);

  
//kirim data ke server
  WiFiClient client ;
  //inisialisasi port web server 80
  const  int httpPort = 80;
 if( !client.connect(host, httpPort) )
  {
    
    Serial.println("Connect Failed");
    return;
  }
  
  //kondisi pasti terkoneksi
  //kirim data sensor ke database / web
  
  String Link ;
  HTTPClient http ;

  Link = "http://" + String(host) +  "/contoh/kirimdata.php?volumeair=" + String(Volume_Tabung);
  
  
  //eksekusi alamat link
  http.begin(client, Link);
  http.GET ();

  //baca respon setelah berhasil kirim nilai sensor
  String respon = http.getString ();
  Serial.println(respon);
  http.end(); 
  delay(5000);
}
