drop database spiel;

create database if not exists spiel;

use spiel;

create table if not exists Spiele(
spiel_id int unique auto_increment,
spieletitel varchar(100),
cover varchar(600),
genre1 varchar(100),
genre2 varchar(100),
plattform varchar(100),
zeit_aufwand varchar(100),
alterbeschraenkung varchar(7),
single_multiplayer varchar(100),
budget varchar(20),
beschreibung varchar(9000),
PRIMARY KEY (spiel_id)
);

/*Insert statement für Spiele mit einem Genre*/
INSERT INTO Spiele (spieletitel, cover, genre1, plattform, zeit_aufwand, alterbeschraenkung, single_multiplayer, budget)
VALUES ("The Witcher 3: Wild Hunt", "", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "50 Stunden", "18", "Singleplayer", "40 Euro"),
("XCOM: Enemy Unknown", "", "Strategie", "PC", "ca 30 Stunden", "16", "Singleplayer, Multiplayer", "30 Euro"),
("Crash Bandicoot N. Sane Trilogy", "", "Jump & Run", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 15 Stunden", "6", "Singleplayer", "40 Euro"),
("BioShock Remastered", "", "Shooter", "PC, XBOX ONE, PS4", "ca 12 Stunden", "18", "SinglepLayer", "20 Euro"),
("Spyro Reignited Trilogy", "", "Jump & Run", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 16 Stunden", "6", "Singleplayer", "40 Euro"),
("Yooka-Laylee", "", "Jump & Run", "Pc, Nintendo Switch", "ca 15 Stunden", "6", "Singleplayer, Multiplayer", "40 Euro"),
("BattleBlock Theater", "", "Jump & Run", "PC", "ca 10 Stunden", "12", "Singleplayer, Multiplayer", "15 Euro"),
("Final Fantasy X/X-2HD Remaster", "", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 55 Stunden", "12", "Singleplayer", "30 Euro"),
("Super Smash Bros. Ultimate", "", "Action", "Nintendo Switch", "ca 22 Stunden", "12", "Singleplayer, Multiplayer", "55 Euro"),
("A Hat in Time", "", "Jump & Run", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 9 Stunden", " 12", "Singleplayer, Multiplayer", "30 Euro"),
("GTA V", "", "Action", "PC, XBOX ONE, PS4", "ca 30 Stunden", "18", "Singleplayer, teilweise Multiplayer", "30 Euro"),
("Overwatch", "", "Shooter", "PC, XBOX ONE, PS4, Nintendo Switch", "/", "16", "Multiplayer", "20 Euro"),
("South Park der Stab der Wahrheit", "", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 12 Stunden", "16", "Singleplayer", "30 Euro"),
("South Park die Rektakuläre Zerreißprobe", "", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 17 Stunden", "16", "Singleplayer", "50 Euro"),
("Super Mario Odyssey", "", "Jump & Run", "Nintendo Switch", "ca 13 Stunden", "6", "Singleplayer, Multiplayer", "60 Euro"),
("SteamWorld Heist", "", "Strategie", "PC, PS4, Nintendo Switch", "ca 12 Stunden", "12", "Singleplayer", "15 Euro"),
("Bastion", "", "Action", "PC, PS4", "ca 6 Stunden", "12", "Singleplayer", "15 Euro"),
("Counter Strike: Global Offensive", "", "Shooter", "PC", "/", "18", "Multiplayer", "Kostenlos"),
("Metin 2", "", "Rollenspieler", "PC", "500 Stunden+", "12", "Multiplayer", "Kostenlos");


/*Insert statement für Spiele mit zwei Genres*/
INSERT INTO Spiele (spieletitel, cover, genre1, genre2, plattform, zeit_aufwand, alterbeschraenkung, single_multiplayer, budget)
VALUES ("The Binding of Isaac: Rebirth", "", "Action", "Adventure", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 5 Stunden", "16", "singleplayer, teilweise Mutliplayer", "15 Euro"),
("Fire Emblem: Three Houses", "", "Strategie", "Rollenspiel", "Nintendo Switch", "ca 50 Stunden", "12", "Singleplayer", "60 Euro"),
("Darkest Dungeon", "", "Strategie", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "50 Stunden+", "12", "Singleplayer", "40 Euro"),
("Fallout 4", "", "Shooter", "Rollenspiel", "PC, XBOX ONE, PS4", "ca 27 Stunden", "18", "Singleplayer", "30 Euro"),
("Batman Arkham Knight", "", "Adventure", "Rollenspiel", "PC, XBOX ONE, PS4", "ca 16 Stunden", "16", "Singleplayer", "15 Euro"),
("Dark Souls 3", "", "Rollenspiel", "Action", "PC, XBOX ONE, PS4", "ca 33 Stunden", "16", "Singleplayer, Multiplayer", "60 Euro"),
("Monster Hunter World", "", "Action", "Rollenspiel", "PC, XBOX ONE, PS4", "ca 50 Stunden", "12", "Singleplayer, Multiplayer", "60 Euro"),
("The Legend of Zelda Breath of the Wild", "", "Adventure", "Rollenspiel", "Nintendo Switch", "ca 50 Stunden", "12", "Singleplayer", "55 Euro"),
("Pokemon Schild und Schwert", "", "Rollenspiel", "Adventure", "Nintendo Switch", "ca 30 Stunden", "6", "Singleplayer, teilweise Multiplayer", "60 Euro"),
("Sekiro Shadows Die Twice", "", "Action", "Adventure", "PC, XBOX ONE, PS4", "ca 30 Stunden", "18", "Singleplayer", "60 Euro"),
("For the King", "", "Strategie", "Rollenspiel", "PC, XBOX ONE, PS4, Nintendo Switch", "ca 12 Stunden", "12", "Singleplayer, Multiplayer", "20 Euro");





