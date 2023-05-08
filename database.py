#Test database python MySql
import mysql.connector
from mysql.connector import errorcode

try:
  cnx = mysql.connector.connect(user='obt', password='Obt!2023',
                              host='82.223.8.163',
                              database='OBT',
                              port='53306')
  
except mysql.connector.Error as err:
  if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
    print("Something is wrong with your user name or password")
  elif err.errno == errorcode.ER_BAD_DB_ERROR:
    print("Database does not exist")
  else:
    print(err)
else:
    print("Connected")
    cursor = cnx.cursor()

    #MIMIUM DATE (2022, 4, 1, 0, 0, 1)

    #query = "SELECT tag, eventoDateTime, eventoTipo FROM eventi WHERE eventoDateTime >= '2022-04-01 20:56:07' ORDER BY eventoDateTime DESC"
    #query = "SELECT tag, MIN(eventoDateTime) FROM eventi"

    
    #Ciclo per simulare il tempo
    dataMinore = '2022-4-1 00:00:01'

    while True:
        query = "SELECT tag, eventoDateTime, eventoTipo FROM eventi WHERE eventoDateTime >= '{}' AND eventoDateTIme <= '{}", dataMinore, dataMinore
        cursor.execute(query)
#for (tag, dataEvento, tipoEvento) in cursor:
#    print("Tag: {}, Data: {:%d %b %Y}, Tipo: {}".format(
#tag, dataEvento, tipoEvento))
        for (tag) in cursor:
            print("Tag: ", tag)
        cursor.close()
        cnx.close()

