estudiantes = {}

def mostrarmenu():
    print('''
Bienvenido al sistema de notas
1. Registrar un estudiante.
2. Registrar varias notas para un estudiante.
3. Mostrar los estudiantes registrados.
4. Mostrar el promedio de un estudiante.
5. Mostrar la nota más alta de un estudiante.
6. Salir.
''')

    while True:
        try:
            opc = int(input('Ingrese una de las opciones: '))
            if 1 <= opc <= 6:
                return opc
            else:
                print('Opción inválida')
        except ValueError:
            print('Opción inválida')


def registrarestudiante():
    cc = int(input('Ingrese el documento del estudiante: '))
    nom = input('Ingrese el nombre del estudiante: ').lower()
    tel = int(input('Ingrese un teléfono: '))

    if cc not in estudiantes:
        estudiantes[cc] = {
            "nom": nom,
            "tel": tel,
            "notas": []
        }
        print('Estudiante registrado con éxito')
    else:
        print('El estudiante ya está registrado')


def registrarnotas():
    cc = int(input("Ingrese cedula del estudiante: "))

    if cc in estudiantes:
        cantidad = int(input("¿Cuántas notas desea agregar? "))

        for a in range(cantidad):
            while True:
                nota = float(input(f"Nota {a+1}: "))
                if 0 <= nota <= 5:
                    estudiantes[cc]["notas"].append(nota)
                    break
                else:
                    print("La nota debe estar entre 0 y 5")
    else:
        print('El estudiante no existe')


def mostrarestudiantes():
    if len(estudiantes) == 0:
        print("No hay estudiantes registrados")
    else:
        for cc, datos in estudiantes.items():
            print(f"\ndocumento: {cc}")
            print(f"nombre: {datos['nom']}")
            print(f"Teléfono: {datos['tel']}")
            print(f"Notas: {datos['notas']}")


def promedio():
    cc = int(input("Ingrese cedula del estudiante: "))

    if cc in estudiantes:
        notas = estudiantes[cc]["notas"]

        if len(notas) > 0:
            prom = sum(notas) / len(notas)
            print(f"El promedio de {cc} es: {prom:.2f}")
        else:
            print("El estudiante no tiene notas registradas")
    else:
        print("Estudiante no encontrado")


def notamax():
    cc = int(input("Ingrese cedula del estudiante: "))

    if cc in estudiantes:
        notas = estudiantes[cc]["notas"]

        if len(notas) > 0:
            print(f"La nota más alta de {cc} es: {max(notas)}")
        else:
            print("El estudiante no tiene notas registradas")
    else:
        print("Estudiante no encontrado")


def main():
    while True:
        opc = mostrarmenu()

        match opc:
            case 1:
                registrarestudiante()

            case 2:
                registrarnotas()

            case 3:
                mostrarestudiantes()

            case 4:
                promedio()

            case 5:
                notamax()

            case 6:
                print("Hasta luego")
                break


if __name__ == "__main__":
    main()