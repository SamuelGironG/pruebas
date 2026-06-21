num = int(input('Ingrese un numero: '))

for a in range (num+1):
    if a % 2==0:
        print(f'El {a} es par')
    else:
        print(f'El {a} es impar')
        