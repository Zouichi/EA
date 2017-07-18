$(document).ready(function() //chargement des fonctions lorsque la page est prête
{	
    //pour un objet de type id on mets #nom_de_id
    //pour une catégorie d'objets d'une même classe on mets .nom_de_classe
    //pour selectionner toutes les balises on mets juste le nom de la balise
    // en JS on gère des événements ici le clique sur un bouton

    //initialisation des erreurs en caché
    $('#error_emprunt').hide();
    $('#error_enfant').hide();

    //INITIALISATION DES CHAMPS DATE
    $( "#date_naissance").datepicker({
        altField: "#date_naissance",
        closeText: 'Fermer',
        firstDay: 1 ,
        dateFormat: 'yy-mm-dd',
        prevText: '<',
        nextText: '>',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.'
    });

    $( "#date_naissance_c").datepicker({
        altField: "#date_naissance",
        closeText: 'Fermer',
        firstDay: 1 ,
        dateFormat: 'yy-mm-dd',
        prevText: 'Précédent',
        nextText: 'Suivant',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.'
    });
    $( "#date_fin_remb").datepicker({
        altField: "#date_naissance",
        closeText: 'Fermer',
        firstDay: 1 ,
        dateFormat: 'yy-mm-dd',
        prevText: 'Précédent',
        nextText: 'Suivant',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.'
    });
    $( "#date_naissance_e").datepicker({
        altField: "#date_naissance",
        closeText: 'Fermer',
        firstDay: 1 ,
        dateFormat: 'yy-mm-dd',
        prevText: 'Précédent',
        nextText: 'Suivant',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.'
    });

    /* Gestion de l'affichage de la partie enfants */
    $('.modif_enf').hide();
    $('.enfants_p').hide();
    
    $('#enfant_n').click(function()
    {
        $('.modif_enf').hide();
        $('.enfants_p').hide();
    });

    $('#enfant_o').click(function()
    {
        $('.modif_enf').show();
        $('.enfants_p').show();
    });


    /*Gestion de l'affichage de tout le formulaire
        Si pas FR ou Lux rien ne s'affiche*/
    $('#rest_etat_civil').hide();
    $('.enfants').hide();
    $('.situation_familial').hide();
    $('.rbrique_fisc').hide();
    $('.rubrique_cred').hide();
    
    $('#autres').click(function()
    {
        $('#rest_etat_civil').hide();
        $('.enfants').hide();
        $('.situation_familial').hide();
        $('.rbrique_fisc').hide();
        $('.rubrique_cred').hide();
    });
    
    $('#fr').click(function()
    {
        $('#rest_etat_civil').show();
        $('.enfants').show();
        $('.situation_familial').show();
        $('.rbrique_fisc').show();
        $('.rubrique_cred').show();
    });

    $('#lux').click(function()
    {
        $('#rest_etat_civil').show();
        $('.enfants').show();
        $('.situation_familial').show();
        $('.rbrique_fisc').show();
        $('.rubrique_cred').show();
    });

    /* Gestion de l'affichage des sections liés au fait d'avoir un conjoin */
    $('.conjoint').hide();
    $('.impot_c').hide();

    $('#celibataire').click(function()
    {
        $('.conjoint').hide(); // .hide() est une fonction qui cache
        $('.impot_c').hide();
    });

    $('#veuf').click(function()
    {
        $('.conjoint').hide();
        $('.impot_c').hide();
    });

    $('#marie').click(function()
    {
        $('.conjoint').show(); //.show() une fonction qui montre
        $('.impot_c').show();
    });

    $('#concubinage').click(function()
    {
        $('.dec_o').show();
        $('.impot_c').show();
    });

    /*Gestion de l'affichage des déductions si on déclare les impots*/
    $('#dec_o').hide();
    $('#dec_o_c').hide();

    $('#impot_dec_o').click(function()
    {
        $('#dec_o').show();
    });

    $('#impot_dec_n').click(function()
    {
        $('#dec_o').hide();
    });

    $('#impot_dec_o_c').click(function()
    {
        $('#dec_o_c').show();
    });

    $('#impot_dec_n_c').click(function()
    {
        $('#dec_o_c').hide();
    });

    
    /*Gestion de l'affichage des enfants*/
    /* Ajout de
        <label for="nom_e">Nom</label><input type="text" name="nom_e" id="nom_e">
        <label for="prenom_e">Prénom</label><input type="text" name="prenom_e" id="prenom_e">
        <label for="date_naissance_e">Date de naissance</label>
        <input type="date" name="date_naissance_e" id="date_naissance_e">
    */
    var nbre_e=1; // variable globale
    $('#add_e').click(function(){

        var lab1=$('<label for="nom_e' + nbre_e + '">');
        var inp=$('<input id="nom_e'+ nbre_e + '" name="nom_e' + nbre_e + '">');
        inp.attr('type','text');
        lab1.text('Nom');
   
        var lab2=$('<label for="prenom_e' + nbre_e + '">');
        var inp2=$('<input id="prenom_e'+ nbre_e + '" name="prenom_e' + nbre_e + '">');
        inp2.attr('type','text');
        lab2.text('Prénom');

        var lab3=$('<label for="date_naissance_e' + nbre_e + '">');
        var inp3=$('<input id="date_naissance_e'+ nbre_e + '" name="date_naissance_e' + nbre_e + '">');
        inp3.attr('type','date');
        lab3.text('Date de naissance');

        var div=$('<div id="enfan_'+ nbre_e +'">');
        $('.enfants_p').append(div);
        $(div).append('<hr>');
        $(div).append(lab1);
        $(div).append(inp);    //.append() ajoute à la suite de l'objet selectionner ici div
        $(div).append(lab2);
        $(div).append(inp2);
        $(div).append(lab3);
        $(div).append(inp3);
        console.log(nbre_e);
        $('#date_naissance_e'+ nbre_e).datepicker({
            altField: "#date_naissance"+ nbre_e,
            closeText: 'Fermer',
            firstDay: 1 ,
            dateFormat: 'yy-mm-dd',
            prevText: 'Précédent',
            nextText: 'Suivant',
            currentText: 'Aujourd\'hui',
            monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
            dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
            dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
            dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
            weekHeader: 'Sem.'
        });

        $('#nom_e' + nbre_e).focus();
        nbre_e++;
		$('#nb_enfant').attr('value',nbre_e);
    });
    
    $('#less_e').click(function(){
        nbre_e--;
        if(nbre_e==0)
        {
            nbre_e=1;
            $('html,body').animate({scrollTop: $('#nom_e').offset().top},'fast');
            $('#error_enfant').text('Impossible de supprimer');
            $('#error_enfant').fadeIn().delay(900).fadeOut();
        }
        else
        {
			$('#nb_enfant').attr('value',nbre_e);
            console.log(nbre_e);
            $('#enfan_' + nbre_e).remove();
        }
    });
    

    /* Gestion de l'affichage des crédits*/
    /*
    <div class="emprunt">
        <p>
            <label for="nature_emprunt">Nature emprunt</label><input type="text" name="nature_emprunt" id="nature_emprunt">
            <label for="montant_mens">Montant des mensualités</label><input type="number" name="montant_mens" id="montant_mens">
        </p>
        <p>
            <label for="date_fin_remb">Date fin de remboursement</label><input type="date" name="date_fin_remb" id="date_fin_remb">
            <label for="tx_cred">Taux de crédit</label><input type="number" name="tx_cred" id="tx_cred"> %
        </p>
        <p>
            <label for="capital_rest">Capital restant dû</label><input type="number" name="capital_rest" id="capital_rest">
            <label for="capital_emp">Capital emprunté</label><input type="text" name="capital_emp" id="capital_emp">
        </p>
    </div>*/

    var nbre_c=1; // variable globale
    $('#add_c').click(function(){

        if(nbre_c==5)
        {
            $('html,body').animate({scrollTop: $('#nature_emprunt_4').offset().top},'fast');
            $('#error_emprunt').text('Impossible d\'ajouter plus de crédits !');
            $('#error_emprunt').fadeIn().delay(900).fadeOut();
        }
        else
        {
            var div=$('<div id="credit_' + nbre_c + '">');
            $('.emprunt').append(div);
            $(div).append('<hr>');

            var lab1=$('<label for="nature_emprunt' + nbre_c + '">');
            var inp1=$('<input id="nature_emprunt_' + nbre_c + '" name="nature_emprunt_' + nbre_c + '">');
            lab1.text('Nature emprunt');
            inp1.attr('type','text');
            $(div).append(lab1);
            $(div).append(inp1);

            var lab2=$('<label for="montant_mens' + nbre_c + '">');
            var inp2=$('<input id="montant_mens' + nbre_c + '" name="montant_mens' + nbre_c + '">');
            lab2.text('Montant des mensualités');
            inp2.attr('type','number');
            $(div).append(lab2);
            $(div).append(inp2);

            var lab3=$('<label for="date_fin_remb' + nbre_c + '">');
            var inp3=$('<input id="date_fin_remb' + nbre_c + '" name="date_fin_remb' + nbre_c + '">');
            lab3.text('Date fin de remboursement');
            inp3.attr('type','date');
            $(div).append(lab3);
            $(div).append(inp3);
            $('#date_fin_remb' + nbre_c).datepicker({
                altField: "#date_fin_remb" + nbre_c,
                closeText: 'Fermer',
                firstDay: 1 ,
                dateFormat: 'yy-mm-dd',
                prevText: 'Précédent',
                nextText: 'Suivant',
                currentText: 'Aujourd\'hui',
                monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
                dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
                dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                weekHeader: 'Sem.'
            });
            

            var lab4=$('<label for="tx_cred' + nbre_c + '">');
            var inp4=$('<input id="tx_cred' + nbre_c + '" name="tx_cred' + nbre_c + '">');
            lab4.text('Taux de crédit');
            inp4.attr('type','number');
            $(div).append(lab4);
            $(div).append(inp4);
            $(div).append('  %')
            $(div).append('<br><br>')

            var lab5=$('<label for="capital_rest' + nbre_c + '">');
            var inp5=$('<input id="capital_rest' + nbre_c + '" name="capital_rest' + nbre_c + '">');
            lab5.text('Capital restant dû');
            inp5.attr('type','number');
            $(div).append(lab5);
            $(div).append(inp5);

            var lab6=$('<label for="capital_emp' + nbre_c + '">');
            var inp6=$('<input id="capital_emp' + nbre_c + '" name="capital_emp' + nbre_c + '">');
            lab6.text('Capital emprunté');
            inp6.attr('type','number');
            $(div).append(lab6);
            $(div).append(inp6);

            $('html,body').animate({scrollTop: $('#nature_emprunt_' + nbre_c).offset().top},'fast');

            nbre_c++;
			$('#nb_cred').attr('value',nbre_c);
        }    
    });

    $('#less_c').click(function(){
        nbre_c--;
        if(nbre_c==0)
        {
            nbre_c=1;
            $('html,body').animate({scrollTop: $('#nature_emprunt').offset().top},'fast');
            $('#error_emprunt').text('Impossible de Supprimer !');
            $('#error_emprunt').fadeIn().delay(900).fadeOut();

        }
        else
        {
			$('#nb_cred').attr('value',nbre_c);
            $('#credit_' + nbre_c).remove();
            console.log(nbre_c);
            var prov=nbre_c-1;
            if(prov>0)
            {   
                
                $('html,body').animate({scrollTop: $('#nature_emprunt_' + prov).offset().top},'fast');
            }
            else
            {
                $('html,body').animate({scrollTop: $('#nature_emprunt').offset().top},'fast')
            }
        }
       
    });
    
    
$('.ui_icon').attr('color','black');
    
    
});