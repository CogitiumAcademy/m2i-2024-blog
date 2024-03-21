/* Homepage */
SELECT image, updatedAt, title, A.slug, LEFT(content, 150), name, B.slug, lastName, firstName 
FROM posts A
INNER JOIN categories B ON A.id_categories = B.id
INNER JOIN users C ON id_users = C.id
WHERE active = TRUE
ORDER BY updatedAt DESC
LIMIT 10;
