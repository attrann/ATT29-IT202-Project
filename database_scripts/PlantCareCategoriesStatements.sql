CREATE TABLE PlantCareCategories (
 PlantCareCategoryID       INT(11)        NOT NULL,
 PlantCareCategoryCode     VARCHAR(10)    NOT NULL   UNIQUE,
 PlantCareCategoryName     VARCHAR(255)   NOT NULL,
 PlantCareAisle            VARCHAR(255)   NOT NULL,
 DateCreated               DATETIME       NOT NULL,
 PRIMARY KEY ( PlantCareCategoryID )
);

INSERT INTO PlantCareCategories
(PlantCareCategoryID, PlantCareCategoryCode, PlantCareCategoryName, PlantCareAisle, DateCreated)
VALUES (100, 'IDP', 'INDOOR PLANTS', 1 ,NOW());

INSERT INTO PlantCareCategories
(PlantCareCategoryID, PlantCareCategoryCode, PlantCareCategoryName, PlantCareAisle, DateCreated)
VALUES (200, 'PLP', 'PLANT POTS', 3 ,NOW());

INSERT INTO PlantCareCategories
(PlantCareCategoryID, PlantCareCategoryCode, PlantCareCategoryName, PlantCareAisle, DateCreated)
VALUES (300, 'WTC', 'WATERING CANS', 5 ,NOW());

INSERT INTO PlantCareCategories
(PlantCareCategoryID, PlantCareCategoryCode, PlantCareCategoryName, PlantCareAisle, DateCreated)
VALUES (400, 'PLS', 'PLANT STAND', 7 ,NOW());

INSERT INTO PlantCareCategories
(PlantCareCategoryID, PlantCareCategoryCode, PlantCareCategoryName, PlantCareAisle, DateCreated)
VALUES (500, 'FTL', 'FERTILIZER', 9 ,NOW());

SELECT * FROM PlantCareCategories

