CREATE DATABASE university;

USE university;

CREATE TABLE faculties
(
     id                  INT AUTO_INCREMENT NOT NULL,
     facultyName         VARCHAR(255)       NOT NULL,
     numberOfGroups      INT                NOT NULL,
     PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8mb4
  COLLATE `utf8mb4_unicode_ci`
  ENGINE = InnoDB
;

INSERT INTO faculties (facultyName, numberOfGroups) VALUES
    ('ФИиВТ', '3'),
    ('ИММ', '3'),
    ('ФСТ', '3');

CREATE TABLE groups
(
    id                  INT AUTO_INCREMENT NOT NULL,
    groupName           VARCHAR(255)       NOT NULL,
    numberOfStudents    INT                NOT NULL,
    faculty             INT                NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (faculty) REFERENCES faculties (id)
) DEFAULT CHARACTER SET utf8mb4
  COLLATE 'utf8mb4_unicode_ci'
  ENGINE = InnoDB;

INSERT INTO groups (groupName, numberOfStudents, faculty) VALUES
    ('ПС-11', '5', '1'),
    ('ПС-12', '5', '1'),
    ('ПС-13', '5', '1'),
    ('КТМ-11', '5', '2'),
    ('КТМ-21', '5', '2'),
    ('КТМ-31', '5', '2'),
    ('МС-11', '5', '3'),
    ('МС-21', '5', '3'),
    ('МС-31', '5', '3');

CREATE TABLE students
(
    id              INT AUTO_INCREMENT NOT NULL,
    last_name       VARCHAR(255)       NOT NULL,
    first_name      VARCHAR(255)       NOT NULL,
    middle_name     VARCHAR(255)       NOT NULL,
    age             INT                NOT NULL,
    groupId         INT                NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (groupId) REFERENCES groups (id)
) DEFAULT CHARACTER SET utf8mb4
  COLLATE 'utf8mb4_unicode_ci'
  ENGINE = InnoDB;

INSERT INTO students(last_name, first_name, middle_name, age, groupId) VALUES
    ('Александров', 'Александр', 'Сергеевич', '19', '5'),
    ('Алёшкин', 'Алексей', 'Алексеевич', '20', '6'),
    ('Артемьев', 'Андрей', 'Иванович', '18', '4'),
    ('Бизяев', 'Владимир', 'Дмитриевич', '18', '2'),
    ('Васильев', 'Василий', 'Александрович', '21', '7'),
    ('Волнушкин', 'Родион', 'Эдуардович', '19', '3'),
    ('Востриков', 'Александр', 'Иванович', '18', '8'),
    ('Галкин', 'Максим', 'Алексееваич', '23', '2'),
    ('Грошева', 'Наталья', 'Генадьевна', '19', '2'),
    ('Грибочкин', 'Иван', 'Иванович', '25', '9'),
    ('Дзюбак', 'Галина', 'Сергеевна', '19', '3'),
    ('Дмитриев', 'Алексей', 'Константинович', '19', '1'),
    ('Емелин', 'Валерий', 'Родионович', '21', '1'),
    ('Ерошкин', 'Геннадий', 'Васильевич', '19', '2'),
    ('Журавлева', 'Вива', 'Аркадьевна', '17', '4'),
    ('Зверев', 'Егор', 'Сергеевич', '19', '3'),
    ('Игнатьев', 'Федор', 'Михайлович',  '18', '1'),
    ('Корчемкина', 'Мария', 'Вячеславовна', '19', '4'),
    ('Кропинов', 'Артем', 'Валентинович', '20', '5'),
    ('Молочникова', 'Ольга', 'Николаевна', '22', '6'),
    ('Мосейчук', 'Татьяна', 'Сергеевна', '18', '4'),
    ('Мошкина', 'Людмила', 'Юрьевна', '21', '7'),
    ('Муму', 'Герасим', 'Иванович', '18', '7'),
    ('Муравьев', 'Евгений', 'Андреевич', '18', '8'),
    ('Наймушин', 'Николай', 'Владимирович', '19', '9'),
    ('Николаев', 'Иван', 'Юрьевич', '20', '1'),
    ('Немчанинова', 'Софья', 'Васильевна', '18', '6'),
    ('Новоселова', 'Елена', 'Сергеевна', '25', '9'),
    ('Пирогова', 'Елена', 'Сергеевна', '20', '2'),
    ('Попов', 'Олег', 'Петрович', '18', '3'),
    ('Пупкин', 'Вася', 'Васильевич', '20', '5'),
    ('Путин', 'Владимир', 'Владимирович',  '30', '1'),
    ('Распутин', 'Дмитрий', 'Владиславович', '18', '5'),
    ('Рогачев', 'Сергей', 'Леонидович',  '22', '5'),
    ('Родина', 'Дарья', 'Леонидовна', '19', '4'),
    ('Сергеева', 'Евгения', 'Ивановна', '17', '6'),
    ('Смирнов', 'Анатолий', 'Васильевич', '19', '7'),
    ('Суслов', 'Анатолий', 'Леонидович',  '22', '8'),
    ('Тимофеев', 'Владимир', 'Владимирович', '23', '9'),
    ('Ткаченко', 'Алексей', 'Валерьевич', '18', '7'),
    ('Трофимов', 'Василий', 'Александрович', '21', '8'),
    ('Филипов', 'Егор', 'Кириллович', '18', '9'),
    ('Хлынов', 'Кирилл', 'Дмитриевич', '17', '8'),
    ('Царева', 'Анна', 'Ивановна', '21', '6'),
    ('Яковлев', 'Виктор', 'Валерьевич', '20', '3');

SELECT
    *
FROM
    students
WHERE
    age = '19';

SELECT
    students.last_name,
    students.first_name,
    students.middle_name,
    students.age,
    groups.groupName
FROM
    students
    JOIN groups ON students.groupId = groups.id
WHERE
    groups.groupName = 'КТМ-11';

SELECT
    students.last_name,
    students.first_name,
    students.middle_name,
    students.age,
    faculties.facultyName
FROM
    students
    JOIN groups ON students.groupId = groups.id
    JOIN faculties ON groups.faculty = faculties.id
WHERE
    faculties.facultyName = 'ФИиВТ';

SELECT
    students.id,
    students.last_name,
    students.first_name,
    students.middle_name,
    students.age,
    groups.groupName,
    faculties.facultyName
FROM
    students
    JOIN groups ON students.groupId = groups.id
    JOIN faculties ON groups.faculty = faculties.id
WHERE
    students.id = '5';



