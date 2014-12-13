function SavedSearchHelper(config) {

    this.ShowSavedSearchList = showSavedSearchList;
    this.ShowNewSavedSearchPanel = showNewSavedSearchPanel;
    this.ShowPopup = showPopup;
    
    function showSavedSearchList() {
        evalLinkButton(config.SavedSearchListDisplayControlID);
    };
    
    function showNewSavedSearchPanel() {
        evalLinkButton(config.SavedSearchAddDisplayControlID);
    };

    function showPopup(queryStringPopupControlParameter) {
        if (queryStringPopupControlParameter == "kayitliArama") {            
            showSavedSearchList();
        }
        else if (queryStringPopupControlParameter == "aramayiKaydet") {
            showNewSavedSearchPanel();
        }
    };
};