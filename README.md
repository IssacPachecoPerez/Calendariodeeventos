# Calendariodeeventos

##Este es un calendario de eventos donde podremos asginarle fechas y horas de los
##eventos transcurridos 

##hay que tomar en cuenta que este codigo esta modificado en para usar abiertamente hay campos de mi base de datos que aun estan escritos
##solo es cuestion de modificarlos o utilizar una tabla con los siguientes campos


##NOMBRE DE LA TABLA: eventos
##id_evento INT (11)
##titulo VARCHAR (100)
##color VARCHAR (10)
##observaciones VARCHAR (100)
##inicio DATETIME
##fin DATETIME
##foto VARCHAR (100)


##Si quieres hacer una consulta con la suma de las horas transcurridas de cada evento utiliza la siguiente sentencia
##SELECT id_evento, titulo, observaciones, inicio, fin, foto, HOUR(TIMEDIFF(inicio, fin)) + CASE WHEN MINUTE(TIMEDIFF(inicio, fin)) % 60 > 20 THEN 1 ELSE 0 END FROM eventos
