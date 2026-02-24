create table users(
    username varchar(20) primary key
);

create table question(
    question_number int AUTO_INCREMENT,
    question varchar(20) not null,
    category varchar(20)
);

create table ranking(
    score int not null
);

ALTER TABLE ranking
ADD FOREIGN KEY (username) REFERENCES 'users' (username);
