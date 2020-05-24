var searchForm = document.getElementById("searchForm");

if (searchForm.method === 'get') {
    searchForm.onsubmit = function (e) {
        e.preventDefault();

        var query = $(this).serializeArray().filter(function (i) {
            return i.value;
        });

        window.location.href = $(this).attr('action') + (query ? '?' + $.param(query) : '');
    };
}

document.getElementById('searchFormReset').addEventListener("click", function(e){
    e.preventDefault();
    
    resetFormById("searchForm");
});

function resetFormById(searchFormId) {

    var searchForm = document.getElementById(searchFormId);
    var elements = searchForm.elements;

    searchForm.reset();

    for (i = 0; i < elements.length; i++) {

        fieldType = elements[i].type.toLowerCase();

        switch (fieldType) {
            case "text":
            case "password":
            case "textarea":
            case "hidden":
                elements[i].value = "";
                break;
            case "radio":
            case "checkbox":
                if (elements[i].checked) {
                    elements[i].checked = false;
                }
                break;
            case "select-one":
            case "select-multi":
                elements[i].selectedIndex = -1;
                break;
            default:
                break;
        }
    }

}