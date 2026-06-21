contra = input('Ingrese una contrasena: ')

if len(contra) >= 8:
    
    while True:
        intento = input('Ingrese su contrasena para ingresar: ')
        
        if intento == contra:
            print('Bienvenido')
            break
        
        print('Contra incorrecta, vuelva a intentar')

else:
    print('La contrasena debe tener minimo 8 caracteres')