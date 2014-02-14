<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
$languageStrings = array(
	// Basic Strings
	'SINGLE_Calendar' => 'Εργασία',
	'SINGLE_Events' => 'Συμβάν',
	'LBL_ADD_TASK' => 'Προσθήκη Εργασίας',
	'LBL_ADD_EVENT' => 'Προσθήκη Συμβάντος',
	'LBL_RECORDS_LIST' => 'Λίστα Ημερολογίου',
	'LBL_EVENTS' => 'Συμβάντα',
	'LBL_TODOS' => 'Προς εκτέλεση',
	'LBL_CALENDAR_SETTINGS' => 'Ρυθμίσεις Ημερολογίου',
	'LBL_CALENDAR_SHARING' => 'Κοινή χρήση Ημερολογίου',
	'LBL_DEFAULT_EVENT_DURATION' => 'Προεπιλογή Διάρκειας Συμβάντος',
	'LBL_CALL' => 'Τηλεφώνησε',
	'LBL_OTHER_EVENTS' => 'Άλλα Συμβάντα',
	'LBL_MINUTES' => 'Λεπτά',
	'LBL_SELECT_USERS' => 'Επιλογή Χρηστών',
	'LBL_EVENT_OR_TASK' => 'Συμβάν / Εργασία',

	// Blocks
	'LBL_TASK_INFORMATION' => 'Λεπτομέρειες Εργασίας',

	//Fields
	'Subject' => 'Θέμα',
	'Start Date & Time' => 'Ημερομηνία & Ώρα Έναρξης',
	'Activity Type'=>'Τύπος Δραστηριότητας',
	'Send Notification'=>'Αποστολή Ειδοποίησης',
	'Location'=>'Τοποθεσία',
	'End Date & Time' => 'Ημερομηνία Λήξης & Ώρα',

	//Side Bar Names
	'LBL_ACTIVITY_TYPES' => 'Τύποι Δραστηριοτήτων',
	'LBL_CONTACTS_SUPPORT_END_DATE' => 'Ημερομηνία Λήξης Υποστήριξης',
	'LBL_CONTACTS_BIRTH_DAY' => 'Ημερομηνία Γέννησης',
	'LBL_ADDED_CALENDARS' => 'Προστεθειμένα Ημερολόγια',


	//Activity Type picklist values
	'Call' => 'Τηλεφώνησε',
	'Meeting' => 'Συνάτηση',
	'Task' => 'Εργασία',

	//Status picklist values
	'Planned' => 'Προγραμματισμένο',
	'Completed' => 'Ολοκληρώθηκε',
	'Pending Input' => 'Αναμονή Πρόσθετης Πληροφορίας',
	'Not Started' => 'Δεν Ξεκίνησε',
	'Deferred' => 'Αναβλήθηκε',

	//Priority picklist values
	'Medium' => 'Μεσαία',

	'LBL_CHANGE_OWNER' => 'Αλλαγή Ιδιοκτήτη',

	'LBL_EVENT' => 'Συμβάν',
	'LBL_TASK' => 'Εργασία',
	'LBL_TASKS' => 'Εργασίες',

	'LBL_RECORDS_LIST' => 'Λίστα',
	'LBL_CALENDAR_VIEW' => 'Το Ημερολόγιό Μου',
	'LBL_SHARED_CALENDAR' => 'Κοινό Ημερολόγιο',

	//Repeat Lables - used by getTranslatedString
	'LBL_DAY0' => 'Κυριακή',
	'LBL_DAY1' => 'Δευτέρα',
	'LBL_DAY2' => 'Τρίτη',
	'LBL_DAY3' => 'Τετάρτη',
	'LBL_DAY4' => 'Πέμπτη',
	'LBL_DAY5' => 'Παρασκευή',
	'LBL_DAY6' => 'Σάββατο',

	'first' => 'Πρώτη',
	'last' => 'Τελευταία',
	'LBL_DAY_OF_THE_MONTH' => 'ημέρα του μήνα',
	'LBL_ON' => 'στις',

	'Daily'=>'Ημέρα(ες)',
	'Weekly'=>'Εβδομάδα(ες)',
	'Monthly'=>'Μήνας(ες)',
	'Yearly'=>'Έτος',
	
	//Import and Export Labels
	'LBL_IMPORT_RECORDS' => 'Εισαγωγή Εγγραφών',
	'LBL_RESULT' => 'Result',
	'LBL_FINISH' => 'Finish',
	'LBL_TOTAL_TASKS_IMPORTED' => 'Αρ. Επιτυχημένης Εισαγωγής Εργασιών ',
	'LBL_TOTAL_TASKS_SKIPPED' => 'Αρ. Εργασιών που παραλείφθηκαν, καθώς έλειπαν μία ή περισσότερες από τα απαιτούμενα πεδία ',
	'LBL_TOTAL_EVENTS_IMPORTED' => 'Αρ. Επιτυχημένης Εισαγωγής Συμβάντων ',
	'LBL_TOTAL_EVENTS_SKIPPED' => 'Αρ. Συμβάντων που παραλείφθηκαν, καθώς έλειπαν μία ή περισσότερες από τα απαιτούμενα πεδία ',
	
	'ICAL_FORMAT' => 'Τύπος iCal',
	'LBL_LAST_IMPORT_UNDONE'=>'Τελευταία σας Εισαγωγή έχει αναιρεθεί',
	'LBL_UNDO_LAST_IMPORT' => 'Αναίρεση Τελευταίας Εισαγωγής'

);

$jsLanguageStrings = array(
	'LBL_ADD_EVENT_TASK' => 'Προσθήκη Συμβάν/Εργασία',
	'JS_TASK_IS_SUCCESSFULLY_ADDED_TO_YOUR_CALENDAR' => 'Η Εργασία έχει προστεθεί επιτυχώς στο Ημερολόγιό σας',
    'LBL_SYNC_BUTTON' => 'Συγχρονισμός Τώρα',
    'LBL_SYNCRONIZING' => 'Συγχρονισμός....',
    'LBL_NOT_SYNCRONIZED' => 'Δεν έχετε συγχρονιστεί ακόμα',
    'LBL_FIELD_MAPPING' => 'Χαρτογράφηση πεδίου',
    'LBL_CANT_SELECT_CONTACT_FROM_LEADS' => 'Δεν είναι δυνατή η επιλογή των σχετικών Επαφών ως Προοπτικές',
    'JS_FUTURE_EVENT_CANNOT_BE_HELD' => 'Δεν μπορεί να θεωρηθεί Ολοκληρωμένο στο μέλλον',
	
	//Calendar view label translation
	'LBL_MONTH' => 'Μήνας',
	'LBL_TODAY' => 'Σήμερα',
	'LBL_DAY' => 'Ημέρα',
	'LBL_WEEK' => 'Εβδομάδα',
	
	'LBL_SUNDAY' => 'Κυριακή',
	'LBL_MONDAY' => 'Δευτέρα',
	'LBL_TUESDAY' => 'Τρίτη',
	'LBL_WEDNESDAY' => 'Τετάρτη',
	'LBL_THURSDAY' => 'Πέμπτη',
	'LBL_FRIDAY' => 'Παρασκευή',
	'LBL_SATURDAY' => 'Σάββατο',
	
	'LBL_SUN' => 'Κυρ',
	'LBL_MON' => 'Δευ',
	'LBL_TUE' => 'Τρι',
	'LBL_WED' => 'Τετ',
	'LBL_THU' => 'Πεμ',
	'LBL_FRI' => 'Παρ',
	'LBL_SAT' => 'Σαβ',
	
	'LBL_JANUARY' => 'Ιανουάριος',
	'LBL_FEBRUARY' => 'Φεβρουάριος',
	'LBL_MARCH' => 'Μάρτιος',
	'LBL_APRIL' => 'Απρίλιος',
	'LBL_MAY' => 'Μάιος',
	'LBL_JUNE' => 'Ιούνιος',
	'LBL_JULY' => 'Ιούλιος',
	'LBL_AUGUST' => 'Αύγουστος',
	'LBL_SEPTEMBER' => 'Σεπτέμβριος',
	'LBL_OCTOBER' => 'Οκτώβριος',
	'LBL_NOVEMBER' => 'Νοέμβριος',
	'LBL_DECEMBER' => 'Δεκέμβριος',
	
	'LBL_JAN' => 'Ιαν',
	'LBL_FEB' => 'Φεβ',
	'LBL_MAR' => 'Μαρ',
	'LBL_APR' => 'Απρ',
	'LBL_MAY' => 'Μαϊ',
	'LBL_JUN' => 'Ιούν',
	'LBL_JUL' => 'Ιούλ',
	'LBL_AUG' => 'Αυγ',
	'LBL_SEP' => 'Σεπ',
	'LBL_OCT' => 'Οκτ',
	'LBL_NOV' => 'Νοέ',
	'LBL_DEC' => 'Δεκ',
	
	'LBL_ALL_DAY' => 'Ολοήμερο',
	//End
);
