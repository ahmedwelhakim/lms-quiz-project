var counter = 0;

function moreFields(q_div_id) {
    counter++;
    var newFields = document.getElementById(q_div_id).cloneNode(true);
    newFields.id += counter;
    newFields.style.display = 'block';
    var newField = newFields.childNodes;
    for (var i=0;i<newField.length;i++) {
        var theName = newField[i].name
        if (theName)
            newField[i].name = theName + counter;
    }
    var insertHere = document.getElementById(q_div_id);
    insertHere.parentNode.insertBefore(newFields,insertHere);
}

window.onload = moreFields('mc-');