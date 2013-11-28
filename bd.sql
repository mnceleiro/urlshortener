DROP TABLE clicks;
DROP TABLE links;
DROP TABLE users;

CREATE TABLE users (
	id INT UNSIGNED AUTO_INCREMENT NOT NULL,
	name VARCHAR(20) NOT NULL,
	surname VARCHAR(40) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE links (
	id INT UNSIGNED AUTO_INCREMENT NOT NULL,
	url VARCHAR(40) NOT NULL,
	user_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users (id)
);

CREATE TABLE clicks (
	id INT UNSIGNED AUTO_INCREMENT NOT NULL,
	amount INT (6),
	link_id INT UNSIGNED NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (link_id) REFERENCES links (id)
);

INSERT INTO users (id, name, surname) VALUES (0, "marcos", "nunez");
INSERT INTO links (id, url, user_id) VALUES (0, "www.peixe.com", 1);
INSERT INTO clicks (id, amount, link_id) VALUES (0, 20, 0);