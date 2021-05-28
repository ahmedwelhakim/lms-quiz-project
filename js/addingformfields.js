let counter = 0;

function moreFields(q_div_id) {
    counter++;
    let newFields = document.getElementById(q_div_id).cloneNode(true);
    // newFields.name = "zdazda";
    newFields.id += counter;
    newFields.style.display = 'block';
    let newField = newFields.childNodes;
    for (let i = 0; i < newField.length; i++) {
        let theName = newField[i].name
        if (theName)
            newField[i].name += counter;
        grandChildren = newField[i].childNodes;

        for (let j = 0; j < grandChildren.length; j++) {
            if (grandChildren[j].name)
                grandChildren[j].name += counter;
        }
    }
    let insertHere = document.getElementById(q_div_id);
    insertHere.parentNode.insertBefore(newFields, insertHere);
    document.getElementById('counter').value = counter;
}

window.onload = moreFields('mc-');