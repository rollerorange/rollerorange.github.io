import sqlite3
import pygal

def getAdminData():
    conn = sqlite3.connect("C:/Users/Administrator/Desktop/rollerorange.github.io-master/sportschoolDatabase.db")
    c = conn.cursor()

    cursor = c.execute('SELECT klantID FROM KLANT_SPORTSCHOOL')
    klanten = c.fetchall()
    klantenAantal = len(klanten)

    cursor = c.execute('SELECT klantID, locatie FROM KLANT_SPORTSCHOOL')
    locKlanten = c.fetchall()
    aantalAmsterdam = 0;
    aantalUtrecht = 0;
    aantalDenhaag = 0;
    aantalLelystad = 0;
    aantalAmersfoort = 0;
    for x in locKlanten:
        if x[1] == "Amsterdam":
            aantalAmsterdam += 1;
        elif x[1] == "Utrecht":
            aantalUtrecht += 1;
        elif x[1] == "Den Haag":
            aantalDenhaag += 1;
        elif x[1] == "Lelystad":
            aantalLelystad += 1;
        elif x[1] == "Amersfoort":
            aantalAmersfoort += 1
    return(klantenAantal, aantalAmsterdam, aantalUtrecht, aantalDenhaag, aantalLelystad, aantalLelystad)

def createAdminDataGraph(TOTAAL, KLANTENAMSTERDAM, KLANTENUTRECHT, KLANTENDENHAAG, KLANTENLELYSTAD, KLANTENAMERSFOORT):
    '''Maakt een .svg grafiek bestand
    data1 = List object met alle data
    data2 = List object met alle data
    data3 = List object met alle data
    data4 = List object met alle data
    data5 = List object met alle data'''
    custom_style = pygal.style.Style(
        colors=('#E853A0', '#E8537A', '#E95355', '#E87653', '#E89B53'),
        font_family='googlefont:Rubik')
    gauge = pygal.SolidGauge(
        half_pie=True, inner_radius=0.50,
        style=custom_style)
    gauge.add('Totaal', [{'value': TOTAAL, 'max_value': TOTAAL}])
    gauge.add('Amsterdam', [{'value': KLANTENAMSTERDAM, 'max_value': TOTAAL}])
    gauge.add('Utrecht', [{'value': KLANTENUTRECHT, 'max_value': TOTAAL}])
    gauge.add('Den Haag', [{'value': KLANTENDENHAAG, 'max_value': TOTAAL}])
    gauge.add('Lelystad', [{'value': KLANTENLELYSTAD, 'max_value': TOTAAL}])
    gauge.add('Amersfoort', [{'value': KLANTENAMERSFOORT, 'max_value': TOTAAL}])
    gauge.render_to_file("C:/Users/Administrator/Desktop/rollerorange.github.io-master/charts/adminChart.svg")

locatieData = getAdminData()
createAdminDataGraph(locatieData[0], locatieData[1], locatieData[2], locatieData[3], locatieData[4], locatieData[5])