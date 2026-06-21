lista1 = []
lista2 = []

cantidad1 = int(input("Cantidad de elementos de la primera lista: "))
for i in range(cantidad1):
    lista1.append(input("Ingrese un elemento: "))

cantidad2 = int(input("Cantidad de elementos de la segunda lista: "))
for i in range(cantidad2):
    lista2.append(input("Ingrese un elemento: "))

if len(lista1) != len(lista2):
    print("Las listas no contienen los mismos elementos")
else:
    iguales = True

    for elemento in lista1:
        if elemento not in lista2:
            iguales = False
            break

    if iguales:
        print("Las listas contienen los mismos elementos")
    else:
        print("Las listas no contienen los mismos elementos")