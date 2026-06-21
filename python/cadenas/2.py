palabra = input("Ingrese una palabra: ").lower()

invertida = ""

for letra in palabra:
    invertida = letra + invertida

if palabra == invertida:
    print("Es un palíndromo")
else:
    print("No es un palíndromo")