lista=[]
cantidad=int(input('Ingrese la cantidad de numeros que desea agregar: '))
for a in range(cantidad):
    num = int(input('Ingrese un numero: '))
    lista.append(num)
    
print(f'La lista es {lista}')
num_max= max(lista)
print(f'El numero maximo de la lista es {num_max}')