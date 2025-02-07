def factorial(n):
    """
    la funcion recibe un numero entero y devuelve el factorial de este
    :param n: Numero entero.
    :return: El valor factorial de del numero introducido
    """
    if  isinstance(n, int):
        # Verifica si el numero es 0 o 1 ya que el factorial de estos numero es siempre 1
        if n == 0 or n == 1:
            return 1
        return n * factorial(n - 1)
    else:
        print(f"El dato {n} no es un numero entero")


print(factorial(7))
