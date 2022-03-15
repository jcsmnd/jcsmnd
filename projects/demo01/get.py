#!/usr/bin/python

#Written by Myungsik Kim 09/26/2020
import json,requests,cgi,cgitb

cgitb.enable()

form = cgi.FieldStorage()
ticker = form.getvalue('ticker')

if ticker is not None :
    payload = {'symbol':ticker, 'token':'c8mh6uqad3ie3jik8gkg'}
    r = requests.get('https://finnhub.io/api/v1/quote', params=payload)
    rs = r.json()
    rs2 = rs['c']
    if rs2 == 0:
        print ('Content-Type: application/json\n\n')
        print('{"error":"Wrong ticker name try again"}') 
    else :
        print ('Content-Type: application/json\n\n')
        print(rs2)
else :
    print ('Content-Type: application/json\n\n')
    print('{"error":"Please type ticker"}')