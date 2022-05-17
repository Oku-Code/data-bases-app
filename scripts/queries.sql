CREATE DATABASE inmobiliaria;
USE inmobiliaria;

-- Tables

CREATE TABLE predio(
    ide_pre VARCHAR(4) PRIMARY KEY,
    dir_pre VARCHAR(30) NOT NULL,
    est_pre VARCHAR(1)
);

CREATE TABLE contrato(
    num_con VARCHAR(4) PRIMARY KEY,
    tip_con VARCHAR(10) NOT NULL,
    vig_mes_con TINYINT DEFAULT 0,
    ide_pre VARCHAR(4), 
    FOREIGN KEY (ide_pre) REFERENCES predio (ide_pre)
);

CREATE TABLE factura(
    ide_fac VARCHAR(4) PRIMARY KEY,
    fec_fac DATE NOT NULL,
    val_fac INT NOT NULL,
    fec_ven_fac DATE NOT NULL,
    num_con VARCHAR(4) NOT NULL,
    FOREIGN KEY (num_con) REFERENCES contrato (num_con)
);

CREATE TABLE arrendador(
    ide_ard VARCHAR(10) PRIMARY KEY,
    nom_ard VARCHAR(30) NOT NULL,
    email_ard VARCHAR(30) NOT NULL,
    tel_ard VARCHAR(10) NOT NULL,
    ide_pre VARCHAR(10),
    FOREIGN KEY (ide_pre) REFERENCES predio (ide_pre)
);

CREATE TABLE arrendatario(
    ide_art VARCHAR(10) PRIMARY KEY,
    nom_art VARCHAR(30) NOT NULL,
    email_art VARCHAR(30) NOT NULL,
    tel_art VARCHAR(10) NOT NULL,
    ide_pre VARCHAR(10),
    FOREIGN KEY (ide_pre) REFERENCES predio (ide_pre)
);


CREATE TABLE vendedor(
    ide_ven VARCHAR(10) PRIMARY KEY,
    nom_ven VARCHAR(30) NOT NULL,
    email_ven VARCHAR(30) NOT NULL,
    tel_ven VARCHAR(10) NOT NULL,
    ide_pre VARCHAR(10),
    FOREIGN KEY (ide_pre) REFERENCES predio (ide_pre)
);


CREATE TABLE comprador(
    ide_com VARCHAR(10) PRIMARY KEY,
    nom_com VARCHAR(30) NOT NULL,
    email_com VARCHAR(30) NOT NULL,
    tel_com VARCHAR(10) NOT NULL,
    ide_pre VARCHAR(10),
    FOREIGN KEY (ide_pre) REFERENCES predio (ide_pre)
);

CREATE TABLE pago(
    ide_pag VARCHAR(4) PRIMARY KEY,
    val_pag INT NOT NULL,
    tip_pag VARCHAR(10),
    fec_pag DATE NOT NULL,
    ide_art VARCHAR(10),
    ide_com VARCHAR(10),
    FOREIGN KEY (ide_art) REFERENCES arrendatario (ide_art),
    FOREIGN KEY (ide_com) REFERENCES comprador (ide_com)
);
