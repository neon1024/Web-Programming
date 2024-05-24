create table recipes
(
    recipeID    int             not null primary key AUTO_INCREMENT,
    author      varchar(100)    not null,
    name        varchar(100)    not null,
    type        varchar(100)    not null,
    description varchar(100)    not null
);