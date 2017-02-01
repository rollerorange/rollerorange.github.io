import sys
import sqlite3
import pygal

def getUserData(ID):
    '''Geeft 5 lists met userdata terug
    CODE = String van code die gezocht wordt in de database.
    Return = 5 lists'''
    conn = sqlite3.connect("C:/Users/Administrator/Desktop/rollerorange.github.io-master/sportschoolDatabase.db")
    c = conn.cursor()
    
    cursor = c.execute('SELECT type FROM KLANT, KLANT_APPARAAT WHERE KLANT.klantID = KLANT_APPARAAT.klantID AND KLANT.klantID=?', (ID,))
    apparaten = c.fetchall()
    apparatenLijst = []
    for x in apparaten:
        apparatenLijst.append(x[0])

    cursor = c.execute('SELECT verbrande_calorieen FROM KLANT, KLANT_APPARAAT WHERE KLANT.klantID = KLANT_APPARAAT.klantID AND KLANT.klantID=?', (ID,))
    calorieen = c.fetchall()
    calorieenLijst = []
    for y in calorieen:
        calorieenLijst.append(y[0])

    cursor = c.execute('SELECT aptijd FROM KLANT, KLANT_APPARAAT WHERE KLANT.klantID = KLANT_APPARAAT.klantID AND KLANT.klantID=?', (ID,))
    tijd = c.fetchall()
    tijdLijst = []
    for z in tijd:
        tijdLijst.append(z[0])

    zippedList = zip(apparatenLijst, calorieenLijst, tijdLijst)
    volleLijst = list(zippedList)
    temp = []
    eindLijst = []
    for x in volleLijst:
        temp = [x[1], x[2]]
        eindLijst.append(temp)
    return(eindLijst)

def createUserDataGraph(USERID, UREN1, UREN2, UREN3, UREN4, UREN5, CAL1, CAL2, CAL3, CAL4, CAL5):
    '''Maakt een .svg grafiek bestand
    data1 = List object met alle data
    data2 = List object met alle data
    data3 = List object met alle data
    data4 = List object met alle data
    data5 = List object met alle data'''
    totaleUren = UREN1 + UREN2 + UREN3 + UREN4 + UREN5
    totaleCalorieen = CAL1 + CAL2 + CAL3 + CAL4 + CAL5
    custom_style = pygal.style.Style(
        colors=('#E853A0', '#E8537A', '#E95355', '#E87653', '#E89B53'),
        font_family='googlefont:Rubik')
    gauge = pygal.SolidGauge(
        half_pie=True, inner_radius=0.50,
        style=custom_style)
    if totaleUren is not 0 and totaleCalorieen is not 0:
        gauge.add('Uren Gesport', [{'value': totaleUren, 'max_value': totaleUren}])
        gauge.add('Crosstrainer', [{'value': UREN1, 'max_value': totaleUren}])
        gauge.add('Hometrainer', [{'value': UREN2, 'max_value': totaleUren}])
        gauge.add('Loopband', [{'value': UREN3, 'max_value': totaleUren}])
        gauge.add('Roeitrainer', [{'value': UREN4, 'max_value': totaleUren}])
        gauge.add('Krachtstation', [{'value': UREN5, 'max_value': totaleUren}])
        gauge.add('Totale Calorieen', [{'value': totaleCalorieen, 'max_value': totaleCalorieen}])
        gauge.add('Crosstrainer', [{'value': CAL1, 'max_value': totaleCalorieen}])
        gauge.add('Hometrainer', [{'value': CAL2, 'max_value': totaleCalorieen}])
        gauge.add('Loopband', [{'value': CAL3, 'max_value': totaleCalorieen}])
        gauge.add('Roeitrainer', [{'value': CAL4, 'max_value': totaleCalorieen}])
        gauge.add('Krachtstation', [{'value': CAL5, 'max_value': totaleCalorieen}])
    else:
        gauge.add('Uren Gesport', [{'value': totaleUren}])
        gauge.add('Crosstrainer', [{'value': UREN1}])
        gauge.add('Hometrainer', [{'value': UREN2}])
        gauge.add('Loopband', [{'value': UREN3}])
        gauge.add('Roeitrainer', [{'value': UREN4}])
        gauge.add('Krachtstation', [{'value': UREN5}])
        gauge.add('Totale Calorieen', [{'value': totaleCalorieen}])
        gauge.add('Crosstrainer', [{'value': CAL1}])
        gauge.add('Hometrainer', [{'value': CAL2}])
        gauge.add('Loopband', [{'value': CAL3}])
        gauge.add('Roeitrainer', [{'value': CAL4}])
        gauge.add('Krachtstation', [{'value': CAL5}])
    gauge.render_to_file("C:/Users/Administrator/Desktop/rollerorange.github.io-master/charts/user" + str(USERID) + "chart.svg")

dataList = getUserData(str(sys.argv[1]))
createUserDataGraph(str(sys.argv[1]), dataList[0][0], dataList[1][0], dataList[3][0], dataList[4][0], dataList[2][0], dataList[0][1], dataList[1][1], dataList[3][1], dataList[4][1], dataList[2][1])