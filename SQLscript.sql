CREATE DATABASE library;

USE library;

CREATE TABLE books (
	ID int primary key,
    BOOK varchar(50) not null
);

INSERT INTO books (ID, BOOK)
	VALUES (101, 'Harry Potter'),
			(102, 'Diary of A wimpy kid'),
            (103, 'Atomic Habits');

DROP TABLE books;
SELECT * FROM books;
DELETE FROM books WHERE ID in (101,102);

