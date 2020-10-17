#!/usr/bin/python

#Written by Myungsik Kim 09/26/2020
import finnhub,json,requests

print("Content-Type: text/html\n")
print('<!DOCTYPE html>')
print('<html lang="en">')
print('<head>')
print('<title>')
print('US STOCK TRACKING')
print('</title')
print('</head>')
print('<body>')
# Setup client
finnhub_client = finnhub.Client(api_key="bto0drv48v6v7atidivg")

# Stock candles
res = finnhub_client.stock_candles('AAPL', 'D', 1590988249, 1591852249)
print(json.dumps(res))

print('<br>')
print('<br>')

# Basic financials
print(json.dumps(finnhub_client.company_basic_financials('AAPL', 'margin')))

print('<br>')
print('<br>')

r = requests.get('https://finnhub.io/api/v1/stock/profile2?symbol='+123+'&token=bto0drv48v6v7atidivg')
r2 = r.json()
print(json.dumps(r2))

print('<br>')
print('<br>')

r = requests.get('https://finnhub.io/api/v1/quote?symbol=AAPL&token=bto0drv48v6v7atidivg')
print(r.json())
print('</body>')
print('</html>')