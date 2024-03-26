/* Homepage */
SELECT id, image, updatedAt, title, A.slug AS postSlug, LEFT(A.content, 150) AS content, name, B.slug AS categorySlug, lastName, firstName, COUNT(D.id) AS nbComments
FROM posts A
INNER JOIN categories B ON A.id_categories = B.id
INNER JOIN users C ON id_users = C.id
LEFT JOIN comments D ON D.id_posts = A.id
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
	AND A.slug = "comment-entretenir-sa-planche-de-surf";

/* Les commentaires de la page détail */
SELECT firstName, lastName, content, createdAt 
FROM comments A
INNER JOIN users B ON A.id_users = B.id 
WHERE A.id_posts = 1 
ORDER by createdAt DESC;

/* Login */
SELECT id, lastName, firstName, password, role, email 
FROM `users` 
WHERE email = 'xxx@yyy.com';
