#!/usr/bin/python

#Written by Myungsik Kim 09/26/2020
import json,requests,cgi,cgitb

cgitb.enable()

form = cgi.FieldStorage()
ticker = form.getvalue('ticker')

payload = {'symbol':ticker, 'token':'bto0drv48v6v7atidivg'}
r = requests.get('https://finnhub.io/api/v1/quote', params=payload)
rs = r.json()

print ('Content-Type: application/json\n\n')
print(json.dumps(rs))