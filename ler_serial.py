#!/usr/bin/env python
import serial, time, json
import timeit
from xml.dom import minidom
import sys

path = sys.argv[1]
baud = sys.argv[2]
vetor = sys.argv[3]

# path = '/dev/ttyACM0'
# baud = 9600
# vetor = '5'

mySerial = serial.Serial(path, baud)
cont = 1
lista = []
contador = int(vetor) + 3
while(cont<= contador): 
    myBuffer = mySerial.readline().strip()
    if(cont > 3):
        lista.append(myBuffer);
    #gera um array ai posso acesa-los, tipo myBuffer.split(":")[0]= contador e myBuffer.split(":")[1]= valor
    cont = cont + 1 

data = []
for number in lista:   
   a = {'valores':[{ 'valor':number}]}
   data.append(a)
print data
# data = {'valores':[{ 'valor':lista[0]}]}
# encoditicado = json.dumps(data)

#criar um txt com o dados em json
with open('data.txt', 'w') as outfile:
    json.dump(data, outfile)
mySerial.close()

