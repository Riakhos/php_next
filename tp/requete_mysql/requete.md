# File with heading

1. GET -> Récupérer toutes les agences

    SELECT `agence`.* FROM `agence`;

2. POST -> Ajouter une nouvelle agence

    INSERT INTO `agence`(`titre`, `adresse`, `ville`, `cp`, `description`, `photo`) VALUES ('Peugeot','117 Bd Jean Allemane','Argenteuil','95100','Propose des services de réparation','(https://lh3.googleusercontent.com/p/AF1QipMA1gLYTkEBxqUOHg_WyjGTcCqhWhkpw_MX1BpX=s184-w184-h130-n-k-no)');

3. PUT -> Modifier une agence

    UPDATE `agence` SET `description` = 'Propose des services de réparation et d\'entretien', `photo` = 'https://lh3.googleusercontent.com/p/AF1QipMA1gLYTkEBxqUOHg_WyjGTcCqhWhkpw_MX1BpX=s184-w184-h130-n-k-no' WHERE `id` = 5;

4. DELETE -> Supprimer une agence

    DELETE FROM `agence` WHERE 5;

5. GET -> Récupérer une agence par son ID

    SELECT * FROM `agence` WHERE `id` = 1;

6. POST -> Ajouter un véhicule

    INSERT INTO `vehicule`(`agence_id`, `marque`, `modele`, `description`, `photo`, `prix_journalier`, `titre`) VALUES ('5','Peugeot','5008','[value-4]','https://www.aramisauto.com/cdn-cgi/image/format=auto,quality=75,width=1616/https://storage.googleapis.com/aramis_vehicles/production/betamodels/i_6053855ac3067.jpg','33999','1.2 Puretech 130 EAT8 GT');

7. GET -> Récupérer tous les véhicules

    SELECT * FROM `vehicule`;

8. GET -> Récupérer les véhicules par agence

    SELECT * FROM `vehicule` WHERE agence_id;

9. GET -> Récupérer un véhicule par son ID

    SELECT * FROM `vehicule` WHERE `id`= 3;

10. PUT -> Modifier un véhicule

    UPDATE `vehicule` SET `id`='[value-1]',`agence_id`='[value-2]',`marque`='[value-3]',`modele`='[value-4]',`description`='[value-5]',`photo`='[value-6]',`prix_journalier`='[value-7]',`titre`='[value-8]' WHERE 1;

11. DELETE -> Supprimer un véhicule

    DELETE FROM `vehicule` WHERE  id = 1;

12. POST -> Ajouter un membre

    INSERT INTO `membre` VALUES (null, `Riakhos`, `cool`, `Bonnegent`, `Richard`, `email @email.com`, `h`, `true`, now());

13. Effectuer une reservation de véhicule

    INSERT INTO `commande`(`id`, `id_user_id`, `id_vehicule_id`, `id_agence_id`, `date_heure_depart`, `date_heure_fin`, `prix_total`, `date_enregistrement`) VALUES (null,'1','3','2', now(),'2024-10-12 15:43:11 000000','100000000', now());

14. récupérez toutes les reservations

    SELECT * FROM `commande`;

15. récupérez toutes les reservations d'un membre

    SELECT * FROM `commande` WHERE id_user_id;

16. Récupère des informations depuis les tables commande et membre à l'aide d'une jointure

    Resultat attendu =>

    | commande_id | membre_pseudo | date_heure_depart    | date_heure_fin        | prix_total |
    |-------------|---------------|----------------------|-----------------------|------------|
    | 1           | Francis       | 2024-10-10 10:00:00  | 2024-10-15 10:00:00   | 2445       |

    SELECT `commande`.`id` as `commande_id`, `membre`.`pseudo` as `membre_pseudo`, `date_heure_depart`, `date_heure_fin`, `prix_total` FROM `commande` JOIN `membre` ON `id_user_id` = `membre`.`id`;

17. Récupérer la liste des véhicules avec toutes les informations sur l'agence.

    Resultat attendu =>

    SELECT `vehicule`.*, `agence`.* FROM `vehicule` JOIN `agence` ON `vehicule` .`agence_id` = `agence`.`id`;

    SELECT `vehicule`.`id` as `vehicule_id`, `vehicule`.`marque`, `vehicule`.`modele`, `vehicule`.`description`, `vehicule`.`photo` as `vehicule_photo`, `vehicule`.`prix_journalier`, `vehicule`.`titre` as `vehicule_titre`, `agence`.`id` as `agence_id`, `agence`.`adresse` AS `agence_adresse`, `agence`.`ville` AS `agence_code_postal`, `agence`.`description` AS `agence_description`,`agence`.`photo` AS `agence_photo` FROM `vehicule` JOIN `agence` ON `vehicule` .`agence_id` = `agence`.`id`;
