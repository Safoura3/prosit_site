-- =====================================================================
-- Base de données du site "lebonplan"
-- Reconstruite à partir des requêtes du code (à adapter si besoin).
-- Importer dans phpMyAdmin (XAMPP) ou via : mysql -u root < database.sql
-- =====================================================================

CREATE DATABASE IF NOT EXISTS entlebonplan CHARACTER SET utf8 COLLATE utf8_general_ci;
USE entlebonplan;

-- Table des offres
CREATE TABLE IF NOT EXISTS offres (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    titre       VARCHAR(150) NOT NULL,
    entreprise  VARCHAR(120) NOT NULL,
    lieu        VARCHAR(120) NOT NULL,
    types       VARCHAR(60)  NOT NULL,   -- ex : Stage, Alternance
    duree       VARCHAR(60)  NOT NULL,   -- ex : 6 mois
    description TEXT         NOT NULL
);

-- Table des entreprises
CREATE TABLE IF NOT EXISTS lentreprise (
    id           INT AUTO_INCREMENT PRIMARY KEY,
    nom          VARCHAR(120) NOT NULL,
    localisation VARCHAR(120) NOT NULL
);

-- ---------------------------------------------------------------------
-- Données d'exemple (pour tester le site immédiatement)
-- ---------------------------------------------------------------------
INSERT INTO offres (titre, entreprise, lieu, types, duree, description) VALUES
('Développeur Web Junior', 'TechNova', 'Paris', 'Stage', '6 mois', 'Participer au développement de sites web modernes en HTML, CSS, JavaScript et PHP.'),
('Alternant Data Analyst', 'DataWise', 'Lyon', 'Alternance', '12 mois', 'Analyser des jeux de données et construire des tableaux de bord Power BI.'),
('Administrateur Systèmes', 'CloudLink', 'Toulouse', 'Alternance', '24 mois', 'Gérer les serveurs, réseaux et la sécurité des infrastructures.'),
('Développeur Backend Java', 'FinSoft', 'Nantes', 'Stage', '6 mois', 'Concevoir des API REST avec Spring Boot et une base de données MySQL.'),
('Testeur Logiciel (QA)', 'AppFactory', 'Lille', 'Alternance', '12 mois', 'Rédiger et exécuter des plans de tests, suivre les anomalies.'),
('Développeur Mobile', 'Mobiqo', 'Bordeaux', 'Stage', '5 mois', 'Développer des applications mobiles avec Flutter et React Native.');

INSERT INTO lentreprise (nom, localisation) VALUES
('TechNova', 'Paris'),
('DataWise', 'Lyon'),
('CloudLink', 'Toulouse'),
('FinSoft', 'Nantes'),
('AppFactory', 'Lille'),
('Mobiqo', 'Bordeaux');
