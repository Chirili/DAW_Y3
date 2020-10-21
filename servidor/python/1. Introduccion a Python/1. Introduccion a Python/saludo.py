from datetime import datetime


def main():
    horaActual = datetime.now() 
    saluda("Antonio", horaActual.hour)


def saluda(nombre, hora):
    if hora < 12:     # Si el parámetro "hora" es menor de 12, se ejecuta el siguiente bloque de instrucciones
        print("Buenos días, " + nombre)
    elif hora < 21:   # En otro caso, si el parámetro "hora" es menor de 21, se ejecuta el siguiente bloque de instrucciones
        print("Buenas tardes, " + nombre)
    else:           # En cualquier otro caso, se ejecuta el siguiente bloque de instrucciones
        print("Buenas noches, " + nombre)


if __name__ == '__main__':
    main()