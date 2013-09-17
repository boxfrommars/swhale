-- in db postgres with postgres user
\c postgres
DROP DATABASE IF EXISTS romanov;
DROP ROLE IF EXISTS romanov;
CREATE ROLE romanov ENCRYPTED PASSWORD 'romanov' LOGIN;
CREATE DATABASE romanov OWNER romanov;
GRANT ALL ON DATABASE romanov TO romanov;
\c romanov
CREATE EXTENSION ltree;