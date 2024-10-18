CREATE TABLE PlantCareProducts (
 PlantCareProductID        INT(11)        NOT NULL,
 PlantCareProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
 PlantCareProductName      VARCHAR(255)   NOT NULL,
 PlantCareDescription      TEXT           NOT NULL,
 PlantCareColor            VARCHAR(255)   NOT NULL,
 PlantCareCategoryID       INT(11)        NOT NULL,
 PlantCareWholesalePrice   DECIMAL(10,2)  NOT NULL,
 PlantCareListPrice        DECIMAL(10,2)  NOT NULL,
 DateCreated               DATETIME       NOT NULL,
 PRIMARY KEY ( PlantCareProductID )
);

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (1000, 'SUC', 'SUCCULENTS', 'Indoor, drought-resistant plants with charming colors and exotic foliage.
Easy to handle plants that do not require intense care.', 'Variety', 100, 12.99,29.99, NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (1001, 'ANT', 'ANTHURIUM', 'Anthurium Red, also known as the Flamingo Lily, is a tropical plant known for its bright red flowers. 
It can grow up to 4 feet tall and requires bright sunlight.', 'Red', 100, 24.97, 32.98,  NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (1002, 'SYN', 'SYNGONIUM STRAWBERRY', 'The Syngonium Strawberry is an evergreen perennial native to 
Central and South America. This plant grows large, thin, heart shaped leaves which come in a variety of 
vibrant colors, however our variety is a bright pinkish-red.', 'Pink-Red', 100, 24.99, 30.97, NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (2000, 'CCP', 'CLAY POT', 'Clay pot made to withhold your choice of dirt and plant. 
Beautifully crafted from experts that will give your home an authentic feel.',
'TerraCotta', 200, 13.00, 16.00, NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (2001, 'COS', 'COSAPOTS SEMPLITO', 'The Cosapots Semplito is a wide rectangle tailored to those who want a modern look.
It is frost resistant and is perfect to be used to hold your plants.', 'White Stone', 200, 1190.00, 1199.00, NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (2002, 'CRE', 'CRESCENT GARDEN MADISON', 'The Crescent Garden Madison Round Planter is heavy-duty and designed to be lightweight.
It duplicates the look of an authentic clay planter and transforms your house beautifully.', 'Rust', 200, 299.00, 359.00, NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (3000, 'BLOEM', 'BLOEM SPARROW WATERING CAN', 'User-friendly and easy watering Bloem Sparrow Watering Can to help with gardening needs.
Its beginner friendly manual makes this watering can perfect for first time planters.',
'Blue', 300, 3.97, 5.99, NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (3001, 'HAW', 'HAWS BOSMERE', 'Despite being smaller in size compared to most watering cans, it helps water your plants more carefully which prevents leaf fungus.
It holds one quart of water and has a fine rosette nozzle for gentle watering.', 'Dark-Green', 300, 26.00, 32.00, NOW());
INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (3002, 'DRAM', 'DRAMM LONG-SPOUT', 'The Dramm  Long-Spout Watering Can can hold up to 7 liters and has a sprinkler nozzle.
It is made out of durable plastic which will not allow it to rust or leak.', 'Teal', 300, 41.99, 52.00, NOW() );

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (4000, 'ROSS', 'ROSSNY PLANT STAND', 'Rossny Plant Stand allows 7 potted plants to be on display and is perfect for an indoor space.',
'Light Brown', 400, 25.49, 36.99 NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (4001, 'MAG', 'MAGSHION BAMBOO STAND', 'The Magshion Bamboo Stand is a three tier plant stand that can hold a few medium sized plants.
Its bottom shelf is 12.6 inches square with narrower middle and top shelves.', 'Oak-Brown', 400, 35.99, 43.89, NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (4002, 'UNH', 'UNHO CORNER STAND', 'This six tier corner plant stand will fit perfectly into the corner of your room.
With six shelves, all at different heights, you can experiment with various arrangements.', 'Brown', 400, 50.00, 64.87, NOW());


INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (5000, 'GRO', 'MIRACLE-GRO', 'Miracle Gro is a must-have fertilizer for all indoor plant use. It instantly feeds your plants and can be able to apply directly to the soil.',
'Green', 500, 15.82, 21.00 NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (5001, 'ESP', 'ESPOMA ORGANIC', 'The Espoma Organic is made from the finest quality organics available.
This fertilizer ensures great plant growth and provides a long lasting food resevoir.', 'White-Brown', 500, 12.99, 16.47, NOW());

INSERT INTO PlantCareProducts
(PlantCareProductID, PlantCareProductCode, PlantCareProductName, PlantCareDescription, PlantCareColor,
PlantCareCategoryID, PlantCareWholesalePrice, PlantCareListPrice, DateCreated)
VALUES (5002, 'SUP', 'SUPERTHRIVE GROW PLANT FOOD', 'SuperThrives formula contains calcium which reduces the risk of infection for your plants.
Its nitrogen levels are lower than your average fertilizer which results in less stretchy growth.', 'White', 500, 15.00, 20.99, NOW());

