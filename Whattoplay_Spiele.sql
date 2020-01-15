
use iba;

create table if not exists Spiele(
spiel_id int unique auto_increment,
spieletitel varchar(100),
cover varchar(600) ,
genre1 varchar(100),
genre2 varchar(100),
plattform varchar(100),
zeit_aufwand varchar(100),
alterbeschraenkung varchar(7),
single_multiplayer varchar(100),
budget varchar(20),
beschreibung varchar(69420),
PRIMARY KEY (spiel_id)
);

/*Insert statement für Spiele mit einem Genre*/
INSERT INTO Spiele (spieletitel, cover, genre1, plattform, zeit_aufwand, alterbeschraenkung, single_multiplayer, budget, beschreibung)
VALUES ("The Witcher 3: Wild Hunt", "/WhatToPlay/Bilder_WhatToPlay/Witcher3WildHunt.jpg", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "50 Stunden", "18", "Singleplayer", "40 Euro", ""),
("XCOM: Enemy Unknown", "/WhatToPlay/Bilder_WhatToPlay/XCOMEnemyUnknown.jpg", "Strategie", "PC", "ca 30 Stunden", "16", "Singleplayer, Multiplayer", "30 Euro", ""),
("Crash Bandicoot N. Sane Trilogy", "/WhatToPlay/Bilder_WhatToPlay/CrashBandicootMNSane.jpg", "Jump & Run", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 15 Stunden", "6", "Singleplayer", "40 Euro", ""),
("BioShock Remastered", "/WhatToPlay/Bilder_WhatToPlay/BioShock.jpg", "Shooter", "PC, XBOX ONE, PS4", "ca 12 Stunden", "18", "Singleplayer", "20 Euro", ""),
("Spyro Reignited Trilogy", "/WhatToPlay/Bilder_WhatToPlay/SpyroReignited.jpg", "Jump & Run", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 16 Stunden", "6", "Singleplayer", "40 Euro", ""),
("Yooka-Laylee", "/WhatToPlay/Bilder_WhatToPlay/YookaLaylee.png", "Jump & Run", "Pc, Nintendo Switch", "ca 15 Stunden", "6", "Singleplayer, Multiplayer", "40 Euro", ""),
("BattleBlock Theater", "/WhatToPlay/Bilder_WhatToPlay/BattleBlockTheater.jpg", "Jump & Run", "PC", "ca 10 Stunden", "12", "Singleplayer, Multiplayer", "15 Euro", ""),
("Final Fantasy X/X-2HD Remaster", "/WhatToPlay/Bilder_WhatToPlay/FinalFantasyXHDRemaster.jpeg", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 55 Stunden", "12", "Singleplayer", "30 Euro", ""),
("Super Smash Bros. Ultimate", "/WhatToPlay/Bilder_WhatToPlay/SmashBros.png", "Action", "Nintendo Switch", "ca 22 Stunden", "12", "Singleplayer, Multiplayer", "55 Euro", ""),
("A Hat in Time", "/WhatToPlay/Bilder_WhatToPlay/AHatInTime.jpg", "Jump & Run", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 9 Stunden", " 12", "Singleplayer, Multiplayer", "30 Euro", ""),
("GTA V", "/WhatToPlay/Bilder_WhatToPlay/GTA5.jpg", "Action", "PC, XBOX ONE, PS4", "ca 30 Stunden", "18", "Singleplayer, teilweise Multiplayer", "30 Euro", ""),
("Overwatch", "/WhatToPlay/Bilder_WhatToPlay/Overwatch.jpg", "Shooter", "PC, XBOX ONE, PS4, Nintendo Switch", "/", "16", "Multiplayer", "20 Euro", ""),
("South Park der Stab der Wahrheit", "/WhatToPlay/Bilder_WhatToPlay/SouthPark.jpg", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 12 Stunden", "16", "Singleplayer", "30 Euro", ""),
("South Park die Rektakuläre Zerreißprobe", "/WhatToPlay/Bilder_WhatToPlay/SouthPark2.jpg", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 17 Stunden", "16", "Singleplayer", "50 Euro", ""),
("Super Mario Odyssey", "/WhatToPlay/Bilder_WhatToPlay/SuperMarioOdyssey.jpg", "Jump & Run", "Nintendo Switch", "ca 13 Stunden", "6", "Singleplayer, Multiplayer", "60 Euro", ""),
("SteamWorld Heist", "/WhatToPlay/Bilder_WhatToPlay/SteamWorldHeist.jpg", "Strategie", "PC, PS4, Nintendo Switch", "ca 12 Stunden", "12", "Singleplayer", "15 Euro", ""),
("Bastion", "/WhatToPlay/Bilder_WhatToPlay/Bastion.png", "Action", "PC, PS4", "ca 6 Stunden", "12", "Singleplayer", "15 Euro", ""),
("Counter Strike: Global Offensive", "/WhatToPlay/Bilder_WhatToPlay/CSGO.jpg", "Shooter", "PC", "/", "18", "Multiplayer", "Kostenlos", ""),
("Metin 2", "/WhatToPlay/Bilder_WhatToPlay/Metin2.jpg", "Rollenspiel", "PC", "500 Stunden+", "12", "Multiplayer", "Kostenlos", "");


/*Insert statement für Spiele mit zwei Genres*/
INSERT INTO Spiele (spieletitel, cover, genre1, genre2, plattform, zeit_aufwand, alterbeschraenkung, single_multiplayer, budget, beschreibung)
VALUES ("The Binding of Isaac: Rebirth", "/WhatToPlay/Bilder_WhatToPlay/IsaacRebirth.jpg", "Action", "Adventure", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 5 Stunden", "16", "Singleplayer, teilweise Mutliplayer", "15 Euro", ""),
("Fire Emblem: Three Houses", "/WhatToPlay/Bilder_WhatToPlay/FireEmblemThreeHouses.jpg", "Strategie", "Rollenspiel", "Nintendo Switch", "ca 50 Stunden", "12", "Singleplayer", "60 Euro", ""),
("Darkest Dungeon", "/WhatToPlay/Bilder_WhatToPlay/DarkestDungeon.png", "Strategie", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "50 Stunden+", "12", "Singleplayer", "40 Euro", ""),
("Fallout 4", "/WhatToPlay/Bilder_WhatToPlay/Fallout4.jpg", "Shooter", "Rollenspiel", "PC, XBOX ONE, PS4", "ca 27 Stunden", "18", "Singleplayer", "30 Euro", ""),
("Batman Arkham Knight", "/WhatToPlay/Bilder_WhatToPlay/BatmanArkhamKnight.jpg", "Adventure", "Rollenspiel", "PC, XBOX ONE, PS4", "ca 16 Stunden", "16", "Singleplayer", "15 Euro", ""),
("Dark Souls 3", "/WhatToPlay/Bilder_WhatToPlay/DarkSouls3.jpg", "Rollenspiel", "Action", "PC, XBOX ONE, PS4", "ca 33 Stunden", "16", "Singleplayer, Multiplayer", "60 Euro", ""),
("Monster Hunter World", "/WhatToPlay/Bilder_WhatToPlay/MonsterHunterWorld.jpg", "Action", "Rollenspiel", "PC, XBOX ONE, PS4", "ca 50 Stunden", "12", "Singleplayer, Multiplayer", "60 Euro", ""),
("The Legend of Zelda Breath of the Wild", "/WhatToPlay/Bilder_WhatToPlay/ZeldaBOTW.jpg", "Adventure", "Rollenspiel", "Nintendo Switch", "ca 50 Stunden", "12", "Singleplayer", "55 Euro", ""),
("Pokemon Schild und Schwert", "/WhatToPlay/Bilder_WhatToPlay/PokemonSchwertSchild.jpg", "Rollenspiel", "Adventure", "Nintendo Switch", "ca 30 Stunden", "6", "Singleplayer, teilweise Multiplayer", "60 Euro", ""),
("Sekiro Shadows Die Twice", "/WhatToPlay/Bilder_WhatToPlay/Sekiro.jpg", "Action", "Adventure", "PC, XBOX ONE, PS4", "ca 30 Stunden", "18", "Singleplayer", "60 Euro", ""),
("For the King", "/WhatToPlay/Bilder_WhatToPlay/FitForAKing.jpg", "Strategie", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 12 Stunden", "12", "Singleplayer, Multiplayer", "20 Euro", "");





