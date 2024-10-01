CREATE TABLE PlantCareManagers(
    PlantCareManagerID  Int(11)             NOT NULL        AUTO_INCREMENT,
    emailAddress        VARCHAR(255)        NOT NULL        UNIQUE,
    password            VARCHAR(64)         NOT NULL,
    pronouns            VARCHAR(60)         NOT NULL,
    firstName           VARCHAR(60)         NOT NULL,
    lastName            VARCHAR(60)         NOT NULL,
    dateCreated         DATETIME            NOT NULL,
    PRIMARY KEY (PlantCareManagerID)
);

INSERT INTO PlantCareManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('lily@plantcareco.com', SHA2('Plant123', 256), 'She/Her', 'Lily', 'Martin', NOW());

INSERT INTO PlantCareManagers 
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('milo@plantcareco.com',SHA2('Plant123',256),'He/Him', 'Milo', 'Lee', NOW());

INSERT INTO PlantCareManagers 
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('peter@plantcareco.com',SHA2('Plant123',256),'He/They', 'Peter', 'Johnson', NOW());
