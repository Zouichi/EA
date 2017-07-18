<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/jquery-ui.js"></script>
    <script type="text/javascript" src="script/script.js"></script>
    <link rel="stylesheet" href="script/jquery-ui.css">
    <link rel="stylesheet" href="script/jquery-ui.structure.css">
    <link rel="stylesheet" href="script/jquery-ui.theme.css">
    <link rel="stylesheet" href="script/formulaire.css">
    <title>Formulaire</title>
</head>

<body>
    <form action="index.php" method="post">
        <fieldset class="etat_civil">
            <legend>Etat Civil</legend>
            Nous sommes le
            <?php echo date("d/m/Y"); ?>
            <br>
            <p>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom">
            </p>
            <p>
                <label for="age">Age :</label>
                <input type="number" name="age" id="age">
                <label for="date_ naissance">Date de naissance</label>
                <input type="date" name="date_naissance" id="date_naissance">
            </p>
            <p>
                <label for="nationalite">Nationalité</label>
                <br>
                <input type="radio" name="situation_nationalite" value="fr" id="fr">
                <label for="situation_nationalite">Français</label>
                <input type="radio" name="situation_nationalite" value="lux" id="lux">
                <label for="situation_nationalite">Luxembourgeois</label>
                <input type="radio" name="situation_nationalite" value="autres" id="autres">
                <label for="situation_nationalite">Autres</label>
            </p>
            <div id="rest_etat_civil">
                <p>
                    <label for="Résidence fiscale">Résidence Fiscale</label>
                    <br/>
                    <textarea cols="20" name="adresse" id="adresse"></textarea>
                    <br>
                    <label for="cp">Code Postal</label>
                    <input type="text" name="cp" id="cp">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville">
                </p>
                <p>
                    <label for="mail">Adresse mail</label>
                    <input type="email" name="mail" id="mail">
                    <label for="tel_fixe">Téléphone fixe</label>
                    <input type="text" name="tel_fixe" id="tel_fixe">
                    <label for="gsm">GSM</label>
                    <input type="text" name="gsm" id="gsm">
                </p>
                <p>
                    <label for="profession">Profession</label>
                    <input type="text" name="profession" id="profession">
                    <label for="revenu">Revenus</label>
                    <input type="number" name="revenu" id="revenu">
                </p>
            </div>
            <fieldset class="situation_familial">
                <legend>Situation Familiale</legend>
                <input type="radio" name="situation_famille" value="celibataire" id="celibataire">
                <label for="">Celibataire</label>
                <input type="radio" name="situation_famille" value="marie" id="marie">
                <label for="">Marié</label>
                <input type="radio" name="situation_famille" value="concubinage" id="concubinage">
                <label for="">Concubinage</label>
                <input type="radio" name="situation_famille" value="veuf" id="veuf">
                <label for="">Veuf</label>
            </fieldset>
            <fieldset class="conjoint">
                <legend>Conjoint</legend>
                <p>
                    <label for="nom_c">Nom</label>
                    <input type="text" name="nom_c" id="nom_c">
                    <label for="prenom_c">Prénom</label>
                    <input type="text" name="prenom_c" id="prenom_c">
                </p>
                <p>
                    <label for="age_c">Age</label>
                    <input type="text" name="age_c" id="age_c">
                    <label for="date_naissance_c">Date de naissance</label>
                    <input type="date" name="date_naissance_c" id="date_naissance_c">
                </p>
                <p>
                    <label for="profession_c">Profession</label>
                    <input type="text" name="profession_c" id="profession_c">
                    <label for="revenu_c">Revenus</label>
                    <input type="number" name="revenu_c" id="revenu_c">&nbsp;€
                </p>
            </fieldset>
            <fieldset class="enfants">
                <input type="hidden" name="nb_enfant" id="nb_enfant" value=1>
                <legend>Enfants</legend>
                <p>
                    <input type="radio" name="enfant" value="oui" id="enfant_o">
                    <label for="enfant_o">Oui</label>
                    <input type="radio" name="enfant" value="non" id="enfant_n">
                    <label for="enfant_n">Non</label>
                </p>
                <p class="modif_enf">
                    <a href="#" id="add_e"><img src="images/plus.png" alt="Ajout"></a>
                    <a href="#" id="less_e"><img src="images/moins.png" alt="Suppression"></a>
                </p>
                <div id="error_enfant"></div>
                <p class="enfants_p">
                    <label for="nom_e">Nom</label>
                    <input type="text" name="nom_e" id="nom_e">
                    <label for="prenom_e">Prénom</label>
                    <input type="text" name="prenom_e" id="prenom_e">
                    <label for="date_naissance_e">Date de naissance</label>
                    <input type="date" name="date_naissance_e" id="date_naissance_e">
                </p>
            </fieldset>
        </fieldset>
        <fieldset class="rbrique_fisc">
            <legend>Rubrique Fiscale</legend>
            <p>
                <label for="montant_impot">Montants Impots</label>
                <input type="number" name="montant_impot" id="montant_impot"> &nbsp;€
            </p>
            <fieldset>
                <legend>Déclaration d'impôts ?</legend>
                <p>
                    <input type="radio" name="impot_dec" value="oui" id="impot_dec_o">
                    <label for="impot_dec_o">Oui</label>
                    <input type="radio" name="impot_dec" value="non" id="impot_dec_n">
                    <label for="impot_dec_n">Non</label>
                </p>
                <p id="dec_o">
                    <label for="deduction">Déductions</label>
                    <br>
                    <input type="checkbox" name="deduction" id="el" value="ELC">ELC
                    <input type="checkbox" name="deduction" id="a110" value="A110">A110
                    <input type="checkbox" name="deduction" id="a111" value="A111">A111
                    <input type="checkbox" name="deduction" id="111b" value="111B">111B
                    <input type="checkbox" name="deduction" id="srd" value="SRD">SRD
                </p>
                <p>
                    <label id="l_interesse" for="interesse">Etes-vous intéressé pour le faire ?</label>
                    <input type="radio" name="interesse" value="oui" id="interesse_o">
                    <label for="interesse_o">Oui</label>
                    <input type="radio" name="interesse" value="non" id="interesse_n">
                    <label for="interesse_n">Non</label>
                </p>
            </fieldset>
            <fieldset class="impot_c">
                <legend>Déclaration d'impôts conjoint ?</legend>
                <p>
                    <input type="radio" name="impot_dec_c" value="oui" id="impot_dec_o_c">
                    <label for="impot_dec_o_c">Oui</label>
                    <input type="radio" name="impot_dec_c" value="non" id="impot_dec_n_c">
                    <label for="impot_dec_n_c">Non</label>
                </p>
                <p id="dec_o_c">
                    <label for="deduction_c">Déductions conjoint</label>
                    <br/>
                    <input type="checkbox" name="deduction_c" id="el_c" value="ELC">ELC
                    <input type="checkbox" name="deduction_c" id="a110_c" value="A110">A110
                    <input type="checkbox" name="deduction_c" id="a111_c" value="A111">A111
                    <input type="checkbox" name="deduction_c" id="111b_c" value="111B">111B
                    <input type="checkbox" name="deduction_c" id="srd_c" value="SRD">SRD
                </p>
                <p>
                    <label id="l_interesse_c" for="interesse_c">Etes-vous intéressé pour le faire ?</label>
                    <input type="radio" name="interesse_c" value="oui" id="interesse_o_c">
                    <label for="interesse_o_c">Oui</label>
                    <input type="radio" name="interesse_c" value="non" id="interesse_n_c">
                    <label for="interesse_n_c">Non</label>
                </p>
            </fieldset>
        </fieldset>
        <fieldset class="rubrique_cred">
            <legend>Rubrique credits</legend>
            <input type="hidden" name="nb_cred" id="nb_cred" value=1>
            <p class="modif_cred">
                <a href="#" id="add_c"><img src="images/plus.png" alt="Ajout"></a>
                <a href="#" id="less_c"><img src="images/moins.png" alt="Suppression"></a>
            </p>
            <div class="emprunt">
                <div id="error_emprunt"> </div>
                <p>
                    <label for="nature_emprunt">Nature emprunt</label>
                    <input type="text" name="nature_emprunt" id="nature_emprunt">
                    <label for="montant_mens">Montant des mensualités</label>
                    <input type="number" name="montant_mens" id="montant_mens">
                </p>
                <p>
                    <label for="date_fin_remb">Date fin de remboursement</label>
                    <input type="date" name="date_fin_remb" id="date_fin_remb">
                    <label for="tx_cred">Taux de crédit</label>
                    <input type="number" name="tx_cred" id="tx_cred">&nbsp;%
                </p>
                <p>
                    <label for="capital_rest">Capital restant dû</label>
                    <input type="number" name="capital_rest" id="capital_rest">
                    <label for="capital_emp">Capital emprunté</label>
                    <input type="text" name="capital_emp" id="capital_emp">
                </p>
            </div>
        </fieldset>
        <!-- Partie ajoutée par Rémi -->
        <fieldset class="pdv_patrimonial">
            <!-- CSS A FAIRE -->
            <legend>Point de vue patrimonial</legend>
            <label>Faites-vous compte commun ou séparé ?</label>
            <p>
                <input type="radio" name="compte_commun" value="commun" id="compte_commun_o">
                <label for="compte_commun_o">Commun</label>
                <input type="radio" name="compte_commun" value="separe" id="compte_commun_n">
                <label for="compte_commun_n">Séparé</label>
            </p>
            <table class="pdts_fr">
                <tr>
                    <th>Produits français</th>
                </tr>
                <tr>
                    <th>Monsieur</th>
                    <th></th>
                    <th>Madame</th>
                    <th></th>
                </tr>
                <tr>
                    <th>/mois</th>
                    <th>Capitaux</th>
                    <th>/mois</th>
                    <th>Capitaux</th>
                </tr>
                <tr>
                    <td>Livret A (22.950) 0,75%</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>LDD (12.000) 0,75%</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>LEP (7.700) 1,25%</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>PEL (61.200) depuis 2003 -> 2,50%
                        <br /> A compter de février 2015 -> 2%</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>CEL (15.300) 0,50%</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>PEP</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>PEA (132.000)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Actions Sicav</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Epargne Enfants</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Livret Jeunes</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Autres</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="pdts_lux">
                <tr>
                    <th>Produits luxembourgeois</th>
                </tr>
                <tr>
                    <th>Monsieur</th>
                    <th></th>
                    <th>Madame</th>
                    <th></th>
                </tr>
                <tr>
                    <th>Risques déjà assurés</th>
                    <th>Oui/Non</th>
                    <th>Compagnie</th>
                    <th>Prime/an</th>
                    <th>Echéances</th>
                </tr>
                <tr>
                    <td>Epargne pension / 111 bis
                        <br /> (prévoyance vieillesse)</td>
                    <td>
                        <select class="epargne_pension">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Vie - Epargne</td>
                    <td>
                        <select class="vie_epargne">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Décès - Solde restant dû</td>
                    <td>
                        <select class="deces_solde_restant">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Décès - Temporaire</td>
                    <td>
                        <select class="deces_temporaire">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Epargne pour jeune</td>
                    <td>
                        <select class="epargne_jeune">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Epargne logement</td>
                    <td>
                        <select class="epargne_logement">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Invalidité</td>
                    <td>
                        <select class="invalidite">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Placements</td>
                    <td>
                        <select class="placements">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Actifs financiers
                        <br /> (liquidités, actions, obligations...)</td>
                    <td>
                        <select class="actifs_financiers">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Comptes à termes</td>
                    <td>
                        <select class="comptes_termes">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Prêt hypothécaire</td>
                    <td>
                        <select class="pret_hypothecaire">
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </fieldset>
        <fieldset class="projets">
        <legend>Projets</legend>
        <input type="checkbox" name="projet_residence" id="res_princ" value="Résidence principale">Résidence principale
        <input type="checkbox" name="projet_locatif" id="locatif" value="Locatif">Locatif
        <input type="checkbox" name="projet_reduction" id="reduc_impots" value="Réduction d'impôts">Réduction d'impôts
        <input type="checkbox" name="projet_retraite" id="retraite" value="Retraite">Retraite
        <input type="checkbox" name="projet_succession" id="succession" value="Succession">Succession
        <input type="checkbox" name="projet_etudes_enfants" id="etudes_enfants" value="Etudes des enfants">Etudes des enfants
        <input type="checkbox" name="projet_maintien_revenus" id="maintien_revenus" value="Maintien des revenus">Maintien des revenus
        <input type="checkbox" name="projet_rendement" id="etudes_rendement" value="Rendement">Rendement
        <input type="checkbox" name="projet_protec_famille" id="protec_famille" value="Protection familiale">Protection familiale
        </fieldset>
        <fieldset class="charges_incompressibles">
            <legend>Charges incompressibles</legend>
            <table class="charges_mensuelles">
    <tr>
        <th>Charges mensuelles</th>
    </tr>
    <tr>
        <td>Loyer</td>
        <td></td>
    </tr>
    <tr>
        <td>Electricité</td>
        <td></td>
    </tr>
    <tr>
        <td>Gaz</td>
        <td></td>
    </tr>
    <tr>
        <td>Eau</td>
        <td></td>
    </tr>
    <tr>
        <td>Alimentation</td>
        <td></td>
    </tr>
    <tr>
        <td>Scolarité</td>
        <td></td>
    </tr>
    <tr>
        <td>Internet / Téléphone fixe</td>
        <td></td>
    </tr>
    <tr>
        <td>Téléphone portable</td>
        <td></td>
    </tr>
    <tr>
        <td>Chauffage</td>
        <td></td>
    </tr>
    <tr>
        <td>Prévoyance</td>
        <td></td>
    </tr>
    <tr>
        <td>Mutuelle</td>
        <td></td>
    </tr>
    <tr>
        <td>Crédits personnels</td>
        <td></td>
    </tr>
    <tr>
        <td>Loisirs</td>
        <td></td>
    </tr>
    <tr>
        <td>Essence</td>
        <td></td>
    </tr>
    <tr>
        <td>Cigarettes</td>
        <td></td>
    </tr>
    <tr>
        <td>Télévision</td>
        <td></td>
    </tr>
    <tr>
        <td>Autres</td>
        <td></td>
    </tr>
    <tr>
        <th>TOTAL</th>
        <th></th>
    </tr>
</table>
<table class="charges_annuelles">
    <tr>
        <th>Charges annuelles</th>
    </tr>
    <tr>
        <td>Impôts sur le revenu</td>
        <td></td>
    </tr>
    <tr>
        <td>Taxe foncière</td>
        <td></td>
    </tr>
    <tr>
        <td>Taxe d'habitation</td>
        <td></td>
    </tr>
    <tr>
        <td>Assurance habitation</td>
        <td></td>
    </tr>
    <tr>
        <td>Assurance automobile</td>
        <td></td>
    </tr>
    <tr>
        <td>Autres assurances</td>
        <td></td>
    </tr>
    <tr>
        <td>Ordures ménagères</td>
        <td></td>
    </tr>
    <tr>
        <td>Autres</td>
        <td></td>
    </tr>
    <tr>
        <td>Autres</td>
        <td></td>
    </tr>
</table>
<table class="entrees_sorties">
    <tr>
        <th>Entrées</th>
        <th>Sorties</th>
        <th>Parties disponibles</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<table class="reserve_conso_epargne">
    <tr>
        <th>60% réservé à la consommation</th>
        <th>40% réservé à l'épargne</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>
        </fieldset>
        <fieldset class="priorites">
            <legend>Priorités</legend>
            <p>
                <label for="priorite_1">1 :</label>
                <input type="text" name="priorite_1" id="priorite_1">
                <label for="priorite_2">2 :</label>
                <input type="text" name="priorite_2" id="priorite_2">
                <label for="priorite_3">3 :</label>
                <input type="text" name="priorite_3" id="priorite_3">
                <label for="priorite_4">4 :</label>
                <input type="text" name="priorite_4" id="priorite_4">
                <label for="priorite_5">5 :</label>
                <input type="text" name="priorite_5" id="priorite_5">
                <label for="priorite_6">6 :</label>
                <input type="text" name="priorite_6" id="priorite_6">
                <label for="priorite_7">7 :</label>
                <input type="text" name="priorite_7" id="priorite_7">
                <label for="priorite_8">8 :</label>
                <input type="text" name="priorite_8" id="priorite_8">
                <label for="priorite_9">9 :</label>
                <input type="text" name="priorite_9" id="priorite_9">
            </p>
        </fieldset>
        <fieldset class="synthese">
            <legend>Synthèse du bilan</legend>
            <textarea cols="20" name="synthese_bilan" id="synthese_bilan"></textarea>
            <table class="date_signatures">
                <tr>
                    <th>Date</th>
                    <th>Signature Monsieur</th>
                    <th>Signature Madame</th>
                    <th>Signature du conseiller</th>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                    <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
        </fieldset>
        <fieldset class="recommandations">
            <legend>Recommandations</legend>
            <p>
                <label for="Recommandation nom 1">Nom :</label>
                <input type="text" name="recommandation_nom_1" id="recommandation_nom_1">
                <label for="recommandation_prenom">Prénom :</label>
                <input type="text" name="recommandation_prenom_1" id="recommandation_prenom_1">
                <label for="recommandation_age_1">Age :</label>
                <input type="number" name="recommandation_age_1" id="recommandation_age_1">
                <label for="Adresse recommandation 1">Adresse</label>
                    <br/>
                    <textarea cols="20" name="adresse_recommandation_1" id="adresse_recommandation_1"></textarea>
                    <br>
                    <label for="cp_recommandation_1">Code Postal</label>
                    <input type="text" name="cp_recommandation_1" id="cp_recommandation_1">
                    <label for="ville_recommandation_1">Ville</label>
                    <input type="text" name="ville_recommandation_1" id="ville_recommandation_1">
            </p>
            <!-- REPRENDRE ICI -->
        </fieldset>
        <!-- /Partie ajoutée par Rémi -->
        <div class="validation">
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>

</html>