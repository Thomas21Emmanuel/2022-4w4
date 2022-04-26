SELECT SUBSTR( `post_title`, 5) FROM `lpz_posts` WHERE `post_title` LIKE "___-%"
UPDATE `lpz_posts` SET `post_title` = SUBSTR( `post_title`, 5) WHERE `post_title` LIKE "___-%"