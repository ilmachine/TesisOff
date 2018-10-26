#!/bin/bash
#
# Recorre todos los archivos del directorio actual y los muestra
#
for i in $(/var/www/WSE/Scripts/pruebaBatchs ls -C1)
do
echo $i
done