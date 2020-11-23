CREATE TABLE users (
  idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  usersUid TINYTEXT NOT NULL,
  usersEmail TINYTEXT NOT NULL,
  usersPwd LONGTEXT NOT NULL,
  token varchar(20) NOT NULL,
  tokenExpire datetime NOT NULL
);
