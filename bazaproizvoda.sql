CREATE DATABASE 'poslasticarnica';
USE 'poslasticarnica';


CREATE TABLE `proizvodi` (
  `proizvodID` int(3) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `sastojci` int(11) NOT NULL,
  `opis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vrstaID` int(11) NOT NULL,
  PRIMARY KEY (`proizvodID`),
    FOREIGN KEY `vrstaID` (`vrstaID`),
  CONSTRAINT `predstave_ibfk_1` FOREIGN KEY (`vrstaID`) REFERENCES `vrste_proizvoda` (`vrstaID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `vrste_proizvoda` (
  `vrstaID` int(2) NOT NULL,
  `naziv_vrste` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  'naziv_podvrste' varchar(255) utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`vrstaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert  into `vrste_proizvoda`(`vrstaID`,`naziv_vrste`,'naziv_podvrste') values 
(1,'Cokoladna ', 'Posna'),
(2,'Cokoladna', 'Mrsna'),
(3,'Vocna','Posna'),
(4,'Vocna','Mrsna'),
(5,'Vegan', 'Posna'),
(6,'Bezglutenska', 'Posna');
