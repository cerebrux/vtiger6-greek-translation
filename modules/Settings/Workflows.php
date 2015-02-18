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
	'LBL_NEW' => 'Νέο',
	'LBL_WORKFLOW' => 'Ροή Ενεργειών',
	'LBL_CREATING_WORKFLOW' => 'Δημιουργία Ροής Ενεργειών',
	'LBL_EDITING_WORKFLOW' => 'Επεξεργασία ροής ενεργειών',
	'LBL_NEXT' => 'Επόμενο',

	//Edit view
	'LBL_STEP_1' => 'Βήμα 1',
	'LBL_ENTER_BASIC_DETAILS_OF_THE_WORKFLOW' => 'Εισάγετε βασικά στοιχεία της ροής ενεργειών',
	'LBL_SPECIFY_WHEN_TO_EXECUTE' => 'Καθορίστε πότε να εκτελεστεί αυτή η ροή ενεργειών',
	'ON_FIRST_SAVE' => 'Μόνο Κατά την Πρώτη Αποθήκευση',
	'ONCE' => 'Μέχρι την πρώτη φορά που η συνθήκη θα είναι αληθής',
	'ON_EVERY_SAVE' => 'Κάθε φορά που η εγγραφή αποθηκεύεται',
	'ON_MODIFY' => 'Κάθε φορά που η εγγραφή τροποποιείται',
	'MANUAL' => 'Σύστημα',
	'SCHEDULE_WORKFLOW' => 'Προγραμματισμός Ροής Ενεργειών',
	'ADD_CONDITIONS' => 'Προσθήκη Προϋποθέσεων',
	'ADD_TASKS' => 'Προσθήκη Εργασιών',

	//Step2 edit view
	'LBL_EXPRESSION' => 'Έκφραση',
	'LBL_FIELD_NAME' => 'Πεδίο',
	'LBL_SET_VALUE' => 'Ορισμός Τιμής',
	'LBL_USE_FIELD' => 'Πεδίο σε Χρήση',
	'LBL_USE_FUNCTION' => 'Χρησιμοποιήστε Λειτουργία',
	'LBL_RAW_TEXT' => 'Πρώτο κείμενο',
	'LBL_ENABLE_TO_CREATE_FILTERS' => 'Επιτρέπουν να δημιουργήσετε φίλτρα',
	'LBL_CREATED_IN_OLD_LOOK_CANNOT_BE_EDITED' => 'Αυτή η ροή ενεργειών δημιουργήθηκε σε παλαιότερη εμφάνιση. Όροι δημιουργήθηκαν σε παλαιότερες ματιά δεν μπορεί να επεξεργαστεί. Μπορείτε να επιλέξετε να αναδημιουργήσει τις προϋποθέσεις, ή χρησιμοποιήστε τις υπάρχουσες συνθήκες, χωρίς να αλλάζει τους.',
	'LBL_USE_EXISTING_CONDITIONS' => 'Χρησιμοποιήστε τις υπάρχουσες συνθήκες',
	'LBL_RECREATE_CONDITIONS' => 'Ανασύνθεση Προϋποθέσεις',
	'LBL_SAVE_AND_CONTINUE' => 'Αποθήκευση & Συνέχεια',

	//Step3 edit view
	'LBL_ACTIVE' => 'Ενεργό',
	'LBL_TASK_TYPE' => 'Τύπος Εργασίας',
	'LBL_TASK_TITLE' => 'Τίτλος Εργασίας',
	'LBL_ADD_TASKS_FOR_WORKFLOW' => 'Προσθήκη εργασίας για ροές ενεργειών',
	'LBL_TASK_TYPE' => 'Τύπος Εργασίας',
	'LBL_EXECUTE_TASK' => 'Εκτέλεση εργασιών',
	'LBL_SELECT_OPTIONS' => 'Επιλέξτε Επιλογές',
	'LBL_ADD_FIELD' => 'Προσθήκη πεδίου',
	'LBL_ADD_TIME' => 'Προσθήκη Ώρας',
	'LBL_TITLE' => 'Τίτλος',
	'LBL_PRIORITY' => 'Προτεραιότητα',
	'LBL_ASSIGNED_TO' => 'Σχετικό με',
	'LBL_TIME' => 'Χρόνος',
	'LBL_DUE_DATE' => 'Ημερομηνία Λήξης',
	'LBL_THE_SAME_VALUE_IS_USED_FOR_START_DATE' => 'Η ίδια τιμή χρησιμοποιείται για την Ημερομηνία Έναρξης',
	'LBL_EVENT_NAME' => 'Όνομα συμβάντος',
	'LBL_TYPE' => 'Τύπος',
	'LBL_METHOD_NAME' => 'Όνομα Μεθόδου',
	'LBL_RECEPIENTS' => 'Παραλήπτες',
	'LBL_ADD_FIELDS' => 'Προσθήκη πεδίων',
	'LBL_SMS_TEXT' => 'Γραπτό Μήνυμα',
	'LBL_SET_FIELD_VALUES' => 'Ορισμός Πεδίο τιμών',
	'LBL_ADD_FIELD' => 'Προσθήκη πεδίου',
	'LBL_IN_ACTIVE' => 'Αδρανής',
	'LBL_SEND_NOTIFICATION' => 'Αποστολή Ειδοποίησης',
	'LBL_START_TIME' => 'Ώρα Έναρξης',
	'LBL_START_DATE' => 'Ημερομηνία έναρξης',
	'LBL_END_TIME' => 'Ώρα λήξης',
	'LBL_END_DATE' => 'Ημερομηνία Λήξης',
	'LBL_ENABLE_REPEAT' => 'Ενεργοποίηση Επανάληψης',
	'LBL_NO_METHOD_IS_AVAILABLE_FOR_THIS_MODULE' => 'Καμία μέθοδος δεν είναι διαθέσιμη για αυτό το Άρθρωμα',
	'LBL_FINISH' => 'Τελείωσε',
	'LBL_NO_TASKS_ADDED' => 'Καμία Εργασία',
	'LBL_CANNOT_DELETE_DEFAULT_WORKFLOW' => 'Δεν μπορείτε να διαγράψετε προεπιλεγμένη ροή εργασίας',
	'LBL_MODULES_TO_CREATE_RECORD' => 'Άρθρωμα που δημιουργεί εγγραφή',
	'LBL_EXAMPLE_EXPRESSION' => 'Έκφραση',
	'LBL_EXAMPLE_RAWTEXT' => 'Πρώτο Κείμενο',
	'LBL_VTIGER' => 'Vtiger',
	'LBL_EXAMPLE_FIELD_NAME' => 'Πεδίο',
	'LBL_NOTIFY_OWNER' => 'ειδοποίηση ιδιοκτήτη',
	'LBL_ANNUAL_REVENUE' => 'Ετήσια Έσοδα',
	'LBL_EXPRESSION_EXAMPLE2' => "if mailingcountry == 'India' then concat(firstname,' ',lastname) else concat(lastname,' ',firstname) end"

	
);

$jsLanguageStrings = array(
	'JS_STATUS_CHANGED_SUCCESSFULLY' => 'Η Κατάσταση άλλαξε με επιτυχία',
	'JS_TASK_DELETED_SUCCESSFULLY' => 'Η εργασία διαγράφεται με επιτυχία',
	'JS_SAME_FIELDS_SELECTED_MORE_THAN_ONCE' => 'Τα Ίδια πεδία επιλέγονται περισσότερες από μία φορά',
	'JS_WORKFLOW_SAVED_SUCCESSFULLY' => 'Η Ροή Εργασίας Αποθηκεύτηκε Επιτυχώς'
);