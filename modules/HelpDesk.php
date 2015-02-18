<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * 
 * Greek Translation Project initiated : 13 February 2014
 * Repository : https://github.com/cerebrux/vtiger6-greek-translation
 * Author(s):
 *  -- Salih Emin (http://www.linkedin.com/in/salihemin)
 *  -- Mathias Stavrou (http://mstavrou.com/)
 *  -- Konstantinos Paraskeuopoulos (https://www.linkedin.com/in/kparaskevopoulos)
 *  -- Dimitris Anagnostou
 *  -- More: https://github.com/cerebrux/vtiger6-greek-translation/graphs/contributors
 *************************************************************************************/
$languageStrings = array(
	// Basic Strings
	'HelpDesk' => 'Αιτήματα',
	'SINGLE_HelpDesk' => 'Αίτημα',
	'LBL_ADD_RECORD' => 'Προσθήκη Αιτήματος',
	'LBL_RECORDS_LIST' => 'Λίστα Αιτημάτων',

	// Blocks
	'LBL_TICKET_INFORMATION' => 'Πληροφορίες Αιτημάτων',
	'LBL_TICKET_RESOLUTION' => 'Επίλυση Αιτήματος',

	//Field Labels
	'Ticket No' => 'Αρ. Αιτήματος',
	'Severity' => 'Σοβαρότητα',
	'Update History' => 'Ενημέρωση Ιστορικού',
	'Hours' => 'Ώρες',
	'Days' => 'Ημέρες',
	'Title' => 'Τίτλος',
	'Solution' => 'Λύση',
	'From Portal' => 'Από την Δικτυακή Πύλη',
	'Related To' => 'Όνομα Οργανισμού',
	'Contact Name' => 'Όνομα Επαφής',
	//Added for existing picklist entries

	'Big Problem'=>'Μεγάλο Πρόβλημα',
	'Small Problem'=>'Μικρό Πρόβλημα',
	'Other Problem'=>'Άλλο είδος Προβλήματος',

	'Normal'=>'Κανονικό',
	'High'=>'Υψηλή',
	'Urgent'=>'Επείγον',

	'Minor'=>'Ελάσσων',
	'Major'=>'Μείζον',
	'Feature'=>'Δυνατότητα',
	'Critical'=>'Κρίσιμο',

	'Open'=>'Ενεργό',
	'Wait For Response'=>'Αναμονή για Απάντηση',
	'Closed'=>'Έκλεισε',
	'LBL_STATUS' => 'Κατάσταση Αιτήματος',
	'LBL_SEVERITY' => 'Σοβαρότητα',
	//DetailView Actions
	'LBL_CONVERT_FAQ' => 'Μετατροπή σε FAQ',
	'LBL_RELATED_TO' => 'Σχετίζεται με',

	//added to support i18n in ticket mails
	'Ticket ID'=>'Κωδ. Αιτήματος',
	'Hi' => 'Γεια σας',
	'Dear'=> 'Αγαπητέ/η',
	'LBL_PORTAL_BODY_MAILINFO'=> 'Το Αίτημα σας είναι',
	'LBL_DETAIL' => 'οι λεπτομέρειες είναι :',
	'LBL_REGARDS'=> 'με φιλικούς χαιρετισμούς',
	'LBL_TEAM'=> 'Τμήμα Υποστήριξης',
	'LBL_TICKET_DETAILS' => 'Λεπτομέρειες Αιτήματος',
	'LBL_SUBJECT' => 'Θέμα : ',
	'created' => 'συντάχθηκε',
	'replied' => 'απαντήθηκε',
	'reply'=>'Υπάρχει απάντηση',
	'customer_portal' => 'στην "Δικτυακή Πύλη Πελάτη" του VTiger.',
	'link' => 'Μπορείτε να χρησιμοποιήσετε το παρακάτω link για να δείτε τις απαντήσεις:',
	'Thanks' => 'Ευχαριστούμε',
	'Support_team' => 'Ομάδα Υποστήριξης',
	'The comments are' => 'Τα Σχόλια είναι',
	'Ticket Title' => 'Τίτλος Αιτήματος',
	'Re' => 'Απάντηση :',

	//This label for customerportal.
	'LBL_STATUS_CLOSED' =>'Closed',//Do not convert this label. This is used to check the status. If the status 'Closed' is changed in vtigerCRM server side then you have to change in customerportal language file also.
	'LBL_STATUS_UPDATE' => 'Η Κατάσταση Αιτήματος ενημερώθηκε ως',
	'LBL_COULDNOT_CLOSED' => 'Το Αίτημα ήταν αδύνατον να κλειστεί',
	'LBL_CUSTOMER_COMMENTS' => 'Η Πελάτης παρείχε τις παρακάτω επιπλέον πληροφορίες στην απάντησή σας:',
	'LBL_RESPOND'=> 'Παρακαλούμε ανταποκριθείτε στο παραπάνω αίτημα, το νωρίτερο δυνατόν.',
	'LBL_SUPPORT_ADMIN' => 'Διαχειριστής Υποστήριξης',
	'LBL_RESPONDTO_TICKETID' =>'Ανταποκριθείτε στον Κωδ. Αιτήματος',
	'LBL_RESPONSE_TO_TICKET_NUMBER' =>'Ανταπόκριση στον Κωδ. Αιτήματος',
	'LBL_TICKET_NUMBER' => 'Αρ. Αιτήματος',
	'LBL_CUSTOMER_PORTAL' => 'στην Δικτυακή Πύλη Πελάτη - ΕΠΕΙΓΟΝ',
	'LBL_LOGIN_DETAILS' => 'Τα παρακάτω είναι τα στοιχεία σύνδεσής σας στην Δικτυακή Πύλη Πελάτη:',
	'LBL_MAIL_COULDNOT_SENT' =>'Δεν ήταν δυνατή η αποστολή του Mail',
	'LBL_USERNAME' => 'Όνομα Χρήστη :',
	'LBL_PASSWORD' => 'Συνθηματικό :',
	'LBL_SUBJECT_PORTAL_LOGIN_DETAILS' => 'Σχετικά με τα στοιχεία σύνδεσής σας στην Δικτυακή Πύλη Πελάτη',
	'LBL_GIVE_MAILID' => 'Παρακαλώ δώστε το email χρήστη σας',
	'LBL_CHECK_MAILID' => 'Παρακαλώ ελέγξτε το email χρήστη για την Δικτυακή Πύλη Πελάτη',
	'LBL_LOGIN_REVOKED' => 'Η λογαριασμός σας έχει ανακληθεί. Παρακαλώ επικοινωνήστε με τον Διαχειριστή.',
	'LBL_MAIL_SENT' => 'Σας έχει σταλεί Email τα στοιχεία σύνδεσής σας στην Δικτυακή Πύλη Πελάτη',
	'LBL_ALTBODY' => 'Αυτό είναι το κυρίως σώμα απλού κειμένου για μη-HTML εφαρμογές email',
	'HelpDesk ID' => 'Κωδ. Αιτήματος',
);