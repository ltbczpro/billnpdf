$(function() {
    const $button = $("#plus");
    var nbNewField = 0;

    const addNewFields = function() {
        nbNewField ++;
        var newFields = [];

        var newFieldLabelName = $('<label>', { for:"productName" + nbNewField, class:"col-sm-3"});
        newFieldLabelName.html("Name of your product:");
        newFields.push(newFieldLabelName);
        var newFieldName = $('<input>', { name: "productName" + nbNewField, placeholder:"Enter your product Name", class:"col-sm-9"});
        newFields.push(newFieldName);
        var newFieldLabelDesi = $('<label>', { for:"productDesi" + nbNewField, class:"col-sm-3"});
        newFieldLabelDesi.html("Designation of your product:");
        newFields.push(newFieldLabelDesi);
        var newFieldDesi = $('<input>', { name: "productDesi" + nbNewField, placeholder:"Enter your description", class:"col-sm-9"});
        newFields.push(newFieldDesi);
        $("#fieldsContainer").append(newFields);
        $("#nbNewProduct").val(nbNewField);

    };
    $button.on("click",addNewFields);

});


