create database quiz;
CREATE TABLE users(
    id bigInt PRIMARY KEY  AUTO_INCREMENT,
    username varchar(30), 
    email varchar(255) NOT null UNIQUE,
    password varchar(255) NOT null,
    created_at datetime,
    updated_at datetime
);

CREATE TABLE quiz_questions(
id bigint PRIMARY key AUTO_INCREMENT NOT null,
question varchar(255) NOT null
);

INSERT INTO `quiz_questions`(`question`) VALUES ('What is the capital city of Australia?');
INSERT INTO `quiz_questions`(`question`) VALUES ('Which element has the chemical symbol ‘O’?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What type of animal is known for its black and white stripes?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What is the smallest country in the world by land area?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What type of animal is known for its long neck?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What type of animal can live both on land and in water?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What type of animal can change color to blend in with its surroundings?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What type of animal has black and white fur and lives in China?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What type of animal has large ears and lives in Africa?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What type of animal has sharp claws and lives in North America?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What type of animal has sharp teeth and lives in Australia?');
INSERT INTO `quiz_questions`(`question`) VALUES ('What type of animal has long legs and lives in Africa?');

CREATE TABLE quiz_options(
    id bigint PRIMARY KEY not null AUTO_INCREMENT,
    optionName varchar(255) not null,
    question_id bigint not null,
    istrue boolean NOT null,
   FOREIGN KEY (question_id) REFERENCES quiz_questions(id)
);
INSERT INTO `quiz_options`(`optionName`, `question_id`, `istrue`) VALUES
('Hammerhead Shark','1','0'),
('Great White Shark','1','0'),
('Whale Shark','1','1'),
('Tiger Shark','1','0'),
('Kangaroo','2','1'),
('Lion','2','0'),
('Elephant','2','0'),
('Giraffe','2','0'),
('Sydney','4','0'),
('Melbourne','4','0'),
('Canberra','4','1'),
('Brisbane','4','0'),
('Africa','3',''),
('Asia','3',''),
('South America','3',''),
('Australia','3',''),
('Oxygen','5','1'),
('Osmium','5','0'),
('Gold','5','0'),
('Silver','5','0'),
('Zebga','6','1'),
('Tiger','6','0'),
('Leopard','6','0'),
('Cheetah','6','0'),
('Monaco','7','0'),
('Vatican City','7','1'),
('Nauru','7','0'),
('Tuvalu','7','0'),
('Llama','8','0'),
('Lemur','8','0'),
('Giraffe','8','1'),
('Lion','8','0'),
('Lion','9','0'),
('Frog','9','1'),
('Elephant','9','0'),
('Bear','9','0'),
('Chameleon','10','1'),
('Lion','10','0'),
('Tiger','10','0'),
('Cheetah','10','0'),
('Panda','11','1'),
('Koala','11','0'),
('Kangaroo','11','0'),
('Bear','11','0'),
('Lion','12','0'),
('Giraffe','12','0'),
('Elephant','12','1'),
('Zebra','12','0'),
('Bear','13','1'),
('Lion','13','0'),
('Tiger','13','0'),
('Cheetah','13','0'),
('Kangaroo','14','0'),
('Koala','14','0'),
('Crocodile','14','1'),
('Ostrich','14','0'),
('Giraffe','15','1'),
('Lion','15','0'),
('Tiger','15','0'),
('Cheetah','15','0');

CREATE TABLE admin(
    id bigInt PRIMARY KEY  AUTO_INCREMENT,
    email varchar(255) NOT null UNIQUE,
    password varchar(255) NOT null,
    created_at datetime,
    updated_at datetime
);