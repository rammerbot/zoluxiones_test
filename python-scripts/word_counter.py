from collections import Counter
import os


def contar_palabras(archivo):
    """
        La funcion recibe la ruta un archivo de texto,
        cuenta y devuelve cuantas veces se repite cada 
        palabra en el texto
        :param archivo: ruta de archivo
        :return: cuantas veces se repite cada palabra
    """
    # Verificar que la ruta exista
    if os.path.exists(archivo):
        # Manejo del error de tipo de archivo 
        try:
            with open(archivo, 'r', encoding='utf-8') as file:
                texto = file.read().lower().split()
                conteo = Counter(texto)
            return conteo
        except:
            print("Error al leer el archivo, por favor verifique el formato.")
    else:
        print("El archivo no existe")

base = os.path.abspath(os.path.dirname(__file__))
test= os.path.join(base, "list_sorter.py")
print(contar_palabras(test))