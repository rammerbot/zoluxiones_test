def numeros_pares_ordenados(lista:list):
    """
        La funcion recibe una lista de numeros y devuelve
        una lista de numeros pares ordenados de manera ascendente
        :param lista: Lista de números.
        :return: Lista de números pares ordenados.
    """
    # validar que los datos sean adecados, de lo contrario imprimir mediante la consola error 
    if not isinstance(lista, list) or not all(isinstance(num, (int, float)) for num in lista):
        print(f"la estuctura de datos no es adecuada, por favor verifique e intente nuevamente")
        return None
    return sorted([num for num in lista if num % 2 == 0]) # Usa el sorted para ordenar los numero en la lista y 


