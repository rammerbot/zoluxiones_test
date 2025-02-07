import requests
import json

def obtener_datos_api(url):
    """
    la funcion recibe el endpoin de una api publica y genera
    un .json con los datos de la pagina
    """
    # Conectar a url mediante request
    response = requests.get(url)
    # si la conexion es exitosa se realiza la consulta a la pagina
    if response.status_code == 200:
        datos = response.json()
        with open("datos.json", "w", encoding="utf-8") as archivo:
            json.dump(datos, archivo, indent=4, ensure_ascii=False)
        print("Datos guardados en 'datos.json'")
    else:
        print(f"Error: {response.status_code}")

url = "https://jsonplaceholder.typicode.com/posts"

obtener_datos_api(url)
