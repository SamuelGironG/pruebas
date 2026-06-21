numeros = []
pares = []
impares = []

cantidad = int(input("Ingrese la cantidad de números: "))

for i in range(cantidad):
    num = int(input("Ingrese un número: "))
    numeros.append(num)

for num in numeros:
    if num % 2 == 0:
        pares.append(num)
    else:
        impares.append(num)

print("Lista original:", numeros)
print("Números pares:", pares)
print("Números impares:", impares)