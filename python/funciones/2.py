productos={}

def menu():
    print('''1. Registrar un producto
2. Agregar precios a un producto.
3. Mostrar los productos registrados.
4. Mostrar el precio promedio de un producto.
5. Salir.''')
    
    while True:
        try:
            opc = int(input("Ingrese una de las opciones: "))
        
            if opc<1 and opc > 5:
                print('Opcion invalido')
            else:
                return opc
        except ValueError:
            print('Opcion invalida')

def registrar():
    nom=str(input('Ingrese el nombre del producto: ')).lower()
    if nom not in productos :
        productos [nom] = {
            "precio":[]
        }
        print("Producto registrado con exito")
    else:
        print('Producto ya se encuentra registrado')

def agregarprecio():
    nom=str(input('Ingrese el nombre del producto: ')).lower()
    if nom in productos:
        precio=float(input('Ingrese el precio del producto: '))
        productos[nom]["precio"].append(precio)
        print(f'El precio {precio} fue registrado con exito al producto {nom}')
    else:
        print('El producto no existe')

def mostrarproductos():
    if len(productos) == 0:
        print('No hay productos registrados')
    else:
        print('\nProductos registrados')
        print(productos)
        
def mostrarpromedio():
    promedio = sum(productos["precio"])/len(productos)
    print(promedio)
    
    
def main():
    while True:
        opc=menu()
        match opc:
            case 1:
                registrar()
            case 2:
                agregarprecio()
            case 3:
                mostrarproductos()
            case 4:
                mostrarpromedio()
            case 5:
                print('Hasta luego')
                break
            case _:
                print('Opcion invalida')

if __name__=="__main__":
    main()