CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    is_admin TINYINT NOT NULL DEFAULT 0, -- 1 for admin, 0 for normal user
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE passwords (
    user_id INT PRIMARY KEY,
    password_hash VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    catname VARCHAR(50) NOT NULL
);

CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question_text TEXT NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE answers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    answer_text TEXT NOT NULL,
    question_id INT NOT NULL,
    FOREIGN KEY (question_id) REFERENCES questions(id)
);

INSERT INTO categories (catname) VALUES
('Jeux video'),
('Anime & Manga'),
('Capitales'),
('Football'),
('Animaux'),
('Chansons'),
('Films'),
('Informatique'),
('Marques');


-- Jeux vidéo
INSERT INTO questions (question_text, category_id) VALUES
('Quel est le jeu vidéo le plus vendu de tous les temps ?', 1),
('Quel est le nom du personnage principal de la série de jeux vidéo "The Legend of Zelda" ?', 1),
('Quel est le studio de développement derrière la série de jeux "Final Fantasy" ?', 1),
('Quel est le premier jeu de la série "Assassin''s Creed" ?', 1),
('En quelle année est sorti le jeu "Minecraft" ?', 1),
('Quelle console de jeux vidéo a été commercialisée en 1994 par Sony ?', 1),
('Quel est le nom du personnage principal de la série de jeux "Metal Gear Solid" ?', 1),
('Quel est le genre de jeu vidéo le plus vendu ?', 1),
('Quelle est la première console de jeux vidéo jamais créée ?', 1),
('Qui est le créateur du jeu vidéo "Super Mario Bros" ?', 1);

INSERT INTO answers (answer_text, question_id) VALUES
('Minecraft', 1),
('Link', 2),
('Square Enix', 3),
('Assassin''s Creed', 4),
('2009', 5),
('PlayStation', 6),
('Solid Snake', 7),
('Action-aventure', 8),
('Magnavox Odyssey', 9),
('Shigeru Miyamoto', 10);

-- Anime & Manga
INSERT INTO questions (question_text, category_id) VALUES
('Quel est le manga le plus vendu de tous les temps ?', 2),
('Qui est le personnage principal de "Dragon Ball" ?', 2),
('Quel est le nom de la capitale du pays dans "Naruto" ?', 2),
('Quel est le genre du manga "One Piece" ?', 2),
('Qui est l''auteur du manga "Death Note" ?', 2),
('Dans quelle ville se déroule l''intrigue du manga "Attack on Titan" ?', 2),
('Quel est le nom du personnage principal de "One Punch Man" ?', 2),
('Quel est le genre du manga "Naruto" ?', 2),
('Quel est le nom du robot géant dans "Neon Genesis Evangelion" ?', 2),
('Qui est l''auteur du manga "One Piece" ?', 2);

INSERT INTO answers (answer_text, question_id) VALUES
('One Piece', 11),
('Goku', 12),
('Konoha', 13),
('Shonen', 14),
('Tsugumi Ohba', 15),
('Shiganshina', 16),
('Saitama', 17),
('Shonen', 18),
('EVA-01', 19),
('Eiichiro Oda', 20);

-- Capitales
INSERT INTO questions (question_text, category_id) VALUES
('Quelle est la capitale du Japon ?', 3),
('Quelle est la capitale de l''Espagne ?', 3),
('Quelle est la capitale de la France ?', 3),
('Quelle est la capitale de l''Italie ?', 3),
('Quelle est la capitale de la Russie ?', 3),
('Quelle est la capitale de l''Allemagne ?', 3),
('Quelle est la capitale du Canada ?', 3),
('Quelle est la capitale du Brésil ?', 3),
('Quelle est la capitale de l''Argentine ?', 3),
('Quelle est la capitale de l''Australie ?', 3);

INSERT INTO answers (answer_text, question_id) VALUES
('Tokyo', 21),
('Madrid', 22),
('Paris', 23),
('Rome', 24),
('Moscou', 25),
('Berlin', 26),
('Ottawa', 27),
('Brasilia', 28),
('Buenos Aires', 29),
('Canberra', 30);

-- Football
INSERT INTO questions (question_text, category_id) VALUES
('Quel joueur a remporté le Ballon d''Or le plus de fois ?', 4),
('Quelle équipe a remporté le plus de Coupe du Monde de la FIFA ?', 4),
('Quel est le pays d''origine de Lionel Messi ?', 4),
('Quel est le stade de football le plus grand du monde ?', 4),
('Qui a marqué le but en or lors de la finale de la Coupe du Monde de la FIFA 1998 ?', 4),
('Quel club a remporté le plus de Ligue des Champions de l''UEFA ?', 4),
('Quel joueur détient le record du plus grand nombre de buts marqués en une saison de la Premier League ?', 4),
('Quelle équipe de football est surnommée les "Red Devils" ?', 4),
('Quel est le club de football le plus titré en Angleterre ?', 4),
('Quel est le club de football le plus titré en Espagne ?', 4);

INSERT INTO answers (answer_text, question_id) VALUES
('Lionel Messi', 31),
('Brésil', 32),
('Argentine', 33),
('Stade Rungrado May Day', 34),
('Laurent Blanc', 35),
('Real Madrid', 36),
('Mohamed Salah', 37),
('Manchester United', 38),
('Manchester United', 39),
('Real Madrid', 40);

-- Animaux
INSERT INTO questions (question_text, category_id) VALUES
('Quel est le plus grand mammifère terrestre ?', 5),
('Quel est le plus grand animal du monde ?', 5),
('Combien de pattes possède une araignée ?', 5),
('Quel est le plus grand prédateur terrestre ?', 5),
('Quel est le plus grand oiseau vivant ?', 5),
('Quel est le plus grand reptile vivant ?', 5),
('Quel est le plus grand poisson vivant ?', 5),
('Quel est le plus petit mammifère du monde ?', 5),
('Quel est le plus grand insecte au monde ?', 5),
('Quel est le seul mammifère capable de voler ?', 5);

INSERT INTO answers (answer_text, question_id) VALUES
('Éléphant', 41),
('Baleine bleue', 42),
('8', 43),
('Ours', 44),
('Autruche', 45),
('Crocodylus porosus', 46),
('Requin-baleine', 47),
('Musaraigne étrusque', 48),
('Goliathus goliatus', 49),
('Chauve-souris', 50);

-- Chansons
INSERT INTO questions (question_text, category_id) VALUES
('Quel est le titre de la chanson la plus vendue de tous les temps ?', 6),
('Qui a chanté la chanson "Bohemian Rhapsody" ?', 6),
('Qui est l''interprète de la chanson "Thriller" ?', 6),
('Quel est le titre de la chanson la plus écoutée sur YouTube ?', 6),
('Quel groupe a enregistré la chanson "Stairway to Heaven" ?', 6),
('Quel est le titre de la chanson qui a remporté le Grammy Award de la chanson de l''année en 2021 ?', 6),
('Quel est le titre de la chanson thème du film "Titanic" ?', 6),
('Quel est le titre de la chanson de Michael Jackson sortie en 1982 ?', 6),
('Quel artiste a chanté "Imagine" ?', 6),
('Quelle chanson a été chantée par Louis Armstrong ?', 6);

INSERT INTO answers (answer_text, question_id) VALUES
('White Christmas', 51),
('Queen', 52),
('Michael Jackson', 53),
('Baby Shark', 54),
('Led Zeppelin', 55),
('I Can''t Breathe', 56),
('My Heart Will Go On', 57),
('Billie Jean', 58),
('John Lennon', 59),
('What a Wonderful World', 60);

-- Films
INSERT INTO questions (question_text, category_id) VALUES
('Quel est le film le plus long jamais réalisé ?', 7),
('Quel est le réalisateur de "Pulp Fiction" ?', 7),
('Quel acteur a joué le rôle de Neo dans "The Matrix" ?', 7),
('Quel est le premier film de la saga "Star Wars" ?', 7),
('Qui est l''acteur principal dans le film "Forrest Gump" ?', 7),
('Quelle actrice a remporté l''Oscar de la meilleure actrice pour son rôle dans "La La Land" ?', 7),
('Quel est le film d''animation le plus rentable de tous les temps ?', 7),
('Quel est le réalisateur du film "Inception" ?', 7),
('Quel est le nom du robot dans "Wall-E" ?', 7),
('Qui a réalisé "The Shawshank Redemption" ?', 7);

INSERT INTO answers (answer_text, question_id) VALUES
('Ambiancé', 61),
('Quentin Tarantino', 62),
('Keanu Reeves', 63),
('Star Wars: Épisode IV - Un nouvel espoir', 64),
('Tom Hanks', 65),
('Emma Stone', 66),
('Le Roi Lion', 67),
('Christopher Nolan', 68),
('WALL-E', 69),
('Frank Darabont', 70);

-- Informatique
INSERT INTO questions (question_text, category_id) VALUES
('Qui est le fondateur de Microsoft ?', 8),
('Quelle est la fonction principale du langage de programmation Python ?', 8),
('Quel est le système d''exploitation le plus utilisé au monde sur les ordinateurs de bureau ?', 8),
('Quel est le nom du navigateur Web développé par Google ?', 8),
('Quel est le nom du premier langage de programmation jamais créé ?', 8),
('Quel est le langage de programmation principalement utilisé pour le développement de sites Web ?', 8),
('Quelle est la fonction principale d''un pare-feu informatique ?', 8),
('Quel est le nom du fondateur de Facebook ?', 8),
('Quel est le nom du plus grand réseau social professionnel au monde ?', 8),
('Quel est le principal langage de programmation utilisé pour le développement d''applications Android ?', 8);

INSERT INTO answers (answer_text, question_id) VALUES
('Bill Gates', 71),
('Développement rapide d''applications', 72),
('Windows', 73),
('Google Chrome', 74),
('Fortran', 75),
('HTML/CSS', 76),
('Sécurité du réseau', 77),
('Mark Zuckerberg', 78),
('LinkedIn', 79),
('Java', 80);