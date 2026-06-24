--Creation de Tableau--
CREATE TABLE `pharmacie`.`categorie` (`ID` INT NOT NULL , `Nom` VARCHAR(255) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
CREATE TABLE `pharmacie`.`unite` (`ID` INT NOT NULL , `Nom` VARCHAR(255) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
CREATE TABLE `pharmacie`.`medicament` (`ID` INT NOT NULL , `Nom` VARCHAR(255) NOT NULL , `Prix` DECIMAL NOT NULL , `Quantite` INT NOT NULL , `ID_Unite` INT NOT NULL , `ID_Categorie` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
CREATE TABLE `pharmacie`.`iventaire` (`ID` INT NOT NULL , `ID_Medicament` INT NOT NULL , `Date_Iventaire` DATE NOT NULL , `Qte_Stock` INT NOT NULL , `ID_Unite` INT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;

--Insertion Tableau--
INSERT INTO `categorie`(`ID`, `Nom`) VALUES ('1','calmant');
INSERT INTO `categorie`(`ID`, `Nom`) VALUES ('2','fortifiant');
INSERT INTO `categorie`(`ID`, `Nom`) VALUES ('3','creme');
INSERT INTO `categorie`(`ID`, `Nom`) VALUES ('4','Sirop');
 
INSERT INTO `unite`(`ID`, `Nom`) VALUES ('1','milligramme');
INSERT INTO `unite`(`ID`, `Nom`) VALUES ('2','millilitre');
INSERT INTO `unite`(`ID`, `Nom`) VALUES ('3','plaquette');
INSERT INTO `unite`(`ID`, `Nom`) VALUES ('4','boite');

INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('1','Paracetamol','1200','100','1','1');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('2','Doliprane','1800','80','1','1');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('3','Ibuprofene','2200','60','1','1');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('4','Aspirine','1500','90','1','1');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('5','Efferalgan','2000','70','4','1');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('6','Vitamine C','2500','120','4','2');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('7','Multivitamine','5000','50','4','2');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('8','Fer Plus','4500','40','4','2');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('9','Calcium Forte','4000','60','4','2');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('10','Magnesium Boost','5500','35','4','2');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('11','Bepanthen','3500','30','4','3');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('12','Mycoster Creme','4200','25','4','3');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('13','Dexeryl','6000','20','4','3');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('14','Cicalfate','7500','15','4','3');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('15','Dermalex','6800','18','4','3');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('16','Touxcalm','4500','40','2','4');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('17','Bronchoflux','5200','35','2','4');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('18','Vitasirop','3800','50','2','4');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('19','Fervex Sirop','4900','28','2','4');
INSERT INTO `medicament`(`ID`, `Nom`, `Prix`, `Quantite`, `ID_Unite`, `ID_Categorie`) VALUES ('20','Sirop Enfant','3200','45','2','4');

INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('1','1','2026-01-10','95','1');
INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('2','3','2026-01-10','55','1');
INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('3','6','2026-01-11','110','4');
INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('4','8','2026-01-11','38','4');
INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('5','11','2026-01-12','28','4');
INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('6','13','2026-01-12','18','4');
INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('7','16','2026-01-13','37','2');
INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('8','18','2026-01-13','45','2');
INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('9','20','2026-01-14','42','2');
INSERT INTO `iventaire`(`ID`, `ID_Medicament`, `Date_Iventaire`, `Qte_Stock`, `ID_Unite`) VALUES ('10','5','2026-01-14','65','4');

--1--
SELECT * FROM `medicament` 

--2--
SELECT  m.*,c.* FROM `medicament`as m JOIN `categorie` as c ON c.ID =m.ID_Categorie WHERE c.Nom='Calmant'

--3--
SELECT  m.*,c.* FROM `medicament`as m JOIN `categorie` as c ON c.ID =m.ID_Categorie

--4--
SELECT  m.*,i.* FROM `medicament`as m JOIN `iventaire` as i ON i.ID_Medicament =m.ID 

--5--
SELECT * FROM `medicament` WHERE Prix>5000

--6--
UPDATE `medicament` SET `Prix`='3000' WHERE ID=6

--7--
DELETE FROM `medicament` WHERE Nom='Vitasirop'

--8--
SELECT  m.*,i.* FROM `medicament`as m JOIN `iventaire` as i ON i.ID_Medicament =m.ID WHERE i.Qte_Stock<30

--9--
SELECT COUNT(*) FROM `medicament`as m JOIN `categorie` as c ON c.ID =m.ID_Categorie GROUP BY c.Nom

--10--
SELECT  m.*,u.* FROM `medicament`as m JOIN `unite` as u ON u.ID=m.ID_unite 

--11--
SELECT  m.*,u.*,c.* FROM `medicament`as m JOIN `unite` as u ON u.ID =m.ID_Unite JOIN `categorie` as c  ON m.ID_Categorie=c.ID 

--12--
SELECT  m.*,c.* FROM `medicament`as m JOIN `categorie` as c  ON m.ID_Categorie=c.ID WHERE c.Nom="Sirop"

--13--
SELECT `Nom`,`Date_iventaire` FROM `medicament`as m JOIN `iventaire` as i ON i.ID_Medicament =m.ID WHERE i.Qte_Stock<50 ORDER BY Date_Iventaire DESC LIMIT 7