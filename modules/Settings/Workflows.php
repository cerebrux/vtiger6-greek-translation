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
	//Basic Field Names
        'LBL_NEW'                      => 'Νέα', // TODO: Review
	'LBL_WORKFLOW'                 => 'Ροές Ενεργειών', // TODO: Review
	'LBL_CREATING_WORKFLOW'        => 'Δημιουργία Ροών Ενεργειών', // TODO: Review
	'LBL_NEXT'                     => 'Επόμενο', // TODO: Review
	
	//Edit view
	'LBL_STEP_1' => 'Βήμα 1', // TODO: Review
	'LBL_ENTER_BASIC_DETAILS_OF_THE_WORKFLOW' => 'Εισάγετε βασικά στοιχεία της ροής εργασίας', // TODO: Review
	'LBL_SPECIFY_WHEN_TO_EXECUTE'  => 'Καθορίστε πότε να εκτελεστεί αυτή η ροή ενεργειών', // TODO: Review
	'ON_FIRST_SAVE'                => 'Μόνο Κατά την Πρώτη Αποθήκευση', // TODO: Review
	'ONCE'                         => 'Μέχρι την πρώτη φορά που η συνθήκη θα είναι αληθής', // TODO: Review
	'ON_EVERY_SAVE'                => 'Κάθε φορά που η εγγραφή αποθηκεύεται', // TODO: Review
	'ON_MODIFY'                    => 'Κάθε φορά που η εγγραφή τροποποιείται', // TODO: Review
	'MANUAL'                       => 'Σύστημα', // TODO: Review
	'SCHEDULE_WORKFLOW'            => 'Προγραμματισμένη Ροή Ενεργειών', // TODO: Review
	'ADD_CONDITIONS'               => 'Προσθήκη Προϋποθέσεις', // TODO: Review
	'ADD_TASKS'                    => 'Προσθήκη Εργασίες', // TODO: Review

	//Step2 edit view
        'LBL_EXPRESSION'               => 'Έκφραση', // TODO: Review
	'LBL_FIELD_NAME'               => 'Πεδίο', // TODO: Review
	'LBL_SET_VALUE'                => 'Ορισμός Τιμής', // TODO: Review
	'LBL_USE_FIELD'                => 'Πεδίο σε Χρήση', // TODO: Review
	'LBL_USE_FUNCTION'             => 'Χρησιμοποιήστε Λειτουργία', // TODO: Review
	'LBL_RAW_TEXT'                 => 'Πρώτο κείμενο' , // TODO: Review
	'LBL_ENABLE_TO_CREATE_FILTERS' => 'Επιτρέπουν να δημιουργήσετε φίλτρα'    , // TODO: Review
	'LBL_CREATED_IN_OLD_LOOK_CANNOT_BE_EDITED' => 'Αυτή η ροή εργασίας δημιουργήθηκε σε παλαιότερη εμφάνιση. Όροι δημιουργήθηκαν σε παλαιότερες ματιά δεν μπορεί να επεξεργαστεί. Μπορείτε να επιλέξετε να αναδημιουργήσει τις προϋποθέσεις, ή χρησιμοποιήστε τις υπάρχουσες συνθήκες, χωρίς να αλλάζει τους.', // TODO: Review
	'LBL_USE_EXISTING_CONDITIONS'  => 'Χρησιμοποιήστε τις υπάρχουσες συνθήκες', // TODO: Review
	'LBL_RECREATE_CONDITIONS'      => 'Ανασύνθεση Προϋποθέσεις', // TODO: Review
	'LBL_SAVE_AND_CONTINUE'        => 'Αποθήκευση & Συνέχεια', // TODO: Review
	//Step3 edit view
	'LBL_ACTIVE'                   => 'Ενεργό', // TODO: Review
	'LBL_TASK_TYPE'                => 'Τύπος Εργασίας', // TODO: Review
	'LBL_TASK_TITLE'               => 'Τίτλος Εργασίας', // TODO: Review
	'LBL_ADD_TASKS_FOR_WORKFLOW'   => 'Προσθήκη εργασίας για ροές εργασίας', // TODO: Review
	'LBL_EXECUTE_TASK'             => 'Εκτέλεση εργασιών', // TODO: Review
	'LBL_SELECT_OPTIONS'           => 'Επιλέξτε Επιλογές', // TODO: Review
	'LBL_ADD_FIELD'                => 'Προσθήκη πεδίου', // TODO: Review
	'LBL_ADD_TIME'                 => 'Προσθήκη Ώρας', // TODO: Review
	'LBL_TITLE'                    => 'Τίτλος', // TODO: Review
	'LBL_PRIORITY'                 => 'Προτεραιότητα', // TODO: Review
	'LBL_ASSIGNED_TO'              => 'Σχετικό με', // TODO: Review
	'LBL_TIME'                     => 'Χρόνος', // TODO: Review
	'LBL_DUE_DATE'                 => 'Ημερομηνία Λήξης', // TODO: Review
	'LBL_THE_SAME_VALUE_IS_USED_FOR_START_DATE' => 'Η ίδια τιμή χρησιμοποιείται για την Ημερομηνία Έναρξης', // TODO: Review
	'LBL_EVENT_NAME'               => 'Όνομα συμβάντος', // TODO: Review
	'LBL_TYPE'                     => 'Τύπος', // TODO: Review
	'LBL_METHOD_NAME'              => 'Όνομα Μεθόδου', // TODO: Review
	'LBL_RECEPIENTS'               => 'Παραλήπτες', // TODO: Review
	'LBL_ADD_FIELDS'               => 'Προσθήκη πεδίων', // TODO: Review
	'LBL_SMS_TEXT'                 => 'Γραπτό Μήνυμα', // TODO: Review
	'LBL_SET_FIELD_VALUES'         => 'Ορισμός Πεδίο τιμών', // TODO: Review
	'LBL_IN_ACTIVE'                => 'Αδρανής', // TODO: Review
	'LBL_SEND_NOTIFICATION'        => 'Αποστολή Ειδοποίησης', // TODO: Review
	'LBL_START_TIME'               => 'Ώρα Έναρξης', // TODO: Review
	'LBL_START_DATE'               => 'Ημερομηνία έναρξης', // TODO: Review
	'LBL_END_TIME'                 => 'Ώρα λήξης', // TODO: Review
	'LBL_END_DATE'                 => 'Ημερομηνία Λήξης', // TODO: Review
	'LBL_ENABLE_REPEAT'            => 'Ενεργοποίηση Επανάληψης', // TODO: Review
	'LBL_NO_METHOD_IS_AVAILABLE_FOR_THIS_MODULE' => 'Καμία μέθοδος δεν είναι διαθέσιμη για αυτό το Άρθρωμα', // TODO: Review
	'LBL_FINISH'                   => 'Τελείωσε', // TODO: Review
	'LBL_NO_TASKS_ADDED'           => 'Όχι Εργασία', // TODO: Review
	'LBL_CANNOT_DELETE_DEFAULT_WORKFLOW' => 'Δεν μπορείτε να διαγράψετε προεπιλεγμένη ροή εργασίας', // TODO: Review
	'LBL_MODULES_TO_CREATE_RECORD' => 'Άρθρωμα που δημιουργεί εγγραφή', // TODO: Review
	'LBL_EXAMPLE_EXPRESSION'       => 'Έκφραση', // TODO: Review
	'LBL_EXAMPLE_RAWTEXT'          => 'Πρώτο Κείμενο', // TODO: Review
	'LBL_VTIGER'                   => 'Vtiger', // TODO: Review
	'LBL_EXAMPLE_FIELD_NAME'       => 'Πεδίο', // TODO: Review
	'LBL_NOTIFY_OWNER'             => 'ειδοποίηση ιδιοκτήτη', // TODO: Review
	'LBL_ANNUAL_REVENUE'           => 'Ετήσια Έσοδα', // TODO: Review
	'LBL_EXPRESSION_EXAMPLE2'      => "if mailingcountry == 'India' then concat(firstname,' ',lastname) else concat(lastname,' ',firstname) end", // TODO: Review
);

$jsLanguageStrings = array(
	'JS_STATUS_CHANGED_SUCCESSFULLY' => 'Η Κατάσταση άλλαξε με επιτυχία', // TODO: Review
	'JS_TASK_DELETED_SUCCESSFULLY' => 'Η εργασία διαγράφεται με επιτυχία', // TODO: Review
	'JS_SAME_FIELDS_SELECTED_MORE_THAN_ONCE' => 'Τα Ίδια πεδία επιλέγονται περισσότερες από μία φορά', // TODO: Review
	'JS_WORKFLOW_SAVED_SUCCESSFULLY' => 'Η Ροή Εργασίας Αποθηκεύτηκε Επιτυχώς', // TODO: Review
);
