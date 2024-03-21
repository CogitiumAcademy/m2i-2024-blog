/*!40101 SET NAMES utf8 */;

INSERT INTO `users`
    (`lastName`, `firstName`, `email`, `phone`, `password`, `role`)
VALUES
    ('Doe', 'John', 'john@mail.com', '1234567890', '$2y$10$4lcQorRRI2pC.QU3Qwj/zeq8hSQMyad6MRCTiEsTxIj8SX4t30AbC', 'ROLE_USER'),
    ('Dupont', 'Pierre', 'pierre@mail.com', '1234567890', '$2y$10$4lcQorRRI2pC.QU3Qwj/zeq8hSQMyad6MRCTiEsTxIj8SX4t30AbC', 'ROLE_MODER'),
    ('Giraud', 'Philippe', 'phgiraud@cogitium.com', '1234567890', '$2y$10$4lcQorRRI2pC.QU3Qwj/zeq8hSQMyad6MRCTiEsTxIj8SX4t30AbC', 'ROLE_ADMIN');

INSERT INTO categories
    (name, slug, id_categories)
VALUES
    ('Surf', 'surf', NULL),
    ('Longboard', 'longboard', 1),
    ('Shortboard', 'shortboard', 1),
    ('Voyage', 'voyage', NULL),   
    ('Bali', 'bali', 4);

INSERT INTO posts
    (title, slug, content, createdAt, updatedAt, image, active, id_users, id_categories)
VALUES
    (
        '10 bonnes raisons de surfer en Guadeloupe',
        '10-bonnes-raisons-de-surfer-en-guadeloupe', 
        "Et oui! La meilleure des raisons est probablement celle-ci! Surfer en short et torse nu! Fini le quart d’heure à batailler pour enfiler sa combinaison, les épaules qui chauffent à la rame, et les manoeuvres difficiles. Bien qu’aujourd’hui les combinaisons soient hyper stretch, on est tellement plus libre à poil! Les locaux mettent des top Néoprène l'hiver à cause des Alyzées un peu frais, mais les habitués au froid se ferons un plaisir de surfer torse nu! cependant, n'oubliez surtout pas votre protection solaire! Une bonne crème solaire minérale pour protéger les coraux et un bon lycra manche longue seront vos alliés durant votre séjour au soleil!", 
        '2024-01-10', 
        '2024-02-08', 
        'https://surfexcellence.com/wp-content/uploads/2022/05/IMG_0311-2048x1365.jpeg', 
        TRUE, 
        1, 
        4
    ), 
    
    (
        'Comment entretenir sa planche de surf?',
        'comment-entretenir-sa-planche-de-surf', 
        "Comment entretenir sa planche de surf est la première chose à laquelle tout surfeur pense lorsqu'il achète un beau jour sa planche de surf. On sait tous qu’une planche de surf est sacrée pour un surfeur. On en prendra donc grand soin, à tel point que ce bout de résine finira par dormir sur votre lit!!! Alors voici nos conseils pour savoir comment entretenir sa planche de surf. La première chose à laquelle on pense lorsqu’on obtient sa board, c’est de ne pas l’esquinter, de la garder la plus neuve possible. On a tous envie de garder notre petit bijou intact, et voire même d’en tirer le meilleur prix lors de la revente. Ce que l’on craint le plus c’est d’y faire un trou qui pourrait laisser y entrer de l’eau. Un « PET » dans le jargon du surf.", 
        '2024-01-12', 
        '2024-01-12', 
        'https://surfexcellence.com/wp-content/uploads/2021/09/BEACH_ACTIVITIES.jpeg', 
        FALSE, 
        1, 
        1
    ),
    
    (
        'Comment choisir et acheter sa première planche de surf ?',
        'comment-choisir-et-acheter-sa-premiere-planche-de-surf', 
        "Tout d’abord, demandez l’avis de votre moniteur de surf (et non celui de votre pote de surf!!!). Qui vous donnera des types de planches adaptées à votre niveau de surf. Surtout n’hésitez pas à essayer un modèle de planche que vous pouvez louer ou emprunter à un pote avant de faire votre achat ! C’est pourquoi nous vous conseillons de penser à acheter une planche de surf à partir du moment où vous vous sentez à l’aise sur une planche en dur (planche de surf en résine époxy ou polyester). « Ne pas mettre la charrue avant les bœufs ! ». Tout surfeur va en général trop vite en besogne lorsqu’il est question d’acheter sa première planche de surf. Et oui ! Or, trop souvent, nous voyons des pratiquants avoir des difficultés à progresser du fait de leur planche trop petite, donc trop instable, qui ne glisse pas assez vite et qui est, en plus, difficile à la rame !", 
        '2024-02-08', 
        '2024-02-08', 
        'https://surfexcellence.com/wp-content/uploads/2021/08/Formats-de-planches-de-surf.jpg', 
        TRUE, 
        1, 
        1
    );

INSERT INTO comments
    (content, createdAt, id_users, id_posts)
VALUES
    ("Un super commentaire 1", '2024-03-01', 2, 1),
    ("Un super commentaire 2", '2024-03-02', 2, 3),    
    ("Un super commentaire 3", '2024-03-03', 2, 1),    
    ("Un super commentaire 4", '2024-03-04', 2, 2),    
    ("Un super commentaire 5", '2024-03-05', 2, 2),    
    ("Un super commentaire 6", '2024-03-06', 2, 1),    
    ("Un super commentaire 7", '2024-03-07', 2, 3),    
    ("Un super commentaire 8", '2024-03-08', 2, 1),    
    ("Un super commentaire 9", '2024-03-09', 2, 1),
    ("Un super commentaire 10", '2024-03-10', 2, 2);  

INSERT INTO tags
    (name, slug)
VALUES
    ('Matériel', 'materiel'),
    ('Voyage', 'voyage'),
    ('Sécurité', 'securite'),
    ('Entrainement', 'entrainement');

INSERT INTO define
    (id, id_tags)
VALUES
    (1, 2),
    (2, 1),
    (3, 1),
    (3, 3);
