from bs4 import BeautifulSoup
import requests
url='https://en.wikipedia.org/wiki/List_of_largest_companies_in_the_United_States_by_revenue'
page=requests.get(url)
soup=BeautifulSoup(page.text, 'html5lib')
#print(soup)
#<table class="wikitable sortable jquery-tablesorter">
soup.find_all('table')[1]


