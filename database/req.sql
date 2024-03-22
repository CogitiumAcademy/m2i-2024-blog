/* Homepage */
SELECT image, updatedAt, title, A.slug, LEFT(A.content, 150), name, B.slug, lastName, firstName, COUNT(D.id) AS nbComments
FROM posts A
INNER JOIN categories B ON A.id_categories = B.id
INNER JOIN users C ON id_users = C.id
INNER JOIN comments D ON D.id_posts = A.id
WHERE active = TRUE
GROUP BY A.id
ORDER BY updatedAt DESC
LIMIT 10;

/* Page détail */
SELECT image, createdAt, updatedAt, title, A.content, name, B.slug, lastName, firstName, email
FROM posts A
INNER JOIN categories B ON A.id_categories = B.id
INNER JOIN users C ON id_users = C.id
WHERE active = TRUE
	AND A.id = 2;

/* Les commentaires de la page détail */
SELECT firstName, lastName, content, createdAt 
FROM comments A
INNER JOIN users B ON A.id_users = B.id 
WHERE A.id_posts = 1 
ORDER by createdAt DESC;
