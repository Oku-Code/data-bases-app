-- usar la base de datos para entrar a insertar los datos
USE inmobiliaria;

-- predio

INSERT INTO predio VALUES ('0000', 'Palermo', '6');
INSERT INTO predio VALUES ('0001', 'Campo Hermoso', '4');
INSERT INTO predio VALUES ('0002', 'Villa Nueva', '3');
INSERT INTO predio VALUES ('0003', 'Peralonso', '2');
INSERT INTO predio VALUES ('0004', 'Chipre', '4');
INSERT INTO predio VALUES ('0005', 'Sancancio', '6');
INSERT INTO predio VALUES ('0006', 'El Campin', '4');
INSERT INTO predio VALUES ('0007', 'San Sebastian', '1');
INSERT INTO predio VALUES ('0008', 'Versalles', '5');
INSERT INTO predio VALUES ('0009', 'El Trebol', '6');
INSERT INTO predio VALUES ('NULL', 'NULL', '0')

-- contrato

INSERT INTO contrato VALUES ('0000', 'Arriendo', 12, '0004');
INSERT INTO contrato VALUES ('0001', 'Venta', 0, '0008');
INSERT INTO contrato VALUES ('0002', 'Arriendo', 48, '0000');
INSERT INTO contrato VALUES ('0003', 'Arriendo', 6, '0003');
INSERT INTO contrato VALUES ('0004', 'Venta', 0, '0005');
INSERT INTO contrato VALUES ('0005', 'Venta', 0, '0006');
INSERT INTO contrato VALUES ('0006', 'Arriendo', 48, '0007');
INSERT INTO contrato VALUES ('0007', 'Venta', 0, '0001');
INSERT INTO contrato VALUES ('0008', 'Arriendo', 12, '0002');
INSERT INTO contrato VALUES ('0009', 'Arriendo', 12, '0009');

-- factura

INSERT INTO factura VALUES ('0000', '2019/03/23', 410000, '2020/03/23', '0000');
INSERT INTO factura VALUES ('0001', '2017/05/12', 250000000, '2019/06/12', '0001');
INSERT INTO factura VALUES ('0002', '2018/01/28', 1350000, '2021/01/28', '0002');
INSERT INTO factura VALUES ('0003', '2016/06/13', 1000000, '2016/12/13', '0003');
INSERT INTO factura VALUES ('0004', '2019/02/03', 156000000, '2020/12/03', '0004');
INSERT INTO factura VALUES ('0005', '2015/04/12', 240000000, '2018/04/18', '0005');
INSERT INTO factura VALUES ('0006', '2016/04/12', 550000, '2019/04/18', '0006');
INSERT INTO factura VALUES ('0007', '2018/04/12', 200000000, '2022/04/18', '0007');
INSERT INTO factura VALUES ('0008', '2016/08/17', 1200000, '2017/08/17', '0008');
INSERT INTO factura VALUES ('0009', '2021/05/17', 1600000, '2022/06/17', '0009');

-- arrendador

INSERT INTO arrendador VALUES ('76307332', 'William Herrera', 'whrrea@gmail.com', '3108347328', '0000');
INSERT INTO arrendador VALUES ('10544098', 'Victor Rendon', 'victor@gmail.com', '3132901009', '0002');
INSERT INTO arrendador VALUES ('66767305', 'Isabel Rivera', 'isavera@gmail.com', '3017687273', '0003');
INSERT INTO arrendador VALUES ('34536646', 'Graciela Reyes', 'reyesgracie@gmail.com', '3009979913', '0006');
INSERT INTO arrendador VALUES ('10544308', 'Ruben Sanchez', 'schezrbn@gmail.com', '3140868247', '0008');
INSERT INTO arrendador VALUES ('3176292', 'Carlos Sicard', 'sicardcarl@gmail.com', '3159740229', '0009');

-- arrendatario

INSERT INTO arrendatario VALUES ('34572691', 'Hernesto Pumarejo', 'hpumarjo@gmail.com', '3004622551', '0000');
INSERT INTO arrendatario VALUES ('16274195', 'Ana Carmen Ramirez', 'anacarez@gmail.com', '3115291367', '0002');
INSERT INTO arrendatario VALUES ('76306776', 'Mauricio Ordoñez', 'mordonez@gmail.com', '3188270395', '0003');
INSERT INTO arrendatario VALUES ('10545286', 'Franco Garcia', 'fcga@gmail.com', '3135174715', '0006');
INSERT INTO arrendatario VALUES ('65067823', 'Diana Maria Martinez', 'DMM@gmail.com', '3051801019', '0008');
INSERT INTO arrendatario VALUES ('10528372', 'Mario Gomez Sanchez', 'MGS@gmail.com', '3101993475', '0009');
INSERT INTO arrendatario VALUES ('0', 'NULL', 'NULL', 'NULL', 'NULL');

-- vendedor

INSERT INTO vendedor VALUES ('10546903', 'Jose Pasaje', 'pasajejse@gmail.com', '3193037693', '0001');
INSERT INTO vendedor VALUES ('10542613', 'Reimir Ojeda', 'reimir@gmail.com', '3002692030', '0004');
INSERT INTO vendedor VALUES ('76323271', 'Carlos Mora', 'clrsmora@gmail.com', '3146115564', '0005');
INSERT INTO vendedor VALUES ('34529403', 'Luz Orozco', 'lzorozco@gmail.com', '3127703750', '0007');

-- comprador

INSERT INTO comprador VALUES ('10523300', 'Humberto Palechor', 'palecho@gmail.com', '3172727033', '0001');
INSERT INTO comprador VALUES ('1467487', 'Carlos Pantoja', 'clspantoja@gmail.com', '3016001497', '0004');
INSERT INTO comprador VALUES ('92228625', 'Elkin Diaz', 'elkindaz@gmail.com', '3189831858', '0005');
INSERT INTO comprador VALUES ('10546658', 'Javier Chamorro', 'chamorroj@gmail.com', '3147850235', '0007');
INSERT INTO predio VALUES ('0', 'NULL', 'NULL', 'NULL', 'NULL');


-- pago

INSERT INTO pago VALUES ('0000', 410000, 'Efectivo', '2020/01/23', '34572691', '');
INSERT INTO pago VALUES ('0001', 250000000, 'Cheque', '2018/07/12', '', '10523300');
INSERT INTO pago VALUES ('0002', 1350000, 'Efectivo', '2019/03/15', '16274195', '');
INSERT INTO pago VALUES ('0003', 1000000, 'Efectivo', '2019/03/15', '76306776', '');
INSERT INTO pago VALUES ('0004', 156000000, 'Cheque', '2019/09/30', '', '1467487');
INSERT INTO pago VALUES ('0005', 240000000, 'Cheque', '2017/12/11', '', '92228625');
INSERT INTO pago VALUES ('0006', 550000, 'Efectivo', '2016/05/11', '10545286', '');
INSERT INTO pago VALUES ('0007', 200000000, 'Efectivo', '2019/04/18', '', '10546658');
INSERT INTO pago VALUES ('0008', 1200000, 'Efectivo', '2016/12/15', '65067823', '');
INSERT INTO pago VALUES ('0009', 1600000, 'Efectivo', '2021/07/19', '10528372', '');
