angular.module('plunker', ['ui.bootstrap']);
var TabsDemoCtrl = function ($scope) {
  $scope.tabs = [
    { title:'Documents', content:'If showing Documents, then this is a table of documents, where each row shows a document, and columns show things like type, date, size, etc. Clicking on a document shows it in this space. The document view can be dismissed to return to the table.' },
    { title:'People', content:'If showing People, then this is a table of people, where each row shows a person, and columns show things like contact informaHon, role in the Clicking on a personâ€™s name shows contact detail in this space. That detail deal, last Hme on-line, etc. can be dismissed to return to the table.'},
    { title:'Email', content:'If showing Email messages, then this is a table of messages, organized (perhaps) by thread, where each row is an email message and columnsshow things like Sender, To, CC, date, names of aMachments, etc. Message detail brings up a dismissable window; other items bring up the appropriate data type tab (Documents or People) with the appropriate detail view selected.'}
  ];
};