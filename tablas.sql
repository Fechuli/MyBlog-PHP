CREATE TABLE posts
(
  id              smallint unsigned NOT NULL auto_increment,
  title           varchar(255) NOT NULL,
  excerpt         text NOT NULL,
  content         text NOT NULL,
  published_on     datetime NOT NULL,

  PRIMARY KEY     (id)
);
