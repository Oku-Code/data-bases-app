# Trabajo final

Tema seleccionado: *Sistema de seguimiento y control de pago de arrendos de una inmobiliaria*

- Función Principal: Compra y venta de inmuebles
- Principales actores
	- Vendedor: Persona interesada de vender el bien inmueble
	- Comprador: Que tiene el proposito de adquirir una propiedad
	- Arrendador: Dueño legal de una propiedad (Que desea alquilarlo)
	- Arrendatario: Quien pretende utilizar un bien inmueble

1. Beneficios de contratar una inmobiliaria:
	- Ahorro de tiempo: 
	- Asegura cumplimiento de terminos
	- Seguridad
	- Asesoria
	- Cartera de clientes (Cuenta con su propia base de datos)

2. Ejemplo de pagos inmobiliarios:
	- Por ejemplo: una propiedad es vendida por 300 millones. Sin embargo, su costo fiscal es de 200 millones, entonces se trata de una utilidad de venta de 100 millones. Finalmente, el impuesto está establecido en el 10% sobre esa utilidad *

3. Requisitos funcionales:
	- Calcular pagos de impuestos
	- Adicionar interes a los deudores
	- Adicionar tipo de propiedad (habitacional, comercial o industrial)

## Referencias

Estas referencias ayudaran a crear nuestro enunciado para nuestro sistema

- [Invest in Colombia](https://investincolombia.com.co/es/como-invertir/pasos-para-establecer-su-compa%C3%B1%C3%ADa/como-comprar-inmuebles-en-colombia)
- [Referencia](https://daytona.cloud/pago-de-impuestos.html)
- [IBM](https://www.ibm.com/docs/es/tririga/10.5.2?topic=assets-managing-leased-owned-property-contracts)
- [IBM pagos](https://www.ibm.com/docs/es/tririga/10.5.2?topic=contracts-managing-payments)
- [Seguro de arrendamiento](https://www.semana.com/columnistas/articulo/arriendo-inmueble-diferentes-formas-de-pago-de-arriendo/71882/)

## Enunciado del problema

Inmobiliarias del país buscan constantemente solucionar problemas, desde el cumplimiento de los terminos de **contrato**, hasta con lo que el **cliente** ha pactado con las inmobiliarias, en este caso buscan controlar de manera efectiva el **pago** de arriendos y tener formas de control eficaces a la hora de hacer seguimiento de este tipo de **negocio** que es lo que genera los mayores ingresos en este tipo de gremio

La inmobiliaria **Predios Colombia** buscan un sistema para el seguimiento y control de pago de arriendos para su empresa, para ello necesitan que el sistema cumplan con las siguientes funcionalidades:

### Requisitos funcionales primordiales

1. Gestión de facturas: Gestiona de manera fácil y sencilla las **facturas** que tengan asociadas a **contratos** con los clientes donde cuentan con los datos de **arrendador**, **predio**, precio del arriendo, numero de cuotas y cuotas atrasadas.

2. Gestión de cuentas por pagar: Procesar pagos, reconciliar **gastos** y calcular ajustes para poder tener puntualidad a la hora de tener problemas en la consignación de cuotas para los arrendatarios.

3. Gestión de cuentas por cobrar: Procesar facturas de arrendamiento que tenga con el **arrendatario**, generar recibos por parte del arrendatario para poder tener un mecanismo de control sobre el dinero que se deposita o consigna a la hora del **pago**.

### Requisitos no funcionales

1. Generar estados durante las operaciones que se realizan a la hora de consultar los datos.
2. La plataforma debe ser accesible desde cualquier dispositivo conectado a la red.
3. La plataforma debe contar con una interfaz amigable para que pueda ser utilizada por cualquier persona

### Posibles entidades 

- Cliente
- Contrato
- Pago
- Negocio
- Facutura
- Arrendador
- Predio
- Gasto
- Arrendatario
