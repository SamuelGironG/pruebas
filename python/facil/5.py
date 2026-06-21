compra =float(input('Ingrese el monto de la compra: '))

if compra >60000.00:
    desc = compra*0.30
    total = compra-desc
    print ('El descuento fue de 30%, el total es:',total)
elif compra >30000.00:
    desc = compra*0.10
    total = compra-desc
    print ('El descuento fue de 30%',total)
else:
    desc = compra*0.05
    total = compra-desc
    print ('El descuento fue de 30%, el total es:',total)