

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
        "10 bonnes raisons de surfer en Guadeloupe",
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
        "Comment entretenir sa planche de surf?",
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
        "Comment choisir et acheter sa première planche de surf ?",
        'comment-choisir-et-acheter-sa-premiere-planche-de-surf', 
        "Tout d’abord, demandez l’avis de votre moniteur de surf (et non celui de votre pote de surf!!!). Qui vous donnera des types de planches adaptées à votre niveau de surf. Surtout n’hésitez pas à essayer un modèle de planche que vous pouvez louer ou emprunter à un pote avant de faire votre achat ! C’est pourquoi nous vous conseillons de penser à acheter une planche de surf à partir du moment où vous vous sentez à l’aise sur une planche en dur (planche de surf en résine époxy ou polyester). « Ne pas mettre la charrue avant les bœufs ! ». Tout surfeur va en général trop vite en besogne lorsqu’il est question d’acheter sa première planche de surf. Et oui ! Or, trop souvent, nous voyons des pratiquants avoir des difficultés à progresser du fait de leur planche trop petite, donc trop instable, qui ne glisse pas assez vite et qui est, en plus, difficile à la rame !", 
        '2024-02-08', 
        '2024-02-08', 
        'https://surfexcellence.com/wp-content/uploads/2021/08/Formats-de-planches-de-surf.jpg', 
        TRUE, 
        1, 
        1
    ),
    
    (
        "Teahupoo : Pétition contre la Tour en aluminium pour les JO de Paris 2024",
        'teahupoo-petition-contre-la-tour-en-aluminium-pour-les-jo-de-paris-2024', 
        "Elle fait partie du paysage et de l’écosystème de la vague mythique de Teahupoo à Tahiti : la fameuse tour en bois qui permet aux juges d’avoir une vue imprenable sur le spot pour apprécier les exploits des surfeurs. Oui mais voilà : pour l’épreuve de surf des Jeux Olympiques de Paris 2024, c’est une tour beaucoup plus sophistiquée et potentiellement néfaste pour l’environnement marin et la célèbre vague qui est requise par l’organisation. Les surfeurs locaux et la communauté surf internationale lancent une mobilisation contre cet équipement nuisible à son environnement. Vous pouvez signer la pétition ici. Pour remettre les choses dans leur contexte, la tour traditionnelle en bois était assemblée chaque année dans le lagon juste avant les dates de l’épreuve du Tahiti Pro et démontée juste après, avec à peu près la même structure totalement éco-conçue depuis une vingtaine d’années. L’organisation des Jeux Olympiques de Paris 2024 a fixé un cahier des charges beaucoup plus exigeant pour cette tour de jugement qui est censée accueillir plus de monde dans des conditions de sécurité et de confort maximal avec… de l’électricité, de l’eau pour les toilettes et un système d’évacuation, des câbles pour Internet à haut débit et même la climatisation dans la salle des juges ! On sait que le mieux est parfois l’ennemi du bien mais là on se demande si l’organisation n’est pas tombée sur la tête en confondant cette merveille de la nature qu’est Teahupoo avec le quartier de la Défense à Paris… Cette tour en aluminium serait supportée par des plots en béton avec des câbles et des canalisations sous-marines, tous susceptibles d’altérer le récif, de déséquilibrer la vie marine et d’altérer voire de faire disparaître la vague de Teahupoo. Le coût pharaonique de la structure a également été pointé du doigt : 527 millions de francs pacifiques soit plus de 4,4 millions d’euros. Une forte mobilisation a été lancée par les locaux de Tahiti ce week-end et une pétition qui a déjà obtenu des dizaines de milliers de signatures circule sur les réseaux sociaux. C’est le surfeur local Matahi Drollet qui a pris la parole dans une vidéo très partagée sur son compte Instagram pour bien expliquer les enjeux. Matahi Drollet évoque les risques de stress sur la vie marine et le risque potentiel de propagation de la ciguatera avec des conséquences directes sur la vie et la santé de la population qui vit et se nourrit du poisson. Matahi Drollet en appelle directement à l’organisation des JO pour une prise de conscience de l’enjeu environnemental et l’arrêt de ce projet disproportionné impactant négativement l’écosystème.", 
        '2024-02-09', 
        '2024-02-09', 
        'https://blog.surf-prevention.com/wp-content/uploads/2023/10/teahupoo-tour-reef.jpg', 
        TRUE, 
        1, 
        1
    ),
    
    (
        "Mikala Jones : la Cause de son Accident de Surf tragique",
        'mikala-jones-la-cause-de-son-accident-de-surf-tragique', 
        "La communauté du surf est une nouvelle fois endeuillée suite à la mort tragique et prématurée de l’un de ses free surfeurs les plus appréciés, Mikala Jones, 44 ans, mort des suites d’un terrible accident de surf aux Mentawai. Les images de Mikala Jones avaient fait le tour du monde car c’était l’un des tous meilleurs pour filmer l’intérieur des tubes qu’il surfait avec sa GoPro et offrir des angles de vue inédits. Il était également apprécié pour sa gentillesse et son humilité. Les détails de l’accident sont incomplets mais on en sait suffisamment aujourd’hui pour déterminer la cause de son décès. Mikala Jones et sa famille séjournaient au Awera Resort dans le North Sipora (Mentawai). Alors qu’il surfait le dimanche 9 juillet 2023 aux alentours de 9 heures 15 du matin, il aurait subi un accident de surf contre sa planche occasionnant une blessure profonde au niveau de son aine gauche. La blessure profonde faisait environ 10 centimètres de long et aurait touché l’artère fémorale, l’une des plus grosses artères de l’organisme dont la perforation peut être rapidement fatale. C’est malheureusement ce qui est arrivé à Mikala Jones qui aurait fait un choc hémorragique des suites des pertes importantes de sang. La cause probable de cette plaie profonde est une dérive de sa planche de surf. Les responsables du Awera Resort ont immédiatement contacté le Mentawai Hospital qui a envoyé une équipe pour récupérer Mikala Jones à Tuapejat Pier où il avait été transporté par bateau. Malheureusement, sa mort a été prononcée à l’hôpital.", 
        '2024-02-10', 
        '2024-02-10', 
        'https://blog.surf-prevention.com/wp-content/uploads/2023/07/mikala-jones.jpg', 
        TRUE, 
        1, 
        1
    ),
    
    (
        "Le Surf : Une Drogue ou un Traitement des Addictions ?",
        'le-surf-une-drogue-ou-un-traitement-des-addictions', 
        "Un grand débat sur le surf et les addictions auquel j’ai eu l’honneur de participer s’est tenu le Mardi 1er Octobre 2019 à l’espace Bellevue à Biarritz en ouverture du grand congrès ATHS suivie de la projection du film d’Andy Irons. Débat à revoir en intégralité ici : Le débat est intitulé : « Surf : une drogue, un chemin vers la drogue, un traitement de la drogue ? » et sera illustré par le film Kissed by God, documentaire sur la vie du triple champion du monde de surf, Andy Irons, décédé en 2010, des suites de ses addictions et victime collatérale de la crise des opiacés (+ 70 000 morts / an aux USA). Le débat réunira des surfeurs et des spécialistes des addictions (certains étant surfeurs eux-mêmes). Outre la dimension pédagogique d’un tel débat, il permettra la mise en lumière, sous l’angle des addictions, d’une réalité largement passée sous silence depuis l’avènement de l’industrie du surf. Animateur : – Franck Lacaze, ex-surfeur pro, journaliste, commentateur du circuit mondial de surf à la TV (RMC Sport), ex-rédacteur en chef de Surf Trip Magazine. Intervenants dans le débat : Marc Auriacombe : Professeur de médecine, spécialité psychiatrie & addiction à l’Université de Bordeaux et de Philadelphie, directeur de l’unité de recherche USR 3413 au CNRS. Joel Darrigues : Surfeur (témoignage personnel sur les conséquences de son addiction aux substances psychotropes). Gautier Garanx : surfeur de gros, Biggest Wave Award 2014 (19 m à Belharra ) et coach de surf. Augustin Voisin : Addictologue et surfeur. Guillaume Barucq : Docteur en médecine générale et surfeur, rédacteur du blog surf prévention. Gibus de Soultrait: journaliste, directeur de Surfer’s Journal France, co-fondateur magazine SurfSession, enseignant master de glisse (Université Bordeaux II) et surfeur. Nota Bene : Débat et film en accès libre au public, traduction simultanée anglais, espagnol et diffusé en direct sur Youtube. Le débat aura lieu sous forme de table ronde. Pour des raisons d’organisation, le film « Kissed by God » sera diffusé à 20h après le débat, et dans la même salle (30 minutes d’entracte sont prévues)", 
        '2024-02-11', 
        '2024-02-11', 
        'https://blog.surf-prevention.com/wp-content/uploads/2019/10/andy-irons-kissed-by-god.jpg', 
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
