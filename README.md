# php-oop

```sql
CREATE DATABASE oop_pokemon CHARACTER SET utf8mb4;
```
```sql
USE oop_pokemon;
```
```sql
CREATE TABLE pokemon (
    id INT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    pv INT NOT NULL,
    hasEvolve BOOLEAN
);
```
