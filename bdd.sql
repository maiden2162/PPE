#------------------------------------------------------------
#        Script FILELEC SQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: CLIENT
#------------------------------------------------------------

CREATE TABLE CLIENT(
        id_cli      Int NOT NULL ,
        raison_cli  Varchar (45) ,
        adresse_cli Varchar (25) ,
        tel_cli     Char (10) ,
        PRIMARY KEY (id_cli )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FOURNISSEURS
#------------------------------------------------------------

CREATE TABLE FOURNISSEURS(
        id_four      Int NOT NULL ,
        nom_four     Varchar (25) ,
        adresse_four Varchar (25) ,
        tel_four     Char (10) ,
        PRIMARY KEY (id_four )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRODUITS
#------------------------------------------------------------

CREATE TABLE PRODUITS(
        id_pro       Int NOT NULL ,
        nom_pro      Varchar (25) ,
        stock_pro    Int ,
        prixunit_pro Float ,
        PRIMARY KEY (id_pro )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: BON_LIVRAISON
#------------------------------------------------------------

CREATE TABLE BON_LIVRAISON(
        id_livr   Int NOT NULL ,
        date_livr Date ,
        com_num   Int ,
        PRIMARY KEY (id_livr )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COMMANDE
#------------------------------------------------------------

CREATE TABLE COMMANDE(
        com_num   int (11) Auto_increment  NOT NULL ,
        com_date  Date ,
        com_text  Varchar (25) ,
        com_prest Bool ,
        id_cli    Int ,
        fact_num  Int ,
        id_livr   Int ,
        PRIMARY KEY (com_num )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FACTURE
#------------------------------------------------------------

CREATE TABLE FACTURE(
        fact_num       int (11) Auto_increment  NOT NULL ,
        fact_quantite  Int ,
        fact_prix      Int ,
        fact_reglement Date ,
        fact_adresse   Varchar (25) ,
        fact_nom       Varchar (25) ,
        PRIMARY KEY (fact_num )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TECHNICIEN
#------------------------------------------------------------

CREATE TABLE TECHNICIEN(
        id_tech     Int NOT NULL ,
        nom_tech    Varchar (25) ,
        prenom_tech Varchar (25) ,
        mail_tech   Varchar (25) ,
        id_prest    Int ,
        PRIMARY KEY (id_tech )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRESTATION
#------------------------------------------------------------

CREATE TABLE PRESTATION(
        id_prest   Int NOT NULL ,
        date_prest Date ,
        prix_prest Float ,
        com_num    Int ,
        PRIMARY KEY (id_prest )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: UTILISATEUR
#------------------------------------------------------------

CREATE TABLE UTILISATEUR(
        uti_id       Int NOT NULL ,
        uti_login    Char (12) ,
        uti_password Varchar ,
        uti_poste    Varchar (25) ,
        uti_nom      Varchar (25) ,
        uti_prenom   Varchar (25) ,
        uti_email    Varchar (25) ,
        grp_id       Int ,
        PRIMARY KEY (uti_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: GROUPE_PRIVILEGE
#------------------------------------------------------------

CREATE TABLE GROUPE_PRIVILEGE(
        grp_id  Int NOT NULL ,
        grp_nom Varchar (25) ,
        PRIMARY KEY (grp_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: RESSOURCES
#------------------------------------------------------------

CREATE TABLE RESSOURCES(
        res_id   Int NOT NULL ,
        res_nom  Varchar (25) ,
        res_type Varchar (25) ,
        res_date Date ,
        grp_id   Int ,
        PRIMARY KEY (res_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ADMINISTRATEUR
#------------------------------------------------------------

CREATE TABLE ADMINISTRATEUR(
        id_adm       Int NOT NULL ,
        login_adm    Char (25) ,
        password_adm Char (25) ,
        PRIMARY KEY (id_adm )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MEMBRE
#------------------------------------------------------------

CREATE TABLE MEMBRE(
        id_mem       Int NOT NULL ,
        login_mem    Char (25) ,
        password_mem Char (25) ,
        PRIMARY KEY (id_mem )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: fournir
#------------------------------------------------------------

CREATE TABLE fournir(
        id_four Int NOT NULL ,
        id_pro  Int NOT NULL ,
        PRIMARY KEY (id_four ,id_pro )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: comporter
#------------------------------------------------------------

CREATE TABLE comporter(
        qte_livr Int ,
        id_pro   Int NOT NULL ,
        id_livr  Int NOT NULL ,
        PRIMARY KEY (id_pro ,id_livr )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: concerner
#------------------------------------------------------------

CREATE TABLE concerner(
        qte_commande Int ,
        com_num      Int NOT NULL ,
        id_pro       Int NOT NULL ,
        PRIMARY KEY (com_num ,id_pro )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: installer
#------------------------------------------------------------

CREATE TABLE installer(
        id_prest Int NOT NULL ,
        id_pro   Int NOT NULL ,
        PRIMARY KEY (id_prest ,id_pro )
)ENGINE=InnoDB;



#------------------------------------------------------------
# ALTER TABLE
#------------------------------------------------------------
ALTER TABLE BON_LIVRAISON ADD CONSTRAINT FK_BON_LIVRAISON_com_num FOREIGN KEY (com_num) REFERENCES COMMANDE(com_num);
ALTER TABLE COMMANDE ADD CONSTRAINT FK_COMMANDE_id_cli FOREIGN KEY (id_cli) REFERENCES CLIENT(id_cli);
ALTER TABLE COMMANDE ADD CONSTRAINT FK_COMMANDE_fact_num FOREIGN KEY (fact_num) REFERENCES FACTURE(fact_num);
ALTER TABLE COMMANDE ADD CONSTRAINT FK_COMMANDE_id_livr FOREIGN KEY (id_livr) REFERENCES BON_LIVRAISON(id_livr);
ALTER TABLE TECHNICIEN ADD CONSTRAINT FK_TECHNICIEN_id_prest FOREIGN KEY (id_prest) REFERENCES PRESTATION(id_prest);
ALTER TABLE PRESTATION ADD CONSTRAINT FK_PRESTATION_com_num FOREIGN KEY (com_num) REFERENCES COMMANDE(com_num);
ALTER TABLE UTILISATEUR ADD CONSTRAINT FK_UTILISATEUR_grp_id FOREIGN KEY (grp_id) REFERENCES GROUPE_PRIVILEGE(grp_id);
ALTER TABLE RESSOURCES ADD CONSTRAINT FK_RESSOURCES_grp_id FOREIGN KEY (grp_id) REFERENCES GROUPE_PRIVILEGE(grp_id);
ALTER TABLE fournir ADD CONSTRAINT FK_fournir_id_four FOREIGN KEY (id_four) REFERENCES FOURNISSEURS(id_four);
ALTER TABLE fournir ADD CONSTRAINT FK_fournir_id_pro FOREIGN KEY (id_pro) REFERENCES PRODUITS(id_pro);
ALTER TABLE comporter ADD CONSTRAINT FK_comporter_id_pro FOREIGN KEY (id_pro) REFERENCES PRODUITS(id_pro);
ALTER TABLE comporter ADD CONSTRAINT FK_comporter_id_livr FOREIGN KEY (id_livr) REFERENCES BON_LIVRAISON(id_livr);
ALTER TABLE concerner ADD CONSTRAINT FK_concerner_com_num FOREIGN KEY (com_num) REFERENCES COMMANDE(com_num);
ALTER TABLE concerner ADD CONSTRAINT FK_concerner_id_pro FOREIGN KEY (id_pro) REFERENCES PRODUITS(id_pro);
ALTER TABLE installer ADD CONSTRAINT FK_installer_id_prest FOREIGN KEY (id_prest) REFERENCES PRESTATION(id_prest);
ALTER TABLE installer ADD CONSTRAINT FK_installer_id_pro FOREIGN KEY (id_pro) REFERENCES PRODUITS(id_pro);
