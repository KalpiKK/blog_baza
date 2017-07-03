create DATABASE blog;
use blog;
create user bloguser;
GRANT all privileges on blog.* to bloguser;

create table posts
(
	id int auto_increment
		primary key,
	title varchar(200) not null,
	date date null,
	image text not null,
	authorImage text not null,
	constraint posts_id_uindex
		unique (id)
);

INSERT INTO blog.posts (title, date, image, authorImage) VALUES ('how to find desing inspiration in the simple things around you', '2015-11-24', 'http://i66.tinypic.com/lzj8x.jpg', 'http://i67.tinypic.com/2m2vnnk.jpg');
INSERT INTO blog.posts (title, date, image, authorImage) VALUES ('the only guide to choosing website photos you''ll ever need', '2015-11-16', 'http://i64.tinypic.com/5xoqqr.jpg', 'http://i67.tinypic.com/2m2vnnk.jpg');
INSERT INTO blog.posts (title, date, image, authorImage) VALUES ('fantastic designs of 2015 concept cars', '2015-11-28', 'http://i67.tinypic.com/i37094.jpg', 'http://i67.tinypic.com/2m2vnnk.jpg');
INSERT INTO blog.posts (title, date, image, authorImage) VALUES ('get 80% off dslr photography course bundle', '2015-11-08', 'http://i67.tinypic.com/vr3cl4.jpg', 'http://i67.tinypic.com/2m2vnnk.jpg');
INSERT INTO blog.posts (title, date, image, authorImage) VALUES ('growth hack your way to a successful freelance career', null, 'http://i68.tinypic.com/2e32814.jpg', 'http://i67.tinypic.com/2m2vnnk.jpg');

