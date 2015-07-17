#!/usr/bin/env python
import serial, time, json
import timeit
from xml.dom import minidom
import sys

lista = ['banana', 'apple',  'mango']
arquivo = []
for number in lista:   
   a = {'valores':[{ 'valor':number}]}
   arquivo.append(a)
print arquivo


